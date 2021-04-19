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

class GetOrderDetail extends ResponseSignedValue
{
    /**
     * @var string 通商云订单号
     */
    private $orderNo;

    /**
     * @var string 商户订单号
     */
    private $bizOrderNo;

    /**
     * @var string 原通商云订单号
     */
    private $oriOrderNo;

    /**
     * @var string 原商户订单号
     */
    private $oriBizOrderNo;

    /**
     * @var int 订单状态
     */
    private $orderStatus;

    /**
     * @var string 失败原因
     */
    private $errorMessage;

    /**
     * @var int 订单金额
     */
    private $amount;

    /**
     * @var string 订单支付完成时间
     */
    private $payDatetime;

    /**
     * @var string 购买人商户用户ID
     */
    private $buyerBizUserId;

    /**
     * @var int 退款去向
     */
    private $refundWhereabouts;

    /**
     * @var int 代付去向
     */
    private $payWhereabouts;

    /**
     * @var string 支付人账号
     */
    private $acct;

    /**
     * @var string 借贷标志
     */
    private $acctType;

    /**
     * @var string 终端号
     */
    private $termNo;

    /**
     * @var string 渠道商户号
     */
    private $cusId;

    /**
     * @var string 通道交易流水号
     */
    private $payInterfaceOutTradeNo;

    /**
     * @var string 交易参考号
     */
    private $termRefNum;

    /**
     * @var string 渠道手续费
     */
    private $channelFee;

    /**
     * @var string 渠道交易完成时间
     */
    private $channelPayTime;

    /**
     * @var string 通道交易类型
     */
    private $payInterfaceTrxCode;

    /**
     * @var string 收银宝终端流水
     */
    private $traceNo;

    /**
     * @var string 收益宝渠道信息
     */
    private $channelData;

    /**
     * @var string 扩展信息
     */
    private $extendInfo;

    /**
     * 获取通商云订单号
     *
     * @return string|null
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * 设置通商云订单号
     *
     * @param string $orderNo 通商云订单号
     * @return GetOrderDetail
     */
    public function setOrderNo(string $orderNo): GetOrderDetail
    {
        $this->orderNo = $orderNo;
        return $this;
    }

    /**
     * 获取商户订单号
     *
     * @return string|null
     */
    public function getBizOrderNo(): ?string
    {
        return $this->bizOrderNo;
    }

    /**
     * 设置商户订单号
     *
     * @param string $bizOrderNo 商户订单号
     * @return GetOrderDetail
     */
    public function setBizOrderNo(string $bizOrderNo): GetOrderDetail
    {
        $this->bizOrderNo = $bizOrderNo;
        return $this;
    }

    /**
     * 获取原通商云订单号
     *
     * @return string|null
     */
    public function getOriOrderNo(): ?string
    {
        return $this->oriOrderNo;
    }

    /**
     * 设置原通商云订单号
     *
     * @param string $oriOrderNo 原通商云订单号
     * @return GetOrderDetail
     */
    public function setOriOrderNo(string $oriOrderNo): GetOrderDetail
    {
        $this->oriOrderNo = $oriOrderNo;
        return $this;
    }

    /**
     * 获取原商户订单号
     *
     * @return string|null
     */
    public function getOriBizOrderNo(): ?string
    {
        return $this->oriBizOrderNo;
    }

    /**
     * 设置原商户订单号
     *
     * @param string $oriBizOrderNo 原商户订单号
     * @return GetOrderDetail
     */
    public function setOriBizOrderNo(string $oriBizOrderNo): GetOrderDetail
    {
        $this->oriBizOrderNo = $oriBizOrderNo;
        return $this;
    }

    /**
     * 获取订单状态
     *
     * @return int|null
     */
    public function getOrderStatus(): ?int
    {
        return $this->orderStatus;
    }

    /**
     * 设置订单状态
     *
     * @param int $orderStatus 订单状态
     * @return GetOrderDetail
     */
    public function setOrderStatus(int $orderStatus): GetOrderDetail
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * 获取失败原因
     *
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * 设置失败原因
     *
     * @param string $errorMessage 失败原因
     * @return GetOrderDetail
     */
    public function setErrorMessage(string $errorMessage): GetOrderDetail
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * 获取订单金额
     *
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置订单金额
     *
     * @param int $amount 订单金额
     * @return GetOrderDetail
     */
    public function setAmount(int $amount): GetOrderDetail
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 获取订单支付完成时间
     *
     * @return string|null
     */
    public function getPayDatetime(): ?string
    {
        return $this->payDatetime;
    }

    /**
     * 设置订单支付完成时间
     *
     * @param string $payDatetime 订单支付完成时间
     * @return GetOrderDetail
     */
    public function setPayDatetime(string $payDatetime): GetOrderDetail
    {
        $this->payDatetime = $payDatetime;
        return $this;
    }

    /**
     * 获取付款人商户用户ID
     *
     * @return string|null
     */
    public function getBuyerBizUserId(): ?string
    {
        return $this->buyerBizUserId;
    }

    /**
     * 设置付款人商户用户ID
     *
     * @param string $buyerBizUserId 付款人商户用户ID
     * @return GetOrderDetail
     */
    public function setBuyerBizUserId(string $buyerBizUserId): GetOrderDetail
    {
        $this->buyerBizUserId = $buyerBizUserId;
        return $this;
    }

    /**
     * 获取退款去向
     *
     * @return int|null
     */
    public function getRefundWhereabouts(): ?int
    {
        return $this->refundWhereabouts;
    }

    /**
     * 设置退款去向
     *
     * @param int $refundWhereabouts 退款去向
     * @return GetOrderDetail
     */
    public function setRefundWhereabouts(int $refundWhereabouts): GetOrderDetail
    {
        $this->refundWhereabouts = $refundWhereabouts;
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
     * @return GetOrderDetail
     */
    public function setPayWhereabouts(int $payWhereabouts): GetOrderDetail
    {
        $this->payWhereabouts = $payWhereabouts;
        return $this;
    }

    /**
     * 获取支付人帐号
     *
     * @return string|null
     */
    public function getAcct(): ?string
    {
        return $this->acct;
    }

    /**
     * 设置支付人帐号
     *
     * @param string $acct 支付人帐号
     * @return GetOrderDetail
     */
    public function setAcct(string $acct): GetOrderDetail
    {
        $this->acct = $acct;
        return $this;
    }

    /**
     * 获取借贷标志
     *
     * @return string|null
     */
    public function getAcctType(): ?string
    {
        return $this->acctType;
    }

    /**
     * 设置借贷标志
     *
     * @param string $acctType 借贷标志
     * @return GetOrderDetail
     */
    public function setAcctType(string $acctType): GetOrderDetail
    {
        $this->acctType = $acctType;
        return $this;
    }

    /**
     * 获取终端号
     *
     * @return string|null
     */
    public function getTermNo(): ?string
    {
        return $this->termNo;
    }

    /**
     * 设置终端号
     *
     * @param string $termNo 终端号
     * @return GetOrderDetail
     */
    public function setTermNo(string $termNo): GetOrderDetail
    {
        $this->termNo = $termNo;
        return $this;
    }

    /**
     * 获取渠道商户号
     *
     * @return string|null
     */
    public function getCusId(): ?string
    {
        return $this->cusId;
    }

    /**
     * 设置渠道商户号
     *
     * @param string $cusId 渠道商户号
     * @return GetOrderDetail
     */
    public function setCusId(string $cusId): GetOrderDetail
    {
        $this->cusId = $cusId;
        return $this;
    }

    /**
     * 获取通道交易流水号
     *
     * @return string|null
     */
    public function getPayInterfaceOutTradeNo(): ?string
    {
        return $this->payInterfaceOutTradeNo;
    }

    /**
     * 设置通道交易流水号
     *
     * @param string $payInterfaceOutTradeNo 通道交易流水号
     * @return GetOrderDetail
     */
    public function setPayInterfaceOutTradeNo(string $payInterfaceOutTradeNo): GetOrderDetail
    {
        $this->payInterfaceOutTradeNo = $payInterfaceOutTradeNo;
        return $this;
    }

    /**
     * 获取交易参考号
     *
     * @return string|null
     */
    public function getTermRefNum(): ?string
    {
        return $this->termRefNum;
    }

    /**
     * 设置交易参考号
     *
     * @param string $termRefNum 交易参考号
     * @return GetOrderDetail
     */
    public function setTermRefNum(string $termRefNum): GetOrderDetail
    {
        $this->termRefNum = $termRefNum;
        return $this;
    }

    /**
     * 获取渠道手续费
     *
     * @return string|null
     */
    public function getChannelFee(): ?string
    {
        return $this->channelFee;
    }

    /**
     * 设置渠道手续费
     *
     * @param string $channelFee 渠道手续费
     * @return GetOrderDetail
     */
    public function setChannelFee(string $channelFee): GetOrderDetail
    {
        $this->channelFee = $channelFee;
        return $this;
    }

    /**
     * 获取渠道交易完成时间
     *
     * @return string|null
     */
    public function getChannelPayTime(): ?string
    {
        return $this->channelPayTime;
    }

    /**
     * 设置渠道交易完成时间
     *
     * @param string $channelPayTime 渠道交易完成时间
     * @return GetOrderDetail
     */
    public function setChannelPayTime(string $channelPayTime): GetOrderDetail
    {
        $this->channelPayTime = $channelPayTime;
        return $this;
    }

    /**
     * 获取通道交易类型
     *
     * @return string|null
     */
    public function getPayInterfaceTrxCode(): ?string
    {
        return $this->payInterfaceTrxCode;
    }

    /**
     * 设置通道交易类型
     *
     * @param string $payInterfaceTrxCode 通道交易类型
     * @return GetOrderDetail
     */
    public function setPayInterfaceTrxCode(string $payInterfaceTrxCode): GetOrderDetail
    {
        $this->payInterfaceTrxCode = $payInterfaceTrxCode;
        return $this;
    }

    /**
     * 获取收银宝终端流水
     *
     * @return string|null
     */
    public function getTraceNo(): ?string
    {
        return $this->traceNo;
    }

    /**
     * 设置收银宝终端流水
     *
     * @param string $traceNo 收银宝终端流水
     * @return GetOrderDetail
     */
    public function setTraceNo(string $traceNo): GetOrderDetail
    {
        $this->traceNo = $traceNo;
        return $this;
    }

    /**
     * 获取收银宝渠道信息
     *
     * @return string|null
     */
    public function getChannelData(): ?string
    {
        return $this->channelData;
    }

    /**
     * 设置收银宝渠道信息
     *
     * @param string $channelData 收银宝渠道信息
     * @return GetOrderDetail
     */
    public function setChannelData(string $channelData): GetOrderDetail
    {
        $this->channelData = $channelData;
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
     * @return GetOrderDetail
     */
    public function setExtendInfo(string $extendInfo): GetOrderDetail
    {
        $this->extendInfo = $extendInfo;
        return $this;
    }
}
