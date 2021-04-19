<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Properties;
use EasyAllInPay\Kernel\Properties\RequestReqParam\RequestReqParam;

class RequestReq
{
    /**
     * @var string 服务
     */
    private $service;

    /**
     * @var string 方法
     */
    private $method;

    /**
     * @var RequestReqParam 请求参数
     */
    private $param;

    /**
     * 获取请求服务
     *
     * @return string|null
     */
    public function getService(): ?string
    {
        return $this->service;
    }

    /**
     * 设置请求服务
     *
     * @param string $service 服务名
     * @return RequestReq
     */
    public function setService(string $service): RequestReq
    {
        $this->service = $service;
        return $this;
    }


    /**
     * 获取请求方法
     *
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * 设置请求方法
     *
     * @param string $method 方法名
     * @return RequestReq
     */
    public function setMethod(string $method): RequestReq
    {
        $this->method = $method;
        return $this;
    }

    /**
     * 获取请求参数
     *
     * @return RequestReqParam
     */
    public function getParam(): RequestReqParam
    {
        return $this->param;
    }

    /**
     * 设置请求参数
     *
     * @param RequestReqParam $param 参数
     * @return RequestReq
     */
    public function setParam(RequestReqParam $param): RequestReq
    {
        $this->param = $param;
        return $this;
    }

}
