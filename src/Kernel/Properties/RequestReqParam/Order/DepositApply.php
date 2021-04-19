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

class DepositApply extends RequestReqParam
{
    /**
     * @var string 商户订单编号
     */
    private $bizOrderNo;

    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 账户集编号
     */
    private $accountSetNo;

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
     * @var string 商品名称
     */
    private $goodsName;

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
     * @return DepositApply
     */
    public function setBizOrderNo($bizOrderNo): DepositApply
    {
        $this->bizOrderNo = $bizOrderNo;
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
     * @return DepositApply
     */
    public function setBizUserId(string $bizUserId): DepositApply
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
     * @return DepositApply
     */
    public function setAccountSetNo(string $accountSetNo): DepositApply
    {
        $this->accountSetNo = $accountSetNo;
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
     * @return DepositApply
     */
    public function setAmount(int $amount): DepositApply
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
     * @return DepositApply
     */
    public function setFee(int $fee): DepositApply
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
     * @return DepositApply
     */
    public function setValidateType(int $validateType): DepositApply
    {
        $this->validateType = $validateType;
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
     * @return DepositApply
     */
    public function setFrontUrl(string $frontUrl): DepositApply
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
     * @return DepositApply
     */
    public function setBackUrl(string $backUrl): DepositApply
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
     * @return DepositApply
     */
    public function setOrderExpireDatetime(string $orderExpireDatetime): DepositApply
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
     * @return DepositApply
     */
    public function setPayMethod(array $payMethod): DepositApply
    {
        $this->payMethod = $payMethod;
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
     * @return DepositApply
     */
    public function setGoodsName(string $goodsName): DepositApply
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
     * @return DepositApply
     */
    public function setIndustryCode(string $industryCode): DepositApply
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
     * @return DepositApply
     */
    public function setIndustryName(string $industryName): DepositApply
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
     * @return DepositApply
     */
    public function setSource(int $source): DepositApply
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
     * @return DepositApply
     */
    public function setSummary(string $summary): DepositApply
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
     * @return DepositApply
     */
    public function setExtendInfo(string $extendInfo): DepositApply
    {
        $this->extendInfo = $extendInfo;
        return $this;
    }
}
