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

class SendVerificationCode extends RequestReqParam
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
     * @var int 验证码类型
     */
    private $verificationCodeType;

    /**
     * 设置商户用户ID
     *
     * @return mixed
     */
    public function getBizUserId(): ?string
    {
        return $this->bizUserId;
    }

    /**
     * 设置商户用户ID
     *
     * @param string $bizUserId 商户用户ID
     * @return SendVerificationCode
     */
    public function setBizUserId(string $bizUserId): SendVerificationCode
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
     * @return SendVerificationCode
     */
    public function setPhone(string $phone): SendVerificationCode
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * 获取验证码类型
     *
     * @return int|null
     */
    public function getVerificationCodeType(): ?int
    {
        return $this->verificationCodeType;
    }

    /**
     * 设置验证码类型
     *
     * @param int $verificationCodeType 验证码类型
     * @return SendVerificationCode
     * @throws InvalidArgumentException
     */
    public function setVerificationCodeType(int $verificationCodeType): SendVerificationCode
    {
        if(!in_array($verificationCodeType, array_keys(FieldMapping::$verificationCodeTypeMapping))){
            throw new InvalidArgumentException('非法的验证码类型');
        }
        $this->verificationCodeType = $verificationCodeType;
        return $this;
    }
}
