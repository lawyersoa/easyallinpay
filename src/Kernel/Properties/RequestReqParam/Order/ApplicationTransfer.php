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

class ApplicationTransfer extends RequestReqParam
{
    /**
     * @var string 商户转账单号
     */
    private $bizTransferNo;

    /**
     * @var string 源账户集编号
     */
    private $sourceAccountSetNo;

    /**
     * @var string 目标商户用户ID
     */
    private $targetBizUserId;

    /**
     * @var string 目标账户集编号
     */
    private $targetAccountSetNo;

    /**
     * @var int 金额
     */
    private $amount;

    /**
     * @var string 扩展信息
     */
    private $extendInfo;

    /**
     * 获取商户转账单号
     *
     * @return string|null
     */
    public function getBizTransferNo(): ?string
    {
        return $this->bizTransferNo;
    }

    /**
     * 设置商户转账单号
     *
     * @param string $bizTransferNo 商户转账单号
     * @return ApplicationTransfer
     */
    public function setBizTransferNo(string $bizTransferNo): ApplicationTransfer
    {
        $this->bizTransferNo = $bizTransferNo;
        return $this;
    }

    /**
     * 获取源账户集编号
     *
     * @return string|null
     */
    public function getSourceAccountSetNo(): ?string
    {
        return $this->sourceAccountSetNo;
    }

    /**
     * 设置源账户集编号
     *
     * @param string $sourceAccountSetNo 源账户集编号
     * @return ApplicationTransfer
     */
    public function setSourceAccountSetNo(string $sourceAccountSetNo): ApplicationTransfer
    {
        $this->sourceAccountSetNo = $sourceAccountSetNo;
        return $this;
    }

    /**
     * 获取目标商户用户ID
     *
     * @return string|null
     */
    public function getTargetBizUserId(): ?string
    {
        return $this->targetBizUserId;
    }

    /**
     * 设置目标商户用户ID
     *
     * @param string $targetBizUserId 目标商户用户ID
     * @return ApplicationTransfer
     */
    public function setTargetBizUserId(string $targetBizUserId): ApplicationTransfer
    {
        $this->targetBizUserId = $targetBizUserId;
        return $this;
    }

    /**
     * 获取目标账户集编号
     *
     * @return string|null
     */
    public function getTargetAccountSetNo(): ?string
    {
        return $this->targetAccountSetNo;
    }

    /**
     * 设置目标账户集编号
     *
     * @param string $targetAccountSetNo 目标账户集编号
     * @return ApplicationTransfer
     */
    public function setTargetAccountSetNo(string $targetAccountSetNo): ApplicationTransfer
    {
        $this->targetAccountSetNo = $targetAccountSetNo;
        return $this;
    }

    /**
     * 获取转账金额
     *
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 设置转账金额
     *
     * @param int $amount 转账金额
     * @return ApplicationTransfer
     */
    public function setAmount(int $amount): ApplicationTransfer
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 获取扩展信息
     *
     * @return string
     */
    public function getExtendInfo(): string
    {
        return $this->extendInfo;
    }

    /**
     * 设置扩展信息
     *
     * @param string $extendInfo 扩展信息
     * @return ApplicationTransfer
     */
    public function setExtendInfo(string $extendInfo): ApplicationTransfer
    {
        $this->extendInfo = $extendInfo;
        return $this;
    }
}
