<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Properties\ResponseSignedValue\Merchant;

use EasyAllInPay\Kernel\Properties\ResponseSignedValue\ResponseSignedValue;

class QueryMerchantBalance extends ResponseSignedValue
{
    /**
     * @var int 总额
     */
    private $allAmount;

    /**
     * @var int 冻结金额
     */
    private $freezeAmount;

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
     * @return QueryMerchantBalance
     */
    public function setAllAmount(int $allAmount): QueryMerchantBalance
    {
        $this->allAmount = $allAmount;
        return $this;
    }

    /**
     * 获取冻结金额
     *
     * @return int|null
     */
    public function getFreezeAmount(): ?int
    {
        return $this->freezeAmount;
    }

    /**
     * 设置冻结金额
     *
     * @param int $freezeAmount 冻结金额
     * @return QueryMerchantBalance
     */
    public function setFreezeAmount(int $freezeAmount): QueryMerchantBalance
    {
        $this->freezeAmount = $freezeAmount;
        return $this;
    }
}
