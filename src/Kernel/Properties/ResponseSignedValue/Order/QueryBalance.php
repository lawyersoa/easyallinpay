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

class QueryBalance extends ResponseSignedValue
{
    /**
     * @var int 总额
     */
    private $allAmount;

    /**
     * @var int 冻结金额
     */
    private $frozenAmount;

    /**
     * 获取总额
     *
     * @return int|null
     */
    public function getAllAmount(): ?int
    {
        return $this->allAmount;
    }

    /**
     * 设置总额
     *
     * @param int $allAmount 总额
     * @return QueryBalance
     */
    public function setAllAmount(int $allAmount): QueryBalance
    {
        $this->allAmount = $allAmount;
        return $this;
    }

    /**
     * 获取冻结金额
     *
     * @return int|null
     */
    public function getFrozenAmount(): ?int
    {
        return $this->frozenAmount;
    }

    /**
     * 设置冻结金额
     *
     * @param int $frozenAmount 冻结金额
     * @return QueryBalance
     */
    public function setFrozenAmount(int $frozenAmount): QueryBalance
    {
        $this->frozenAmount = $frozenAmount;
        return $this;
    }
}
