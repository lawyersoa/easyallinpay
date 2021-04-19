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

class FreezeMoney extends ResponseSignedValue
{
    /**
     * @var string 商户冻结单号
     */
    private $bizFrozenNo;

    /**
     * @var int 冻结金额
     */
    private $amount;

    /**
     * 获取商户冻结单号
     *
     * @return string|null
     */
    public function getBizFrozenNo(): ?string
    {
        return $this->bizFrozenNo;
    }

    /**
     * 设置商户冻结单号
     *
     * @param string $bizFrozenNo 商户冻结单号
     * @return FreezeMoney
     */
    public function setBizFrozenNo(string $bizFrozenNo): FreezeMoney
    {
        $this->bizFrozenNo = $bizFrozenNo;
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
