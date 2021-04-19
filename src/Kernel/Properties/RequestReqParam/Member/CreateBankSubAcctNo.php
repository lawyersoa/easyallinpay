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

class CreateBankSubAcctNo extends RequestReqParam
{
    /**
     * @var string 账户集编号
     */
    private $accountSetNo;

    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var int 开户机构类型
     */
    private $acctOrgType;

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
     * @return CreateBankSubAcctNo
     */
    public function setBizUserId(string $bizUserId): CreateBankSubAcctNo
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取账户集编号
     *
     * @return string|null
     */
    public function getAccountSetNo(): ?string
    {
        return $this->accountSetNo;
    }

    /**
     * 设置账户集编号
     *
     * @param string $accountSetNo 账户集编号
     * @return CreateBankSubAcctNo
     */
    public function setAccountSetNo(string $accountSetNo): CreateBankSubAcctNo
    {
        $this->accountSetNo = $accountSetNo;
        return $this;
    }

    /**
     * 获取开户机构类型
     *
     * @return int|null
     */
    public function getAcctOrgType(): ?int
    {
        return $this->acctOrgType;
    }

    /**
     * 设置开户机构类型
     *
     * @param int $acctOrgType 开户机构类型
     * @return CreateBankSubAcctNo
     */
    public function setAcctOrgType(int $acctOrgType): CreateBankSubAcctNo
    {
        $this->acctOrgType = $acctOrgType;
        return $this;
    }
}
