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

class GetUserIdByAuthCode extends ResponseSignedValue
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 支付账户用户标识
     */
    private $acct;

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
     * @return GetUserIdByAuthCode
     */
    public function setBizUserId(string $bizUserId): GetUserIdByAuthCode
    {
        $this->bizUserId = $bizUserId;
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
     * @return GetUserIdByAuthCode
     */
    public function setAcct(string $acct): GetUserIdByAuthCode
    {
        $this->acct = $acct;
        return $this;
    }
}
