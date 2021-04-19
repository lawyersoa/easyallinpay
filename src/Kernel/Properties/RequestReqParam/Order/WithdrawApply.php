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

class WithdrawApply extends RequestReqParam
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
     * @var string 银行卡号/账号
     */
    private $bankCardNo;

    /**
     * @var string 银行/账户属性
     */
    private $bankCardPro;

    /**
     * @var string 提现方式
     */
    private $withdrawType;

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
     * @return WithdrawApply
     */
    public function setBizOrderNo($bizOrderNo): WithdrawApply
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
     * @return WithdrawApply
     */
    public function setBizUserId(string $bizUserId): WithdrawApply
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
     * @return WithdrawApply
     */
    public function setAccountSetNo(string $accountSetNo): WithdrawApply
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
     * @return WithdrawApply
     */
    public function setAmount(int $amount): WithdrawApply
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
     * @return WithdrawApply
     */
    public function setFee(int $fee): WithdrawApply
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
     * @return WithdrawApply
     */
    public function setValidateType(int $validateType): WithdrawApply
    {
        $this->validateType = $validateType;
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
     * @return WithdrawApply
     */
    public function setBackUrl(string $backUrl): WithdrawApply
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
     * @return WithdrawApply
     */
    public function setOrderExpireDatetime(string $orderExpireDatetime): WithdrawApply
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
     * @return WithdrawApply
     */
    public function setPayMethod(array $payMethod): WithdrawApply
    {
        $this->payMethod = $payMethod;
        return $this;
    }

    /**
     * 获取银行卡号/账号
     *
     * @return string|null
     */
    public function getBankCardNo(): ?string
    {
        return $this->bankCardNo;
    }

    /**
     * 设置银行卡号/账号
     *
     * @param string $bankCardNo 银行卡号/账号
     * @return WithdrawApply
     */
    public function setBankCardNo(string $bankCardNo): WithdrawApply
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }

    /**
     * 获取银行/账户属性
     *
     * @return string|null
     */
    public function getBankCardPro(): ?string
    {
        return $this->bankCardPro;
    }

    /**
     * 设置银行/账户属性
     *
     * @param string $bankCardPro 银行/账户属性
     * @return WithdrawApply
     */
    public function setBankCardPro(string $bankCardPro): WithdrawApply
    {
        $this->bankCardPro = $bankCardPro;
        return $this;
    }

    /**
     * 获取提现方式
     *
     * @return string|null
     */
    public function getWithdrawType(): ?string
    {
        return $this->withdrawType;
    }

    /**
     * 设置提现方式
     *
     * @param string $withdrawType 提现方式
     * @return WithdrawApply
     */
    public function setWithdrawType(string $withdrawType): WithdrawApply
    {
        $this->withdrawType = $withdrawType;
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
     * @return WithdrawApply
     */
    public function setGoodsName(string $goodsName): WithdrawApply
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
     * @return WithdrawApply
     */
    public function setIndustryCode(string $industryCode): WithdrawApply
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
     * @return WithdrawApply
     */
    public function setIndustryName(string $industryName): WithdrawApply
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
     * @return WithdrawApply
     */
    public function setSource(int $source): WithdrawApply
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
     * @return WithdrawApply
     */
    public function setExtendInfo(string $extendInfo): WithdrawApply
    {
        $this->extendInfo = $extendInfo;
        return $this;
    }
}
