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

class VerifyBankCardChangeBindPhone extends RequestReqParam
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
     * @var string 银行预留手机
     */
    private $phone;

    /**
     * @var string 短信验证码
     */
    private $verificationCode;

    /**
     * @var string 有效期
     */
    private $validate;

    /**
     * @var string CVV2
     */
    private $cvv2;

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

    /**
     * 获取银行预留手机
     *
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * 设置银行预留手机
     *
     * @param string $phone 银行预留手机
     * @return VerifyBankCardChangeBindPhone
     */
    public function setPhone(string $phone): VerifyBankCardChangeBindPhone
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * 获取短信验证码
     *
     * @return string|null
     */
    public function getVerificationCode(): ?string
    {
        return $this->verificationCode;
    }

    /**
     * 设置短信验证码
     *
     * @param string $verificationCode 短信验证码
     * @return VerifyBankCardChangeBindPhone
     */
    public function setVerificationCode(string $verificationCode): VerifyBankCardChangeBindPhone
    {
        $this->verificationCode = $verificationCode;
        return $this;
    }

    /**
     * 获取有效期
     *
     * @return string|null
     */
    public function getValidate(): ?string
    {
        return $this->validate;
    }

    /**
     * 设置有效期
     *
     * @param string $validate 有效期
     * @return VerifyBankCardChangeBindPhone
     */
    public function setValidate(string $validate): VerifyBankCardChangeBindPhone
    {
        $this->validate = $validate;
        return $this;
    }

    /**
     * 获取CVV2
     *
     * @return string|null
     */
    public function getCvv2(): ?string
    {
        return $this->cvv2;
    }

    /**
     * 设置CVV2
     *
     * @param string $cvv2 CVV2
     * @return VerifyBankCardChangeBindPhone
     */
    public function setCvv2(string $cvv2): VerifyBankCardChangeBindPhone
    {
        $this->cvv2 = $cvv2;
        return $this;
    }
}
