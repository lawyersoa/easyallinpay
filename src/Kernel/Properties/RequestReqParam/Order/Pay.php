<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Properties\RequestReqParam\Order;

use EasyAllInPay\Kernel\Constant\FieldMapping;
use EasyAllInPay\Kernel\Exceptions\InvalidArgumentException;
use EasyAllInPay\Kernel\Properties\RequestReqParam\RequestReqParam;

class Pay extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 商户订单编号
     */
    private $bizOrderNo;

    /**
     * @var string 业务码
     */
    private $tradeNo;

    /**
     * @var string 短信验证码
     */
    private $verificationCode;

    /**
     * @var string IP地址
     */
    private $consumerIp;

    /**
     * 获取商户用户ID
     *
     * @return string|null
     */
    public function getBizUserId(): ?string
    {
        return $this->bizUserId;
    }

    /**
     * 设置商户用户ID
     *
     * @param string $bizUserId 商户用户ID
     * @return Pay
     */
    public function setBizUserId(string $bizUserId): Pay
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取商户订单编号
     *
     * @return string|null
     */
    public function getBizOrderNo(): ?string
    {
        return $this->bizOrderNo;
    }

    /**
     * 设置商户订单编号
     *
     * @param string $bizOrderNo 商户订单编号
     * @return Pay
     */
    public function setBizOrderNo(string $bizOrderNo): Pay
    {
        $this->bizOrderNo = $bizOrderNo;
        return $this;
    }

    /**
     * 获取业务码
     *
     * @return string|null
     */
    public function getTradeNo(): ?string
    {
        return $this->tradeNo;
    }

    /**
     * 设置业务码
     *
     * @param string $tradeNo 业务码
     * @return Pay
     */
    public function setTradeNo(string $tradeNo): Pay
    {
        $this->tradeNo = $tradeNo;
        return $this;
    }

    /**
     * 获取验证码
     *
     * @return string|null
     */
    public function getVerificationCode(): ?string
    {
        return $this->verificationCode;
    }

    /**
     * 设置验证码
     *
     * @param string $verificationCode 验证码
     * @return Pay
     */
    public function setVerificationCode(string $verificationCode): Pay
    {
        $this->verificationCode = $verificationCode;
        return $this;
    }

    /**
     * 获取IP地址
     *
     * @return string|null
     */
    public function getConsumerIp(): ?string
    {
        return $this->consumerIp;
    }

    /**
     * 设置IP地址
     *
     * @param string $consumerIp IP地址
     * @return Pay
     */
    public function setConsumerIp(string $consumerIp): Pay
    {
        $this->consumerIp = $consumerIp;
        return $this;
    }
}
