<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Properties\RequestReqParam\Member;

use EasyAllInPay\Kernel\Constant\FieldMapping;
use EasyAllInPay\Kernel\Exceptions\InvalidArgumentException;
use EasyAllInPay\Kernel\Properties\RequestReqParam\RequestReqParam;

class ApplyBindAcct extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 操作类型
     */
    private $operationType;

    /**
     * @var string 支付账户类型
     */
    private $acctType;

    /**
     * @var string 支付账户用户标识
     */
    private $acct;

    /**
     * @return string|null
     */
    public function getBizUserId(): ?string
    {
        return $this->bizUserId;
    }

    /**
     * 设置商户用户ID
     *
     * @param string $bizUserId
     * @return ApplyBindAcct
     */
    public function setBizUserId(string $bizUserId): ApplyBindAcct
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取操作类型
     *
     * @return string|null
     */
    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    /**
     * 设置操作类型
     *
     * @param string $operationType 操作类型
     * @return ApplyBindAcct
     */
    public function setOperationType(string $operationType): ApplyBindAcct
    {
        $this->operationType = $operationType;
        return $this;
    }

    /**
     * 获取支付账户类型
     *
     * @return string|null
     */
    public function getAcctType(): ?string
    {
        return $this->acctType;
    }

    /**
     * 设置支付账户类型
     *
     * @param string $acctType 支付账户类型
     * @return ApplyBindAcct
     */
    public function setAcctType(string $acctType): ApplyBindAcct
    {
        $this->acctType = $acctType;
        return $this;
    }

    /**
     * 获取支付账户用户标识
     *
     * @return string|null
     */
    public function getAcct(): ?string
    {
        return $this->acct;
    }

    /**
     * 设置支付账户用户标识
     *
     * @param string $acct 支付账户用户标识
     * @return ApplyBindAcct
     */
    public function setAcct(string $acct): ApplyBindAcct
    {
        $this->acct = $acct;
        return $this;
    }
}
