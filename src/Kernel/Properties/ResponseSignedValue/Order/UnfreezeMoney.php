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

class UnfreezeMoney extends ResponseSignedValue
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
     * @return UnfreezeMoney
     */
    public function setBizFrozenNo(string $bizFrozenNo): UnfreezeMoney
    {
        $this->bizFrozenNo = $bizFrozenNo;
        return $this;
    }

    /**
     * 获取解冻金额
     *
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置解冻金额
     *
     * @param int $amount 解冻金额
     * @return UnfreezeMoney
     */
    public function setAmount(int $amount): UnfreezeMoney
    {
        $this->amount = $amount;
        return $this;
    }
}
