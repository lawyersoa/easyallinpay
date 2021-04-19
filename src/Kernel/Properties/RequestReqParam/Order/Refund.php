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

class Refund extends RequestReqParam
{
    /**
     * @var string 商户订单号
     */
    private $bizOrderNo;

    /**
     * @var string 原商户订单号
     */
    private $oriBizOrderNo;

    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var int 退款方式
     */
    private $refundType;

    /**
     * @var array 收款人退款金额
     */
    private $refundList;

    /**
     * @var string 后台通知地址
     */
    private $backUrl;

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
     * @var string 扩展信息
     */
    private $extendInfo;

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
     * @return Refund
     */
    public function setBizUserId(string $bizUserId): Refund
    {
        $this->bizUserId = $bizUserId;
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
     * @return Refund
     */
    public function setBizOrderNo($bizOrderNo)
    {
        $this->bizOrderNo = $bizOrderNo;
        return $this;
    }

    /**
     * 获取原商户订单编号
     *
     * @return mixed
     */
    public function getOriBizOrderNo()
    {
        return $this->oriBizOrderNo;
    }

    /**
     * 设置原商户订单编号
     *
     * @param mixed $oriBizOrderNo 商户订单编号
     * @return Refund
     */
    public function setOriBizOrderNo($oriBizOrderNo)
    {
        $this->oriBizOrderNo = $oriBizOrderNo;
        return $this;
    }

    /**
     * 获取退款方式
     *
     * @return int|null
     */
    public function getRefundType(): ?int
    {
        return $this->refundType;
    }

    /**
     * 设置退款方式
     *
     * @param int $refundType 退款方式
     * @return Refund
     */
    public function setRefundType(int $refundType): Refund
    {
        $this->refundType = $refundType;
        return $this;
    }

    /**
     * 获取收款人的退款金额
     *
     * @return array|null
     */
    public function getRefundList(): ?array
    {
        return $this->refundList;
    }

    /**
     * 设置收款人的退款金额
     *
     * @param array $refundList 收款人的退款金额
     * @return Refund
     */
    public function setRefundList(array $refundList): Refund
    {
        $this->refundList = $refundList;
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
     * @return Refund
     */
    public function setBackUrl(string $backUrl): Refund
    {
        $this->backUrl = $backUrl;
        return $this;
    }

    /**
     * 获取退款总金额
     *
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置退款总金额
     *
     * @param int $amount 退款总金额
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
