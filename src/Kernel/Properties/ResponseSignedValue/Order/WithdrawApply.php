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

class WithdrawApply extends ResponseSignedValue
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
     * @var string 通商云订单号
     */
    private $orderNo;

    /**
     * @var string 商户订单编号
     */
    private $bizOrderNo;

    /**
     * @var string 扩展信息
     */
    private $extendInfo;

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
     * @return WithdrawApply
     */
    public function setPayStatus(string $payStatus): WithdrawApply
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
     * @return WithdrawApply
     */
    public function setPayFailMessage(string $payFailMessage): WithdrawApply
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
     * @return WithdrawApply
     */
    public function setBizUserId(string $bizUserId): WithdrawApply
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取通商云订单编号
     *
     * @return string|null
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * 设置通商云订单编号
     *
     * @param string $orderNo 通商云订单编号
     * @return WithdrawApply
     */
    public function setOrderNo(string $orderNo): WithdrawApply
    {
        $this->orderNo = $orderNo;
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
     * @return WithdrawApply
     */
    public function setBizOrderNo(string $bizOrderNo): WithdrawApply
    {
        $this->bizOrderNo = $bizOrderNo;
        return $this;
    }

    /**
     * 获取扩展信息
     *
     * @return string|null
     */
    public function getExtendInfo(): ?string
    {
        return $this->extendInfo;
    }

    /**
     * 设置扩展信息
     *
     * @param string $extendInfo 扩展信息
     * @return WithdrawApply
     */
    public function setExtendInfo(string $extendInfo): WithdrawApply
    {
        $this->extendInfo = $extendInfo;
        return $this;
    }
}
