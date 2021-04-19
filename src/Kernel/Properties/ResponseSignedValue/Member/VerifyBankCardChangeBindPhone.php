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

class VerifyBankCardChangeBindPhone extends ResponseSignedValue
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 流水号
     */
    private $tranceNum;

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
     * @return VerifyBankCardChangeBindPhone
     */
    public function setBizUserId(string $bizUserId): VerifyBankCardChangeBindPhone
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取流水号
     *
     * @return string|null
     */
    public function getTranceNum(): ?string
    {
        return $this->tranceNum;
    }

    /**
     * 设置流水号
     *
     * @param string $tranceNum 流水号
     * @return VerifyBankCardChangeBindPhone
     */
    public function setTranceNum(string $tranceNum): VerifyBankCardChangeBindPhone
    {
        $this->tranceNum = $tranceNum;
        return $this;
    }
}