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

class ConsumeApply extends RequestReqParam
{
    /**
     * @var string 付款人商户用户ID
     */
    private $payerId;

    /**
     * @var string 收款人商户用户ID
     */
    private $receiverId;

    /**
     * @var string 商户订单编号
     */
    private $bizOrderNo;

    /**
     * @var int 订单金额
     */
    private $amount;

    /**
     * @var int 手续费
     */
    private $fee;

    /**
     * @var int 交易验证方式
     */
    private $validateType;

    /**
     * @var array 分账规则
     */
    private $splitRule;

    /**
     * @var string 前台通知地址
     */
    private $frontUrl;

    /**
     * @var string 后台通知地址
     */
    private $backUrl;

    /**
     * @var string 订单过期时间
     */
    private $orderExpireDatetime;

    /**
     * @var array 支付方式
     */
    private $payMethod;

    /**
     * @var int 商品类型
     */
    private $goodsType;

    /**
     * @var int 商户商品编号
     */
    private $bizGoodsNo;

    /**
     * @var string 商品名称
     */
    private $goodsName;

    /**
     * @var string 商品描述
     */
    private $goodsDesc;

    /**
     * @var string 行业代码
     */
    private $industryCode;

    /**
     * @var string 行业名称
     */
    private $industryName;

    /**
     * @var int 访问终端类型
     */
    private $source;

    /**
     * @var string 摘要
     */
    private $summary;

    /**
     * @var string 扩展信息
     */
    private $extendInfo;

    /**
     * 获取付款人商户用户ID
     *
     * @return string|null
     */
    public function getPayerId(): ?string
    {
        return $this->payerId;
    }

    /**
     * 设置付款人商户用户ID
     *
     * @param string $payerId 付款人商户用户ID
     * @return ConsumeApply
     */
    public function setPayerId(string $payerId): ConsumeApply
    {
        $this->payerId = $payerId;
        return $this;
    }

    /**
     * 获取收款人商户用户ID
     *
     * @return string|null
     */
    public function getReceiverId(): ?string
    {
        return $this->receiverId;
    }

    /**
     * 设置收款人商户用户ID
     *
     * @param string $receiverId 收款人商户用户ID
     * @return ConsumeApply
     */
    public function setReceiverId(string $receiverId): ConsumeApply
    {
        $this->receiverId = $receiverId;
        return $this;
    }

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
     * @return ConsumeApply
     */
    public function setBizOrderNo($bizOrderNo): ConsumeApply
    {
        $this->bizOrderNo = $bizOrderNo;
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
     * @return ConsumeApply
     */
    public function setAmount(int $amount): ConsumeApply
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
     * @return ConsumeApply
     */
    public function setFee(int $fee): ConsumeApply
    {
        $this->fee = $fee;
        return $this;
    }

    /**
     * 获取交易验证类型
     *
     * @return int|null
     */
    public function getValidateType(): ?int
    {
        return $this->validateType;
    }

    /**
     * 设置交易验证类型
     *
     * @param int $validateType 交易验证类型
     * @return ConsumeApply
     */
    public function setValidateType(int $validateType): ConsumeApply
    {
        $this->validateType = $validateType;
        return $this;
    }

    /**
     * 获取分账规则
     *
     * @return array|null
     */
    public function getSplitRule(): ?array
    {
        return $this->splitRule;
    }

    /**
     * 设置分账规则
     *
     * @param array $splitRule 分账规则
     * @return ConsumeApply
     */
    public function setSplitRule(array $splitRule): ConsumeApply
    {
        $this->splitRule = $splitRule;
        return $this;
    }

    /**
     * 获取前台跳转地址
     *
     * @return string|null
     */
    public function getFrontUrl(): ?string
    {
        return $this->frontUrl;
    }

    /**
     * 设置前台跳转地址
     *
     * @param string $frontUrl 前台跳转地址
     * @return ConsumeApply
     */
    public function setFrontUrl(string $frontUrl): ConsumeApply
    {
        $this->frontUrl = $frontUrl;
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
     * @return ConsumeApply
     */
    public function setBackUrl(string $backUrl): ConsumeApply
    {
        $this->backUrl = $backUrl;
        return $this;
    }

    /**
     * 获取订单过期时间
     *
     * @return string|null
     */
    public function getOrderExpireDatetime(): ?string
    {
        return $this->orderExpireDatetime;
    }

    /**
     * 设置订单过期时间
     *
     * @param string $orderExpireDatetime 订单过期时间
     * @return ConsumeApply
     */
    public function setOrderExpireDatetime(string $orderExpireDatetime): ConsumeApply
    {
        $this->orderExpireDatetime = $orderExpireDatetime;
        return $this;
    }

    /**
     * 获取支付方式
     *
     * @return array|null
     */
    public function getPayMethod(): ?array
    {
        return $this->payMethod;
    }

    /**
     * 设置支付方式
     *
     * @param array $payMethod 支付方式
     * @return ConsumeApply
     */
    public function setPayMethod(array $payMethod): ConsumeApply
    {
        $this->payMethod = $payMethod;
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
     * @return ConsumeApply
     */
    public function setGoodsType(int $goodsType): ConsumeApply
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
     * @return ConsumeApply
     */
    public function setBizGoodsNo(int $bizGoodsNo): ConsumeApply
    {
        $this->bizGoodsNo = $bizGoodsNo;
        return $this;
    }

    /**
     * 获取商品名称
     *
     * @return string|null
     */
    public function getGoodsName(): ?string
    {
        return $this->goodsName;
    }

    /**
     * 设置商品名称
     *
     * @param string $goodsName 商品名称
     * @return ConsumeApply
     */
    public function setGoodsName(string $goodsName): ConsumeApply
    {
        $this->goodsName = $goodsName;
        return $this;
    }

    /**
     * 获取商品描述
     *
     * @return string|null
     */
    public function getGoodsDesc(): ?string
    {
        return $this->goodsName;
    }

    /**
     * 设置商品描述
     *
     * @param string $goodsName 商品名称
     * @return ConsumeApply
     */
    public function setGoodsDesc(string $goodsName): ConsumeApply
    {
        $this->goodsName = $goodsName;
        return $this;
    }

    /**
     * 获取行业代码
     *
     * @return string|null
     */
    public function getIndustryCode(): ?string
    {
        return $this->industryCode;
    }

    /**
     * 设置行业代码
     *
     * @param string $industryCode 行业代码
     * @return ConsumeApply
     */
    public function setIndustryCode(string $industryCode): ConsumeApply
    {
        $this->industryCode = $industryCode;
        return $this;
    }

    /**
     * 获取行业名称
     *
     * @return string|null
     */
    public function getIndustryName(): ?string
    {
        return $this->industryName;
    }

    /**
     * 设置行业名称
     *
     * @param string $industryName 行业名称
     * @return ConsumeApply
     */
    public function setIndustryName(string $industryName): ConsumeApply
    {
        $this->industryName = $industryName;
        return $this;
    }

    /**
     * 获取访问终端类型
     *
     * @return int|null
     */
    public function getSource(): ?int
    {
        return $this->source;
    }

    /**
     * 设置访问终端类型
     *
     * @param int $source 访问终端类型
     * @return ConsumeApply
     */
    public function setSource(int $source): ConsumeApply
    {
        $this->source = $source;
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
     * @return ConsumeApply
     */
    public function setSummary(string $summary): ConsumeApply
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
     * @return ConsumeApply
     */
    public function setExtendInfo(string $extendInfo): ConsumeApply
    {
        $this->extendInfo = $extendInfo;
        return $this;
    }
}
