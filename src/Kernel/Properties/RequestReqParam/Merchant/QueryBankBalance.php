<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Properties\RequestReqParam\Merchant;

use EasyAllInPay\Kernel\Constant\FieldMapping;
use EasyAllInPay\Kernel\Exceptions\InvalidArgumentException;
use EasyAllInPay\Kernel\Properties\RequestReqParam\RequestReqParam;

class QueryBankBalance extends RequestReqParam
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
     * @var string 查询日期
     */
    private $date;

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
     * @param string $acctName 设置银行账户名
     * @return QueryBankBalance
     */
    public function setAcctName(string $acctName): QueryBankBalance
    {
        $this->acctName = $acctName;
        return $this;
    }

    /**
     * 获取查询日期
     *
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * 设置查询日期
     *
     * @param string $date 查询日期
     * @return QueryBankBalance
     */
    public function setDate(string $date): QueryBankBalance
    {
        $this->date = $date;
        return $this;
    }
}
