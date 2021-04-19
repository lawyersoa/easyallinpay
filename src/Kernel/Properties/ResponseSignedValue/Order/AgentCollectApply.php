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

class AgentCollectApply extends ResponseSignedValue
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
     * @var string 请求渠道流水号
     */
    private $reqPayInterfaceNo;

    /**
     * @var string 渠道交易流水号
     */
    private $payInterfaceOutTradeNo;

    /**
     * @var string POS支付的付款码
     */
    private $payCode;

    /**
     * @var string 交易编号
     */
    private $tradeNo;

    /**
     * @var string 微信APP支付信息
     */
    private $weChatAPPInfo;

    /**
     * @var string 支付信息
     */
    private $payInfo;

    /**
     * @var int 交易验证方式
     */
    private $validateType;

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
     * @return AgentCollectApply
     */
    public function setPayStatus(string $payStatus): AgentCollectApply
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
     * @return AgentCollectApply
     */
    public function setPayFailMessage(string $payFailMessage): AgentCollectApply
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
     * @return AgentCollectApply
     */
    public function setBizUserId(string $bizUserId): AgentCollectApply
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
     * @return AgentCollectApply
     */
    public function setOrderNo(string $orderNo): AgentCollectApply
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
     * @return AgentCollectApply
     */
    public function setBizOrderNo(string $bizOrderNo): AgentCollectApply
    {
        $this->bizOrderNo = $bizOrderNo;
        return $this;
    }

    /**
     * 获取请求渠道流水号
     *
     * @return string|null
     */
    public function getReqPayInterfaceNo(): ?string
    {
        return $this->reqPayInterfaceNo;
    }

    /**
     * 设置请求渠道流水号
     *
     * @param string $reqPayInterfaceNo 请求渠道流水号
     * @return AgentCollectApply
     */
    public function setReqPayInterfaceNo(string $reqPayInterfaceNo): AgentCollectApply
    {
        $this->reqPayInterfaceNo = $reqPayInterfaceNo;
        return $this;
    }

    /**
     * 获取渠道交易流水号
     *
     * @return string|null
     */
    public function getPayInterfaceOutTradeNo(): ?string
    {
        return $this->payInterfaceOutTradeNo;
    }

    /**
     * 设置渠道交易流水号
     *
     * @param string $payInterfaceOutTradeNo 渠道交易流水号
     * @return AgentCollectApply
     */
    public function setPayInterfaceOutTradeNo(string $payInterfaceOutTradeNo): AgentCollectApply
    {
        $this->payInterfaceOutTradeNo = $payInterfaceOutTradeNo;
        return $this;
    }

    /**
     * 获取POS支付的付款码
     *
     * @return string|null
     */
    public function getPayCode(): ?string
    {
        return $this->payCode;
    }

    /**
     * 设置POS支付的付款码
     *
     * @param string $payCode POS支付的付款码
     * @return AgentCollectApply
     */
    public function setPayCode(string $payCode): AgentCollectApply
    {
        $this->payCode = $payCode;
        return $this;
    }

    /**
     * 获取交易编号
     *
     * @return string|null
     */
    public function getTradeNo(): ?string
    {
        return $this->tradeNo;
    }

    /**
     * 设置交易编号
     *
     * @param string $tradeNo 交易编号
     * @return AgentCollectApply
     */
    public function setTradeNo(string $tradeNo): AgentCollectApply
    {
        $this->tradeNo = $tradeNo;
        return $this;
    }

    /**
     * 获取微信APP支付信息
     *
     * @return string|null
     */
    public function getWeChatAPPInfo(): ?string
    {
        return $this->weChatAPPInfo;
    }

    /**
     * 设置微信APP支付信息
     *
     * @param string $weChatAPPInfo 微信APP支付信息
     * @return AgentCollectApply
     */
    public function setWeChatAPPInfo(string $weChatAPPInfo): AgentCollectApply
    {
        $this->weChatAPPInfo = $weChatAPPInfo;
        return $this;
    }

    /**
     * 获取支付信息
     *
     * @return string|null
     */
    public function getPayInfo(): ?string
    {
        return $this->payInfo;
    }

    /**
     * 设置支付信息
     *
     * @param string $payInfo 支付信息
     * @return AgentCollectApply
     */
    public function setPayInfo(string $payInfo): AgentCollectApply
    {
        $this->payInfo = $payInfo;
        return $this;
    }

    /**
     * 获取交易验证方式
     *
     * @return int|null
     */
    public function getValidateType(): ?int
    {
        return $this->validateType;
    }

    /**
     * 设置交易验证方式
     *
     * @param int $validateType 交易验证方式
     * @return AgentCollectApply
     */
    public function setValidateType(int $validateType): AgentCollectApply
    {
        $this->validateType = $validateType;
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
     * @return AgentCollectApply
     */
    public function setExtendInfo(string $extendInfo): AgentCollectApply
    {
        $this->extendInfo = $extendInfo;
        return $this;
    }
}
