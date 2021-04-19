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

class BankCardChangeBindPhone extends ResponseSignedValue
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
     * @var string 银行名称
     */
    private $bankName;

    /**
     * @var string 银行代码
     */
    private $bankCode;

    /**
     * @var int 银行卡类型
     */
    private $cardType;

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
     * @return BankCardChangeBindPhone
     */
    public function setBizUserId(string $bizUserId): BankCardChangeBindPhone
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
     * @return BankCardChangeBindPhone
     */
    public function setTranceNum(string $tranceNum): BankCardChangeBindPhone
    {
        $this->tranceNum = $tranceNum;
        return $this;
    }

    /**
     * 获取银行名称
     *
     * @return string|null
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    /**
     * 设置银行名称
     *
     * @param string $bankName 银行名称
     * @return BankCardChangeBindPhone
     */
    public function setBankName(string $bankName): BankCardChangeBindPhone
    {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * 获取银行代码
     *
     * @return string|null
     */
    public function getBankCode(): ?string
    {
        return $this->bankCode;
    }

    /**
     * 设置银行代码
     *
     * @param string $bankCode 银行代码
     * @return BankCardChangeBindPhone
     */
    public function setBankCode(string $bankCode): BankCardChangeBindPhone
    {
        $this->bankCode = $bankCode;
        return $this;
    }

    /**
     * 获取银行卡类型
     *
     * @return int|null
     */
    public function getCardType(): ?int
    {
        return $this->cardType;
    }

    /**
     * 设置银行卡类型
     *
     * @param int $cardType 银行卡类型
     * @return BankCardChangeBindPhone
     */
    public function setCardType(int $cardType): BankCardChangeBindPhone
    {
        $this->cardType = $cardType;
        return $this;
    }
}
