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

class FreezeMoney extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 商户冻结金额订单号
     */
    private $bizFrozenNo;

    /**
     * @var string 账户集编号
     */
    private $accountSetNo;

    /**
     * @var int 冻结金额
     */
    private $amount;

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
     * @return FreezeMoney
     */
    public function setBizUserId(string $bizUserId): FreezeMoney
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取商户冻结订单号
     *
     * @return string|null
     */
    public function getBizFrozenNo(): ?string
    {
        return $this->bizFrozenNo;
    }

    /**
     * 设置商户冻结订单号
     *
     * @param string $bizFrozenNo 商户冻结订单号
     * @return FreezeMoney
     */
    public function setBizFrozenNo(string $bizFrozenNo): FreezeMoney
    {
        $this->bizFrozenNo = $bizFrozenNo;
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
     * @return FreezeMoney
     */
    public function setAccountSetNo(string $accountSetNo): FreezeMoney
    {
        $this->accountSetNo = $accountSetNo;
        return $this;
    }

    /**
     * 获取冻结金额
     *
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置冻结金额
     *
     * @param int $amount 冻结金额
     * @return FreezeMoney
     */
    public function setAmount(int $amount): FreezeMoney
    {
        $this->amount = $amount;
        return $this;
    }
}
