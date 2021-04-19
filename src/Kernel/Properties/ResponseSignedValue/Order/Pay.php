<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Properties\ResponseSignedValue\Order;

use EasyAllInPay\Kernel\Properties\ResponseSignedValue\ResponseSignedValue;

class Pay extends ResponseSignedValue
{
    /**
     * @var string 支付状态
     */
    private $payStatus;

    /**
     * @var string 支付失败信息
     */
    private $payFailMessage;

    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 商户订单编号
     */
    private $bizOrderNo;

    /**
     * 获取支付状态
     *
     * @return string|null
     */
    public function getPayStatus(): ?string
    {
        return $this->payStatus;
    }

    /**
     * 设置支付状态
     *
     * @param string $payStatus 支付状态
     * @return Pay
     */
    public function setPayStatus(string $payStatus): Pay
    {
        $this->payStatus = $payStatus;
        return $this;
    }

    /**
     * 获取支付失败信息
     *
     * @return string|null
     */
    public function getPayFailMessage(): ?string
    {
        return $this->payFailMessage;
    }

    /**
     * 设置支付失败信息
     *
     * @param string $payFailMessage 支付失败信息
     * @return Pay
     */
    public function setPayFailMessage(string $payFailMessage): Pay
    {
        $this->payFailMessage = $payFailMessage;
        return $this;
    }

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
}
