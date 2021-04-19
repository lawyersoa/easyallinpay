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

use EasyAllInPay\Kernel\Exceptions\InvalidArgumentException;

class RequestBasic
{
    /**
     * @var string 商户应用ID
     */
    private $sysId;

    /**
     * @var string
     */
    private $sign;

    /**
     * @var string
     */
    private $timestamp;

    /**
     * @var string
     */
    private $v;

    /**
     * @var RequestReq 请求参数
     */
    private $req;

    /**
     * @return string|null
     */
    public function getSysId(): ?string
    {
        return $this->sysId;
    }

    /**
     * 设置应用ID
     *
     * @param string $sysId 应用ID
     * @return RequestBasic
     * @throws InvalidArgumentException
     */
    public function setSysId(string $sysId): RequestBasic
    {
        if(!$sysId){
            throw new InvalidArgumentException("非法的应用ID");
        }
        $this->sysId = $sysId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSign(): ?string
    {
        return $this->sign;
    }

    /**
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }

    /**
     * @return string|null
     */
    public function getV(): ?string
    {
        return $this->v;
    }

    /**
     * @return string|null
     */
    public function getReq(): ?string
    {
        return $this->req;
    }

    /**
     * @param string $sign
     * @return RequestBasic
     * @throws InvalidArgumentException
     */
    public function setSign(string $sign): RequestBasic
    {
        if(!$sign){
            throw new InvalidArgumentException("非法的签名");
        }
        $this->sign = $sign;
        return $this;
    }

    /**
     * 设置请求时间戳
     *
     * @param string $timestamp 请求时间戳
     * @return RequestBasic
     * @throws InvalidArgumentException
     */
    public function setTimestamp(string $timestamp): RequestBasic
    {
        if(!$timestamp){
            throw new InvalidArgumentException("非法的时间戳");
        }
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * 设置接口版本号
     *
     * @param string $v 接口版本号
     * @return RequestBasic
     * @throws InvalidArgumentException
     */
    public function setV(string $v): RequestBasic
    {
        if(!$v){
            throw new InvalidArgumentException("非法的版本号");
        }
        $this->v = $v;
        return $this;
    }

    /**
     * 设置请求体
     *
     * @param RequestReq $req 请求体
     * @return RequestBasic
     * @throws InvalidArgumentException
     */
    public function setReq(RequestReq $req): RequestBasic
    {
        if(!$req){
            throw new InvalidArgumentException("非法的请求体");
        }
        $this->req = $req;
        return $this;
    }

}
