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

class EntryGoods extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var int 商品类型
     */
    private $goodsType;

    /**
     * @var string 商户商品编号
     */
    private $bizGoodsNo;

    /**
     * @var string 商品名称
     */
    private $goodsName;

    /**
     * @var string 商品详细信息
     */
    private $goodsDetail;

    /**
     * @var string 商品参数
     */
    private $goodsParams;

    /**
     * @var string 商品详情URL
     */
    private $showUrl;

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
     * @return EntryGoods
     */
    public function setBizUserId(string $bizUserId): EntryGoods
    {
        $this->bizUserId = $bizUserId;
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
     * @return EntryGoods
     */
    public function setGoodsType(int $goodsType): EntryGoods
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
     * @return EntryGoods
     */
    public function setBizGoodsNo(string $bizGoodsNo): EntryGoods
    {
        $this->bizGoodsNo = $bizGoodsNo;
        return $this;
    }

    /**
     * 获取商品名称
     *
     * @return string|null
     */
    public function getGoodsName(): ?string
    {
        return $this->goodsName;
    }

    /**
     * 设置商品名称
     *
     * @param string $goodsName 商品名称
     * @return EntryGoods
     */
    public function setGoodsName(string $goodsName): EntryGoods
    {
        $this->goodsName = $goodsName;
        return $this;
    }

    /**
     * 获取商品详细信息
     *
     * @return string|null
     */
    public function getGoodsDetail(): ?string
    {
        return $this->goodsDetail;
    }

    /**
     * 设置商品详细信息
     *
     * @param string $goodsDetail 商品详细信息
     * @return EntryGoods
     */
    public function setGoodsDetail(string $goodsDetail): EntryGoods
    {
        $this->goodsDetail = $goodsDetail;
        return $this;
    }

    /**
     * 获取商品参数
     *
     * @return string|null
     */
    public function getGoodsParams(): ?string
    {
        return $this->goodsParams;
    }

    /**
     * 设置商品参数
     *
     * @param string $goodsParams 商品参数
     * @return EntryGoods
     */
    public function setGoodsParams(string $goodsParams): EntryGoods
    {
        $this->goodsParams = $goodsParams;
        return $this;
    }

    /**
     * 获取商品详情URL
     *
     * @return string|null
     */
    public function getShowUrl(): ?string
    {
        return $this->showUrl;
    }

    /**
     * 设置商品详情URL
     *
     * @param string $showUrl 商品详情URL
     * @return EntryGoods
     */
    public function setShowUrl(string $showUrl): EntryGoods
    {
        $this->showUrl = $showUrl;
        return $this;
    }
}
