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

class ResendPaySMS extends ResponseSignedValue
{
    /**
     * @var string 商户订单号
     */
    private $bizOrderNo;

    /**
     * @var string 通商云订单号
     */
    private $orderNo;

    /**
     * @var string 手机号码
     */
    private $phone;

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
     * @return ResendPaySMS
     */
    public function setBizOrderNo(string $bizOrderNo): ResendPaySMS
    {
        $this->bizOrderNo = $bizOrderNo;
        return $this;
    }

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
     * @return ResendPaySMS
     */
    public function setOrderNo(string $orderNo): ResendPaySMS
    {
        $this->orderNo = $orderNo;
        return $this;
    }

    /**
     * 获取手机号码
     *
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * 设置手机号码
     *
     * @param string $phone 手机号码
     * @return ResendPaySMS
     */
    public function setPhone(string $phone): ResendPaySMS
    {
        $this->phone = $phone;
        return $this;
    }
}
