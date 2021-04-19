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

class GetOrderSplitRuleListDetail extends ResponseSignedValue
{
    /**
     * @var string 通商云订单号
     */
    private $orderNo;

    /**
     * @var string 商户订单号
     */
    private $bizOrderNo;

    /**
     * @var string 收款人商户用户ID
     */
    private $receiverId;

    /**
     * @var array 分账明细
     */
    private $splitRuleListDetail;

    /**
     * @var int 分账状态
     */
    private $state;

    /**
     * 获取通商云订单号
     *
     * @return string|null
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * 设置通商云订单号
     *
     * @param string $orderNo 通商云订单号
     * @return GetOrderSplitRuleListDetail
     */
    public function setOrderNo(string $orderNo): GetOrderSplitRuleListDetail
    {
        $this->orderNo = $orderNo;
        return $this;
    }

    /**
     * 获取商户订单号
     *
     * @return string|null
     */
    public function getBizOrderNo(): ?string
    {
        return $this->bizOrderNo;
    }

    /**
     * 设置商户订单号
     *
     * @param string $bizOrderNo 商户订单号
     * @return GetOrderSplitRuleListDetail
     */
    public function setBizOrderNo(string $bizOrderNo): GetOrderSplitRuleListDetail
    {
        $this->bizOrderNo = $bizOrderNo;
        return $this;
    }

    /**
     * 获取收款人商户用户ID
     *
     * @return string|null
     */
    public function getReceiverId(): ?string
    {
        return $this->receiverId;
    }

    /**
     * 设置收款人商户用户ID
     *
     * @param string $receiverId 收款人商户用户ID
     * @return GetOrderSplitRuleListDetail
     */
    public function setReceiverId(string $receiverId): GetOrderSplitRuleListDetail
    {
        $this->receiverId = $receiverId;
        return $this;
    }

    /**
     * 获取分账明细
     *
     * @return array
     */
    public function getSplitRuleListDetail(): array
    {
        return $this->splitRuleListDetail;
    }

    /**
     * 设置分账明细
     *
     * @param array $splitRuleListDetail 分账明细
     * @return GetOrderSplitRuleListDetail
     */
    public function setSplitRuleListDetail(array $splitRuleListDetail): GetOrderSplitRuleListDetail
    {
        $this->splitRuleListDetail = $splitRuleListDetail;
        return $this;
    }

    /**
     * 获取分账状态
     *
     * @return int|null
     */
    public function getState(): ?int
    {
        return $this->state;
    }

    /**
     * 设置分账状态
     *
     * @param int $state 分账状态
     * @return GetOrderSplitRuleListDetail
     */
    public function setState(int $state): GetOrderSplitRuleListDetail
    {
        $this->state = $state;
        return $this;
    }
}
