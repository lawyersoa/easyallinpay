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

class UnbindPhone extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 手机号码
     */
    private $phone;

    /**
     * @var string 手机验证码
     */
    private $verificationCode;

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
     * @return UnbindPhone
     */
    public function setBizUserId(string $bizUserId): UnbindPhone
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取手机号码
     *
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * 设置手机号码
     *
     * @param string $phone 手机号码
     * @return UnbindPhone
     */
    public function setPhone(string $phone): UnbindPhone
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * 获取手机验证码
     *
     * @return string|null
     */
    public function getVerificationCode(): ?string
    {
        return $this->verificationCode;
    }

    /**
     * 设置手机验证码
     *
     * @param string $verificationCode 手机验证码
     * @return UnbindPhone
     */
    public function setVerificationCode(string $verificationCode): UnbindPhone
    {
        $this->verificationCode = $verificationCode;
        return $this;
    }
}
