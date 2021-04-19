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

class Refund extends ResponseSignedValue
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
     * @var int 本次退款总金额
     */
    private $amount;

    /**
     * @var int 代金券退款金额
     */
    private $couponAmount;

    /**
     * @var int 手续费退款金额
     */
    private $feeAmount;

    /**
     * @var string 终端交易卡号
     */
    private $termAcctNo;

    /**
     * @var string 终端交易卡号发卡机构
     */
    private $termBankName;

    /**
     * @var string 收单机构
     */
    private $aptCode;

    /**
     * @var string 终端授权码
     */
    private $termAuthCode;

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
     * @return Refund
     */
    public function setPayStatus(string $payStatus): Refund
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
     * @return Refund
     */
    public function setPayFailMessage(string $payFailMessage): Refund
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
     * @return Refund
     */
    public function setOrderNo(string $orderNo): Refund
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
     * @return Refund
     */
    public function setBizOrderNo(string $bizOrderNo): Refund
    {
        $this->bizOrderNo = $bizOrderNo;
        return $this;
    }

    /**
     * 获取本次退款总金额
     *
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置本次退款总金额
     *
     * @param int $amount 本次退款总金额
     * @return Refund
     */
    public function setAmount(int $amount): Refund
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 获取代金券退款金额
     *
     * @return int|null
     */
    public function getCouponAmount(): ?int
    {
        return $this->couponAmount;
    }

    /**
     * 设置代金券退款金额
     *
     * @param int $couponAmount 代金券退款金额
     * @return Refund
     */
    public function setCouponAmount(int $couponAmount): Refund
    {
        $this->couponAmount = $couponAmount;
        return $this;
    }

    /**
     * 获取手续费退款金额
     *
     * @return int|null
     */
    public function getFeeAmount(): ?int
    {
        return $this->feeAmount;
    }

    /**
     * 设置手续费退款金额
     *
     * @param int $feeAmount 手续费退款金额
     * @return Refund
     */
    public function setFeeAmount(int $feeAmount): Refund
    {
        $this->feeAmount = $feeAmount;
        return $this;
    }

    /**
     * 获取终端交易卡号
     *
     * @return string|null
     */
    public function getTermAcctNo(): ?string
    {
        return $this->termAcctNo;
    }

    /**
     * 设置终端交易卡号
     *
     * @param string $termAcctNo 终端交易卡号
     * @return Refund
     */
    public function setTermAcctNo(string $termAcctNo): Refund
    {
        $this->termAcctNo = $termAcctNo;
        return $this;
    }

    /**
     * 获取终端交易卡号发卡机构
     *
     * @return string|null
     */
    public function getTermBankName(): ?string
    {
        return $this->termBankName;
    }

    /**
     * 设置终端交易卡号发卡机构
     *
     * @param string $termBankName 终端交易卡号发卡机构
     * @return Refund
     */
    public function setTermBankName(string $termBankName): Refund
    {
        $this->termBankName = $termBankName;
        return $this;
    }

    /**
     * 获取收单机构
     *
     * @return string|null
     */
    public function getAptCode(): ?string
    {
        return $this->aptCode;
    }

    /**
     * 设置收单机构
     *
     * @param string $aptCode 收单机构
     * @return Refund
     */
    public function setAptCode(string $aptCode): Refund
    {
        $this->aptCode = $aptCode;
        return $this;
    }

    /**
     * 获取终端授权码
     *
     * @return string|null
     */
    public function getTermAuthCode(): ?string
    {
        return $this->termAuthCode;
    }

    /**
     * 设置终端授权码
     *
     * @param string $termAuthCode 终端授权码
     * @return Refund
     */
    public function setTermAuthCode(string $termAuthCode): Refund
    {
        $this->termAuthCode = $termAuthCode;
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
     * @return Refund
     */
    public function setExtendInfo(string $extendInfo): Refund
    {
        $this->extendInfo = $extendInfo;
        return $this;
    }
}
