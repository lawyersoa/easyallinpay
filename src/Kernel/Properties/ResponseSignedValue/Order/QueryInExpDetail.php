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

class QueryInExpDetail extends ResponseSignedValue
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var int 该账户收支明细总条数
     */
    private $totalNum;

    /**
     * @var array 收支明细
     */
    private $inExpDetail;

    /**
     * @var string 扩展参数
     */
    private $extendInfo;

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
     * 获取该账户收支明细总条数
     *
     * @return int|null
     */
    public function getTotalNum(): ?int
    {
        return $this->totalNum;
    }

    /**
     * 设置该账户收支明细总条数
     *
     * @param int $totalNum 该账户收支明细总条数
     * @return QueryInExpDetail
     */
    public function setTotalNum(int $totalNum): QueryInExpDetail
    {
        $this->totalNum = $totalNum;
        return $this;
    }

    /**
     * 获取收支明细
     *
     * @return array|null
     */
    public function getInExpDetail(): ?array
    {
        return $this->inExpDetail;
    }

    /**
     * 设置收支明细
     *
     * @param array $inExpDetail 收支明细
     * @return QueryInExpDetail
     */
    public function setInExpDetail(array $inExpDetail): QueryInExpDetail
    {
        $this->inExpDetail = $inExpDetail;
        return $this;
    }

    /**
     * 获取扩展参数
     *
     * @return string|null
     */
    public function getExtendInfo(): ?string
    {
        return $this->extendInfo;
    }

    /**
     * 设置扩展参数
     *
     * @param string $extendInfo 扩展参数
     * @return QueryInExpDetail
     */
    public function setExtendInfo(string $extendInfo): QueryInExpDetail
    {
        $this->extendInfo = $extendInfo;
        return $this;
    }
}
