<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Http;

use EasyAllInPay\Kernel\Exceptions\Exception;
use EasyAllInPay\Kernel\Exceptions\RequestException;
use EasyAllInPay\Kernel\Exceptions\ResponseException;
use EasyAllInPay\Kernel\Properties\JumpPageResponse;
use EasyAllInPay\Kernel\Properties\RequestBasic;
use EasyAllInPay\Kernel\Properties\RequestReq;
use EasyAllInPay\Kernel\Properties\ResponseSignedValue\ResponseSignedValue;
use GuzzleHttp\Client as BaseClient;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\TransferStats;
use EasyAllInPay\Application;
use GuzzleHttp\Exception\GuzzleException;
use EasyAllInPay\Kernel\Exceptions\InvalidArgumentException;
use ReflectionException;
use function EasyAllInPay\dump;

class Client extends BaseClient
{
    /**
     * HTTP请求失败重试次数
     */
    const HTTP_RETRY_TIMES = 3;

    /**
     * @var Application
     */
    protected $app;

    /**
     * @var array 配置信息
     */
    protected $config;

    /**
     * @var array 基础配置信息
     */
    protected $basicConfig;

    /**
     * @var array Http请求配置
     */
    protected $httpConfig;

    protected $requestBasicProperty;

    /**
     * @param Application $app
     * @throws InvalidArgumentException
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->config = $this->app['config']->toArray();
        $this->basicConfig = $this->config['basic'] ?? [];
        $this->httpConfig = $this->config['http_request'] ?? [];
        $this->requestBasicProperty = new RequestBasic();
        $this->requestBasicProperty->setSysId($this->basicConfig['sys_id'] ?? '')
            ->setV($this->httpConfig['version'] ?? '')
            ->setTimestamp(date('Y-m-d H:i:s'));
        parent::__construct([
            'base_uri' => $this->httpConfig['base_uri'] ?? '',
            'headers' => [
                'Content-type' => 'application/x-www-form-urlencoded;charset=UTF-8'
            ]
        ]);
    }

    /**
     * 通联HTTP POST请求方法
     *
     * @param RequestReq $req 请求体
     * @param ResponseSignedValue $res 响应体
     * @throws RequestException
     * @throws ResponseException
     * @throws ReflectionException
     * @return ResponseSignedValue
     */
    public function postJson(RequestReq $req, ResponseSignedValue $res)
    {
        //包装请求参数
        $param['req'] = $this->_buildRequestBody($req);
        $param['sysid'] = $this->requestBasicProperty->getSysId();
        $param['timestamp'] = $this->requestBasicProperty->getTimestamp();
        $param['v'] = $this->requestBasicProperty->getV();
        $param['sign'] = $this->app['encryptor']->sign($param['req'], $param['timestamp']);

        //========== HTTP重试请求机制 ==========
        $oriRet = false;
        for($i = 0; $i < self::HTTP_RETRY_TIMES; $i++){
            $oriRet = $this->_request($param);
            if($oriRet){
                break;
            }
        }
        if(is_object($oriRet) && isInstanceOf($oriRet, 'GuzzleException')){
            throw new RequestException("Request AllInPay failed.//{$oriRet->getLine()}//{$oriRet->getMessage()}");
        }
        $retString = trim($oriRet['ret']->getBody()->getContents());
        $retStat = $oriRet['stat'];

        //========== 验证签名 ==========
        $ret = json_decode($retString, true);
        $sign = $ret['sign'] ?? '';
        $signedValue = $ret['signedValue'] ?? '';
        $status = $ret['status'] ?? '';
        $signVerified = base64_encode(hash('md5', $signedValue, true));
        if(!$this->app['encryptor']->verify($signVerified, $sign)){
            throw new ResponseException("Verify response result failed.");
        }
        //========== 响应结果处理 ==========
        unset($ret['sign']);
        $status = strtolower($status);
        if($status != 'ok'){
            throw new ResponseException($ret['message'], intval($ret['errorCode']));
        }
        $ret = json_decode($signedValue, true);
        $this->app['logger']->info('', [
            'REQUEST' => $param,
            'RESPONSE' => $ret,
            'STAT' => [
                'ERROR_DATA' => $retStat->getHandlerErrorData(),
                'EFFECTIVE_URI' => $retStat->getHandlerErrorData(),
                'TRANSFER_TIME' => $retStat->getTransferTime(),
                'STATS' => $retStat->getHandlerStats(),
            ]
        ]);
        return $res->buildResponse($ret);
    }

    /**
     * 通联页面请求方法
     *
     * @param string $uri 跳转地址
     * @param RequestReq $req 请求体
     * @param JumpPageResponse $res 响应体
     * @return JumpPageResponse
     * @throws ReflectionException
     * @throws RequestException
     */
    public function jumpPage(string $uri, RequestReq $req, JumpPageResponse $res)
    {
        //包装请求参数
        $param['req'] = $this->_buildRequestBody($req);
        $param['sysid'] = $this->requestBasicProperty->getSysId();
        $param['timestamp'] = $this->requestBasicProperty->getTimestamp();
        $param['v'] = $this->requestBasicProperty->getV();
        $param['sign'] = $this->app['encryptor']->sign($param['req'], $param['timestamp']);

        $url = $uri . '?' . http_build_query($param) . '&';
        $res->setJumpUrl($url);
        return $res;
    }

    /**
     * 构建请求体
     *
     * @param RequestReq $req
     * @return  mixed
     * @throws RequestException
     * @throws \ReflectionException
     */
    private function _buildRequestBody(RequestReq $req)
    {
        $request['service'] = $req->getService();
        $request['method'] = $req->getMethod();
        $request['param'] = $req->getParam()->buildParam();
        return str_replace("\r\n", "", json_encode($request));
    }

    /**
     * 重试请求机制
     *
     * @param array $param 请求参数
     * @return mixed
     */
    private function _request(array $param)
    {
        $stat = null;
        try {
            $ret = parent::post('', [
                RequestOptions::FORM_PARAMS => $param,
                RequestOptions::TIMEOUT => $this->httpConfig['timeout'] ?? 60,
                RequestOptions::ON_STATS => function (TransferStats $stats) use (&$stat) {
                    $stat = $stats;
                }
            ]);
            return compact('ret', 'stat');
        } catch (GuzzleException $e) {
            return false;
        }
    }

    private function _response()
    {

    }

}
