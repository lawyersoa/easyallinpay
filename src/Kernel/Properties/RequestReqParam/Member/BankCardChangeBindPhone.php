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

class BankCardChangeBindPhone extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 卡号
     */
    private $cardNo;

    /**
     * @return string|null
     */
    public function getBizUserId(): ?string
    {
        return $this->bizUserId;
    }

    /**
     * @var string 银行预留手机
     */
    private $phone;

    /**
     * @var string 姓名
     */
    private $name;

    /**
     * @var int 绑卡方式
     */
    private $cardCheck;

    /**
     * @var int 证件类型
     */
    private $identityType;

    /**
     * @var string 证件号码
     */
    private $identityNo;

    /**
     * @var string 有效期
     */
    private $validate;

    /**
     * @var string CVV2
     */
    private $cvv2;

    /**
     * 设置商户用户ID
     *
     * @param string $bizUserId
     * @return BankCardChangeBindPhone
     */
    public function setBizUserId(string $bizUserId): BankCardChangeBindPhone
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
     * @return BankCardChangeBindPhone
     */
    public function setCardNo(string $cardNo): BankCardChangeBindPhone
    {
        $this->cardNo = $cardNo;
        return $this;
    }

    /**
     * 获取手机号
     *
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * 设置手机号
     *
     * @param string $phone 手机号
     * @return BankCardChangeBindPhone
     */
    public function setPhone(string $phone): BankCardChangeBindPhone
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * 获取姓名
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 设置姓名
     *
     * @param string $name 姓名
     * @return BankCardChangeBindPhone
     */
    public function setName(string $name): BankCardChangeBindPhone
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 获取绑卡方式
     *
     * @return int|null
     */
    public function getCardCheck(): ?int
    {
        return $this->cardCheck;
    }

    /**
     * 设置绑卡方式
     *
     * @param int $cardCheck 绑卡方式
     * @return BankCardChangeBindPhone
     */
    public function setCardCheck(int $cardCheck): BankCardChangeBindPhone
    {
        $this->cardCheck = $cardCheck;
        return $this;
    }

    /**
     * 获取证件类型
     *
     * @return int|null
     */
    public function getIdentityType(): ?int
    {
        return $this->identityType;
    }

    /**
     * 设置证件类型
     *
     * @param int $identityType 证件类型
     * @return BankCardChangeBindPhone
     */
    public function setIdentityType(int $identityType): BankCardChangeBindPhone
    {
        $this->identityType = $identityType;
        return $this;
    }

    /**
     * 获取证件号码
     *
     * @return string|null
     */
    public function getIdentityNo(): ?string
    {
        return $this->identityNo;
    }

    /**
     * 设置证件号码
     *
     * @param string $identityNo 证件号码
     * @return BankCardChangeBindPhone
     */
    public function setIdentityNo(string $identityNo): BankCardChangeBindPhone
    {
        $this->identityNo = $identityNo;
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
     * @return BankCardChangeBindPhone
     */
    public function setValidate(string $validate): BankCardChangeBindPhone
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
     * @return BankCardChangeBindPhone
     */
    public function setCvv2(string $cvv2): BankCardChangeBindPhone
    {
        $this->cvv2 = $cvv2;
        return $this;
    }
}
