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

class EntryGoods extends ResponseSignedValue
{
    /**
     * @var string 通商云商品编号
     */
    private $goodsNo;

    /**
     * @var string 商户商品编号
     */
    private $bizGoodsNo;

    /**
     * 获取通商云商品编号
     *
     * @return string|null
     */
    public function getGoodsNo(): ?string
    {
        return $this->goodsNo;
    }

    /**
     * 设置通商云商品编号
     *
     * @param string $goodsNo 商品编号
     * @return EntryGoods
     */
    public function setGoodsNo(string $goodsNo): EntryGoods
    {
        $this->goodsNo = $goodsNo;
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
}
