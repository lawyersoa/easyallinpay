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

class CloseOrder extends ResponseSignedValue
{
    /**
     * @var int 关闭结果
     */
    private $closeResult;

    /**
     * @var string 通商云订单号
     */
    private $orderNo;

    /**
     * @var string 商户订单号
     */
    private $bizOrderNo;

    /**
     * @var string 订单关闭完成时间
     */
    private $closeDatetime;

    /**
     * @var string 关闭失败原因
     */
    private $errorMessage;

    /**
     * @var int 订单状态
     */
    private $orderStatus;

    /**
     * 获取关闭结果
     *
     * @return int
     */
    public function getCloseResult(): int
    {
        return $this->closeResult;
    }

    /**
     * 设置关闭结果
     *
     * @param int $closeResult 关闭结果
     * @return CloseOrder
     */
    public function setCloseResult(int $closeResult): CloseOrder
    {
        $this->closeResult = $closeResult;
        return $this;
    }

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
     * @return CloseOrder
     */
    public function setOrderNo(string $orderNo): CloseOrder
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
     * @return CloseOrder
     */
    public function setBizOrderNo(string $bizOrderNo): CloseOrder
    {
        $this->bizOrderNo = $bizOrderNo;
        return $this;
    }

    /**
     * 获取订单关闭完成时间
     *
     * @return string|null
     */
    public function getCloseDatetime(): ?string
    {
        return $this->closeDatetime;
    }

    /**
     * 设置订单关闭完成时间
     *
     * @param string $closeDatetime 订单关闭完成时间
     * @return CloseOrder
     */
    public function setCloseDatetime(string $closeDatetime): CloseOrder
    {
        $this->closeDatetime = $closeDatetime;
        return $this;
    }

    /**
     * 获取关闭失败原因
     *
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * 设置关闭失败原因
     *
     * @param string $errorMessage 关闭失败原因
     * @return CloseOrder
     */
    public function setErrorMessage(string $errorMessage): CloseOrder
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * 获取订单状态
     *
     * @return int
     */
    public function getOrderStatus(): int
    {
        return $this->orderStatus;
    }

    /**
     * 设置订单状态
     *
     * @param int $orderStatus 订单状态
     * @return CloseOrder
     */
    public function setOrderStatus(int $orderStatus): CloseOrder
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }
}
