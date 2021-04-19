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

class SignalAgentPay extends ResponseSignedValue
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
     * @var string 通商云订单号
     */
    private $orderNo;

    /**
     * @var string 商户订单编号
     */
    private $bizOrderNo;

    /**
     * @var int 代付去向
     */
    private $payWhereabouts;

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
     * @return SignalAgentPay
     */
    public function setPayStatus(string $payStatus): SignalAgentPay
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
     * @return SignalAgentPay
     */
    public function setPayFailMessage(string $payFailMessage): SignalAgentPay
    {
        $this->payFailMessage = $payFailMessage;
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
     * @return SignalAgentPay
     */
    public function setOrderNo(string $orderNo): SignalAgentPay
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
     * @return SignalAgentPay
     */
    public function setBizOrderNo(string $bizOrderNo): SignalAgentPay
    {
        $this->bizOrderNo = $bizOrderNo;
        return $this;
    }

    /**
     * 获取代付去向
     *
     * @return int|null
     */
    public function getPayWhereabouts(): ?int
    {
        return $this->payWhereabouts;
    }

    /**
     * 设置代付去向
     *
     * @param int $payWhereabouts 代付去向
     * @return SignalAgentPay
     */
    public function setPayWhereabouts(int $payWhereabouts): SignalAgentPay
    {
        $this->payWhereabouts = $payWhereabouts;
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
     * @return SignalAgentPay
     */
    public function setExtendInfo(string $extendInfo): SignalAgentPay
    {
        $this->extendInfo = $extendInfo;
        return $this;
    }
}
