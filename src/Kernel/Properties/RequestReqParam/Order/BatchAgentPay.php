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

class BatchAgentPay extends RequestReqParam
{
    /**
     * @var string 商户批次号
     */
    private $bizBatchNo;

    /**
     * @var array 批量代付列表
     */
    private $batchPayList;

    /**
     * @var int 商品类型
     */
    private $goodsType;

    /**
     * @var string 商户商品编号
     */
    private $bizGoodsNo;

    /**
     * @var string 业务码
     */
    private $tradeCode;

    /**
     * 获取商户批次号
     *
     * @return string|null
     */
    public function getBizBatchNo(): ?string
    {
        return $this->bizBatchNo;
    }

    /**
     * 设置商户批次号
     *
     * @param string $bizBatchNo 商户批次号
     * @return BatchAgentPay
     */
    public function setBizBatchNo(string $bizBatchNo): BatchAgentPay
    {
        $this->bizBatchNo = $bizBatchNo;
        return $this;
    }

    /**
     * 获取批次代付列表
     *
     * @return array
     */
    public function getBatchPayList(): array
    {
        return $this->batchPayList;
    }

    /**
     * 设置批次代付列表
     *
     * @param array $batchPayList 批次代付列表
     * @return BatchAgentPay
     */
    public function setBatchPayList(array $batchPayList): BatchAgentPay
    {
        $this->batchPayList = $batchPayList;
        return $this;
    }

    /**
     * 获取商品类型
     *
     * @return int|null
     */
    public function getGoodsType(): ?int
    {
        return $this->goodsType;
    }

    /**
     * 设置商品类型
     *
     * @param int $goodsType 商品类型
     * @return BatchAgentPay
     */
    public function setGoodsType(int $goodsType): BatchAgentPay
    {
        $this->goodsType = $goodsType;
        return $this;
    }

    /**
     * 获取商户商品编号
     *
     * @return string|null
     */
    public function getBizGoodsNo(): ?string
    {
        return $this->bizGoodsNo;
    }

    /**
     * 设置商户商品编号
     *
     * @param string $bizGoodsNo 商户商品编号
     * @return BatchAgentPay
     */
    public function setBizGoodsNo(string $bizGoodsNo): BatchAgentPay
    {
        $this->bizGoodsNo = $bizGoodsNo;
        return $this;
    }

    /**
     * 获取业务码
     *
     * @return string|null
     */
    public function getTradeCode(): ?string
    {
        return $this->tradeCode;
    }

    /**
     * 设置业务码
     *
     * @param string $tradeCode 业务码
     * @return BatchAgentPay
     */
    public function setTradeCode(string $tradeCode): BatchAgentPay
    {
        $this->tradeCode = $tradeCode;
        return $this;
    }
}
