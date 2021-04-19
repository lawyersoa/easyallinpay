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

class QueryBankInExpDetail extends RequestReqParam
{
    /**
     * @var int 开户机构类型
     */
    private $acctOrgType;

    /**
     * @var string 开始日期
     */
    private $startDate;

    /**
     * @var string 结束日期
     */
    private $endDate;

    /**
     * @var string 首次查询标志
     */
    private $isFirstFlag;

    /**
     * @var string 起始位置
     */
    private $startPosition;

    /**
     * @var int 查询行数
     */
    private $queryNum;

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
     * 获取开始日期
     *
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * 设置开始日期
     *
     * @param string $startDate 开始日期
     * @return QueryBankInExpDetail
     */
    public function setStartDate(string $startDate): QueryBankInExpDetail
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 获取结束日期
     *
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * 设置结束日期
     *
     * @param string $endDate 结束日期
     * @return QueryBankInExpDetail
     */
    public function setEndDate(string $endDate): QueryBankInExpDetail
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * 获取首次查询标志
     *
     * @return string|null
     */
    public function getIsFirstFlag(): ?string
    {
        return $this->isFirstFlag;
    }

    /**
     * 设置首次查询标志
     *
     * @param string $isFirstFlag 首次查询标志
     * @return QueryBankInExpDetail
     */
    public function setIsFirstFlag(string $isFirstFlag): QueryBankInExpDetail
    {
        $this->isFirstFlag = $isFirstFlag;
        return $this;
    }

    /**
     * 获取起始位置
     *
     * @return string|null
     */
    public function getStartPosition(): ?string
    {
        return $this->startPosition;
    }

    /**
     * 设置起始位置
     *
     * @param string $startPosition 起始位置
     * @return QueryBankInExpDetail
     */
    public function setStartPosition(string $startPosition): QueryBankInExpDetail
    {
        $this->startPosition = $startPosition;
        return $this;
    }

    /**
     * 获取查询行数
     *
     * @return int|null
     */
    public function getQueryNum(): ?int
    {
        return $this->queryNum;
    }

    /**
     * 设置查询行数
     *
     * @param int $queryNum 查询行数
     * @return QueryBankInExpDetail
     */
    public function setQueryNum(int $queryNum): QueryBankInExpDetail
    {
        $this->queryNum = $queryNum;
        return $this;
    }
}
