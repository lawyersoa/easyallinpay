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

use EasyAllInPay\Kernel\Properties\RequestReqParam\RequestReqParam;

class BindPhone extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 手机号
     */
    private $phone;

    /**
     * @var string 验证码
     */
    private $verificationCode;

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
     * @return BindPhone
     */
    public function setBizUserId(string $bizUserId): BindPhone
    {
        $this->bizUserId = $bizUserId;
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
     * @return BindPhone
     */
    public function setPhone(string $phone): BindPhone
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * 获取验证码
     *
     * @return string|null
     */
    public function getVerificationCode(): ?string
    {
        return $this->verificationCode;
    }

    /**
     * 设置验证码
     *
     * @param string $verificationCode 验证码
     * @return BindPhone
     */
    public function setVerificationCode(string $verificationCode): BindPhone
    {
        $this->verificationCode = $verificationCode;
        return $this;
    }
}
