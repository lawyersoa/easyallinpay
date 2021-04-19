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

class ApplicationTransfer extends ResponseSignedValue
{
    /**
     * @var string 通商云转账单号
     */
    private $transferNo;

    /**
     * @var string 商户转账单号
     */
    private $bizTransferNo;

    /**
     * @var int 金额
     */
    private $account;

    /**
     * @var array 扩展信息
     */
    private $extendInfo;

    /**
     * 获取通商云转账单号
     *
     * @return string|null
     */
    public function getTransferNo(): ?string
    {
        return $this->transferNo;
    }

    /**
     * 设置通商云转账单号
     *
     * @param string $transferNo 通商云转账单号
     * @return ApplicationTransfer
     */
    public function setTransferNo(string $transferNo): ApplicationTransfer
    {
        $this->transferNo = $transferNo;
        return $this;
    }

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
     * 获取转账金额
     *
     * @return int|null
     */
    public function getAccount(): ?int
    {
        return $this->account;
    }

    /**
     * 设置转账金额
     *
     * @param int $account 转账金额
     * @return ApplicationTransfer
     */
    public function setAccount(int $account): ApplicationTransfer
    {
        $this->account = $account;
        return $this;
    }

    /**
     * 获取扩展信息
     *
     * @return array
     */
    public function getExtendInfo(): array
    {
        return $this->extendInfo;
    }

    /**
     * 设置扩展信息
     *
     * @param array $extendInfo 扩展信息
     * @return ApplicationTransfer
     */
    public function setExtendInfo(array $extendInfo): ApplicationTransfer
    {
        $this->extendInfo = $extendInfo;
        return $this;
    }
}
