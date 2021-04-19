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

class QueryReserveFundBalance extends ResponseSignedValue
{
    /**
     * @var string 账户号
     */
    private $accountNo;

    /**
     * @var string 账户名
     */
    private $accountName;

    /**
     * @var int 余额
     */
    private $balance;

    /**
     * @var int 是否默认结算户
     */
    private $defClr;

    /**
     * 获取账户名
     *
     * @return string|null
     */
    public function getAccountNo(): ?string
    {
        return $this->accountNo;
    }

    /**
     * 设置账户名
     *
     * @param string $accountNo 账户名
     * @return QueryReserveFundBalance
     */
    public function setAccountNo(string $accountNo): QueryReserveFundBalance
    {
        $this->accountNo = $accountNo;
        return $this;
    }

    /**
     * 获取账户名
     *
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * 设置账户名
     *
     * @param string $accountName 账户名
     * @return QueryReserveFundBalance
     */
    public function setAccountName(string $accountName): QueryReserveFundBalance
    {
        $this->accountName = $accountName;
        return $this;
    }

    /**
     * 获取余额
     *
     * @return int|null
     */
    public function getBalance(): ?int
    {
        return $this->balance;
    }

    /**
     * 设置余额
     *
     * @param int $balance 余额
     * @return QueryReserveFundBalance
     */
    public function setBalance(int $balance): QueryReserveFundBalance
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * 获取是否默认结算户
     *
     * @return int|null
     */
    public function getDefClr(): ?int
    {
        return $this->defClr;
    }

    /**
     * 设置是否默认结算户
     *
     * @param int $defClr 是否默认结算户
     * @return QueryReserveFundBalance
     */
    public function setDefClr(int $defClr): QueryReserveFundBalance
    {
        $this->defClr = $defClr;
        return $this;
    }
}
