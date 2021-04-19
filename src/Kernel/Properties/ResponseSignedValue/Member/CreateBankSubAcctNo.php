<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Properties\ResponseSignedValue\Member;

use EasyAllInPay\Kernel\Properties\ResponseSignedValue\ResponseSignedValue;

class CreateBankSubAcctNo extends ResponseSignedValue
{
    /**
     * @var string 会员子账号
     */
    private $subAcctNo;

    /**
     * @var string 账户集编号
     */
    private $accountSetNo;

    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * 获取会员子账号
     *
     * @return string|null
     */
    public function getSubAcctNo(): ?string
    {
        return $this->subAcctNo;
    }

    /**
     * 设置会员子账号
     *
     * @param string $subAcctNo 会员子账号
     * @return CreateBankSubAcctNo
     */
    public function setSubAcctNo(string $subAcctNo): CreateBankSubAcctNo
    {
        $this->subAcctNo = $subAcctNo;
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
}
