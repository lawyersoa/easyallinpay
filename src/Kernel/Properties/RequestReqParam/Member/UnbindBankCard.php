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

class UnbindBankCard extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 银行卡号
     */
    private $cardNo;

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
     * @return UnbindBankCard
     */
    public function setBizUserId(string $bizUserId): UnbindBankCard
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取银行卡号
     *
     * @return string|null
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }

    /**
     * 设置银行卡号
     *
     * @param string $cardNo 银行卡号
     * @return UnbindBankCard
     */
    public function setCardNo(string $cardNo): UnbindBankCard
    {
        $this->cardNo = $cardNo;
        return $this;
    }
}
