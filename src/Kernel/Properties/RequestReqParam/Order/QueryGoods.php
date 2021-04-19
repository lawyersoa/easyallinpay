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

class QueryGoods extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 商户商品编号
     */
    private $bizGoodsNo;

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
     * @return QueryGoods
     */
    public function setBizUserId(string $bizUserId): QueryGoods
    {
        $this->bizUserId = $bizUserId;
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
     * @return QueryGoods
     */
    public function setBizGoodsNo(string $bizGoodsNo): QueryGoods
    {
        $this->bizGoodsNo = $bizGoodsNo;
        return $this;
    }
}
