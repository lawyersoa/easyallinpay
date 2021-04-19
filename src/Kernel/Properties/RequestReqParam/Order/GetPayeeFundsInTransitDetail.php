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

class GetPayeeFundsInTransitDetail extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 账户集编号
     */
    private $accountSetNo;

    /**
     * @var string 商户订单编号
     */
    private $bizOrderNo;

    /**
     * @var string 开始日期
     */
    private $dateStart;

    /**
     * @var string 截止日期
     */
    private $dateEnd;

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
     * @return GetPayeeFundsInTransitDetail
     */
    public function setBizUserId(string $bizUserId): GetPayeeFundsInTransitDetail
    {
        $this->bizUserId = $bizUserId;
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
     * @return GetPayeeFundsInTransitDetail
     */
    public function setBizOrderNo(string $bizOrderNo): GetPayeeFundsInTransitDetail
    {
        $this->bizOrderNo = $bizOrderNo;
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
     * @return GetPayeeFundsInTransitDetail
     */
    public function setAccountSetNo(string $accountSetNo): GetPayeeFundsInTransitDetail
    {
        $this->accountSetNo = $accountSetNo;
        return $this;
    }

    /**
     * 获取开始日期
     *
     * @return string|null
     */
    public function getDateStart(): ?string
    {
        return $this->dateStart;
    }

    /**
     * 设置开始日期
     *
     * @param string $dateStart 开始日期
     * @return GetPayeeFundsInTransitDetail
     */
    public function setDateStart(string $dateStart): GetPayeeFundsInTransitDetail
    {
        $this->dateStart = $dateStart;
        return $this;
    }

    /**
     * 开始结束日期
     *
     * @return string|null
     */
    public function getDateEnd(): ?string
    {
        return $this->dateEnd;
    }

    /**
     * 设置结束日期
     *
     * @param string $dateEnd 结束日期
     * @return GetPayeeFundsInTransitDetail
     */
    public function setDateEnd(string $dateEnd): GetPayeeFundsInTransitDetail
    {
        $this->dateEnd = $dateEnd;
        return $this;
    }
}
