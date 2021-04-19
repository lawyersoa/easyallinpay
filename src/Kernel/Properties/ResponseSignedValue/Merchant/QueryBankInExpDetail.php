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

class QueryBankInExpDetail extends ResponseSignedValue
{
    /**
     * @var int 开户机构类型
     */
    private $acctOrgType;

    /**
     * @var string 银行账户名
     */
    private $acctName;

    /**
     * @var int 总行数
     */
    private $totalNum;

    /**
     * @var array 内部账户明细
     */
    private $inExpDetail;

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
     * @return QueryBankInExpDetail
     */
    public function setAcctOrgType(int $acctOrgType): QueryBankInExpDetail
    {
        $this->acctOrgType = $acctOrgType;
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
     * @return QueryBankInExpDetail
     */
    public function setAcctName(string $acctName): QueryBankInExpDetail
    {
        $this->acctName = $acctName;
        return $this;
    }

    /**
     * 获取总行数
     *
     * @return int|null
     */
    public function getTotalNum(): ?int
    {
        return $this->totalNum;
    }

    /**
     * 设置总行数
     *
     * @param int $totalNum 总行数
     * @return QueryBankInExpDetail
     */
    public function setTotalNum(int $totalNum): QueryBankInExpDetail
    {
        $this->totalNum = $totalNum;
        return $this;
    }

    /**
     * 获取内部账户明细
     *
     * @return array|null
     */
    public function getInExpDetail(): ?array
    {
        return $this->inExpDetail;
    }

    /**
     * 设置内部账户明细
     *
     * @param array $inExpDetail 内部账户明细
     * @return QueryBankInExpDetail
     */
    public function setInExpDetail(array $inExpDetail): QueryBankInExpDetail
    {
        $this->inExpDetail = $inExpDetail;
        return $this;
    }
}
