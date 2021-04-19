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

class SignalAgentPay extends RequestReqParam
{
    /**
     * @var string 商户订单编号
     */
    private $bizOrderNo;

    /**
     * @var array 源托管代收订单付款信息
     */
    private $collectPayList;

    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 账户集编号
     */
    private $accountSetNo;

    /**
     * @var string 后台通知地址
     */
    private $backUrl;

    /**
     * @var int 订单金额
     */
    private $amount;

    /**
     * @var int 手续费
     */
    private $fee;

    /**
     * @var array 分账规则
     */
    private $splitRuleList;

    /**
     * @var int 商品类型
     */
    private $goodsType;

    /**
     * @var int 商户商品编号
     */
    private $bizGoodsNo;

    /**
     * @var int 业务码
     */
    private $tradeCode;

    /**
     * @var string 摘要
     */
    private $summary;

    /**
     * @var string 扩展信息
     */
    private $extendInfo;

    /**
     * 获取商户订单编号
     *
     * @return mixed
     */
    public function getBizOrderNo()
    {
        return $this->bizOrderNo;
    }

    /**
     * 设置商户订单编号
     *
     * @param mixed $bizOrderNo 商户订单编号
     * @return SignalAgentPay
     */
    public function setBizOrderNo($bizOrderNo): SignalAgentPay
    {
        $this->bizOrderNo = $bizOrderNo;
        return $this;
    }

    /**
     * 获取源托管代收订单付款信息
     *
     * @return array|null
     */
    public function getCollectPayList(): ?array
    {
        return $this->collectPayList;
    }

    /**
     * 设置源托管代收订单付款信息
     *
     * @param array $collectPayList 源托管代收订单付款信息
     * @return SignalAgentPay
     */
    public function setCollectPayList(array $collectPayList): SignalAgentPay
    {
        $this->collectPayList = $collectPayList;
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
     * @return SignalAgentPay
     */
    public function setBizUserId(string $bizUserId): SignalAgentPay
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取账户集编号
     *
     * @return string|null
     */
    public function getAccountSetNo(): ?string
    {
        return $this->accountSetNo;
    }

    /**
     * 设置账户集编号
     *
     * @param string $accountSetNo 账户集编号
     * @return SignalAgentPay
     */
    public function setAccountSetNo(string $accountSetNo): SignalAgentPay
    {
        $this->accountSetNo = $accountSetNo;
        return $this;
    }

    /**
     * 获取商品类型
     *
     * @return int|null
     */
    public function getGoodsType(): ?int
    {
        return $this->goodsType;
    }

    /**
     * 设置商品类型
     *
     * @param int $goodsType 商品类型
     * @return SignalAgentPay
     */
    public function setGoodsType(int $goodsType): SignalAgentPay
    {
        $this->goodsType = $goodsType;
        return $this;
    }

    /**
     * 获取商户商品编号
     *
     * @return int|null
     */
    public function getBizGoodsNo(): ?int
    {
        return $this->bizGoodsNo;
    }

    /**
     * 设置商户商品编号
     *
     * @param int $bizGoodsNo 商户商品编号
     * @return SignalAgentPay
     */
    public function setBizGoodsNo(int $bizGoodsNo): SignalAgentPay
    {
        $this->bizGoodsNo = $bizGoodsNo;
        return $this;
    }

    /**
     * 获取业务码
     *
     * @return int|null
     */
    public function getTradeCode(): ?int
    {
        return $this->tradeCode;
    }

    /**
     * 设置业务码
     *
     * @param int $tradeCode 业务码
     * @return SignalAgentPay
     */
    public function setTradeCode(int $tradeCode): SignalAgentPay
    {
        $this->tradeCode = $tradeCode;
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
     * @return SignalAgentPay
     */
    public function setAmount(int $amount): SignalAgentPay
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 获取手续费
     *
     * @return int|null
     */
    public function getFee(): ?int
    {
        return $this->fee;
    }

    /**
     * 设置手续费
     *
     * @param int $fee 手续费
     * @return SignalAgentPay
     */
    public function setFee(int $fee): SignalAgentPay
    {
        $this->fee = $fee;
        return $this;
    }

    /**
     * 获取分账规则
     *
     * @return array|null
     */
    public function getSplitRuleList(): ?array
    {
        return $this->splitRuleList;
    }

    /**
     * 设置分账规则
     *
     * @param array $splitRuleList 分账规则
     * @return SignalAgentPay
     */
    public function setSplitRuleList(array $splitRuleList): SignalAgentPay
    {
        $this->splitRuleList = $splitRuleList;
        return $this;
    }

    /**
     * 获取后台通知地址
     *
     * @return string|null
     */
    public function getBackUrl(): ?string
    {
        return $this->backUrl;
    }

    /**
     * 设置后台通知地址
     *
     * @param string $backUrl 后台通知地址
     * @return SignalAgentPay
     */
    public function setBackUrl(string $backUrl): SignalAgentPay
    {
        $this->backUrl = $backUrl;
        return $this;
    }

    /**
     * 获取摘要
     *
     * @return string|null
     */
    public function getSummary(): ?string
    {
        return $this->summary;
    }

    /**
     * 设置摘要
     *
     * @param string $summary 摘要
     * @return SignalAgentPay
     */
    public function setSummary(string $summary): SignalAgentPay
    {
        $this->summary = $summary;
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
