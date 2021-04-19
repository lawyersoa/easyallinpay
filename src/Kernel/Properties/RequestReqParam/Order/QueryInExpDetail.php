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

class QueryInExpDetail extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 账户集编号
     */
    private $accountSetNo;

    /**
     * @var string 开始日期
     */
    private $dateStart;

    /**
     * @var string 结束日期
     */
    private $dateEnd;

    /**
     * @var string 起始位置
     */
    private $startPosition;

    /**
     * @var string 查询条数
     */
    private $queryNum;

    /**
     * @var string 交易类型
     */
    private $tradeType;

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
     * @return QueryInExpDetail
     */
    public function setBizUserId(string $bizUserId): QueryInExpDetail
    {
        $this->bizUserId = $bizUserId;
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
     * @return QueryInExpDetail
     */
    public function setAccountSetNo(string $accountSetNo): QueryInExpDetail
    {
        $this->accountSetNo = $accountSetNo;
        return $this;
    }

    /**
     * 获取开始日期
     *
     * @return string|null
     */
    public function getDateStart(): ?string
    {
        return $this->dateStart;
    }

    /**
     * 设置开始日期
     *
     * @param string $dateStart 开始日期
     * @return QueryInExpDetail
     */
    public function setDateStart(string $dateStart): QueryInExpDetail
    {
        $this->dateStart = $dateStart;
        return $this;
    }

    /**
     * 获取结束日期
     *
     * @return string|null
     */
    public function getDateEnd(): ?string
    {
        return $this->dateEnd;
    }

    /**
     * 设置结束日期
     *
     * @param string $dateEnd 结束日期
     * @return QueryInExpDetail
     */
    public function setDateEnd(string $dateEnd): QueryInExpDetail
    {
        $this->dateEnd = $dateEnd;
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
     * @param string $startPosition
     * @return QueryInExpDetail
     */
    public function setStartPosition(string $startPosition): QueryInExpDetail
    {
        $this->startPosition = $startPosition;
        return $this;
    }

    /**
     * 获取查询条数
     *
     * @return string|null
     */
    public function getQueryNum(): ?string
    {
        return $this->queryNum;
    }

    /**
     * 设置查询条数
     *
     * @param string $queryNum 查询条数
     * @return QueryInExpDetail
     */
    public function setQueryNum(string $queryNum): QueryInExpDetail
    {
        $this->queryNum = $queryNum;
        return $this;
    }

    /**
     * 获取交易类型
     *
     * @return string|null
     */
    public function getTradeType(): ?string
    {
        return $this->tradeType;
    }

    /**
     * 设置交易类型
     *
     * @param string $tradeType 交易类型
     * @return QueryInExpDetail
     */
    public function setTradeType(string $tradeType): QueryInExpDetail
    {
        $this->tradeType = $tradeType;
        return $this;
    }
}
