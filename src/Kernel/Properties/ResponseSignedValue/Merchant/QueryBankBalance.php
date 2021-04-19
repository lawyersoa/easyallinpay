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

class QueryBankBalance extends ResponseSignedValue
{
    /**
     * @var int 开户机构类型
     */
    private $acctOrgType;

    /**
     * @var string 银行账户号
     */
    private $acctNo;

    /**
     * @var string 银行账户名
     */
    private $acctName;

    /**
     * @var int 余额
     */
    private $balance;

    /**
     * @var string 账户状态
     */
    private $acctStatus;

    /**
     * 获取开户机构类型
     *
     * @return int|null
     */
    public function getAcctOrgType(): ?int
    {
        return $this->acctOrgType;
    }

    /**
     * 设置开户机构类型
     *
     * @param int $acctOrgType 开户机构类型
     * @return QueryBankBalance
     */
    public function setAcctOrgType(int $acctOrgType): QueryBankBalance
    {
        $this->acctOrgType = $acctOrgType;
        return $this;
    }

    /**
     * 获取银行账户号
     *
     * @return string|null
     */
    public function getAcctNo(): ?string
    {
        return $this->acctNo;
    }

    /**
     * 设置银行账户号
     *
     * @param string $acctNo 银行账户号
     * @return QueryBankBalance
     */
    public function setAcctNo(string $acctNo): QueryBankBalance
    {
        $this->acctNo = $acctNo;
        return $this;
    }

    /**
     * 获取银行账户名
     *
     * @return string|null
     */
    public function getAcctName(): ?string
    {
        return $this->acctName;
    }

    /**
     * 设置银行账户名
     *
     * @param string $acctName 银行账户名
     * @return QueryBankBalance
     */
    public function setAcctName(string $acctName): QueryBankBalance
    {
        $this->acctName = $acctName;
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
     * @return QueryBankBalance
     */
    public function setBalance(int $balance): QueryBankBalance
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * 获取账户状态
     *
     * @return string|null
     */
    public function getAcctStatus(): ?string
    {
        return $this->acctStatus;
    }

    /**
     * 设置账户状态
     *
     * @param string $acctStatus 账户状态
     * @return QueryBankBalance
     */
    public function setAcctStatus(string $acctStatus): QueryBankBalance
    {
        $this->acctStatus = $acctStatus;
        return $this;
    }
}
