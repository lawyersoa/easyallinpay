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

class UpdatePayPwd extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var int 跳转页面类型
     */
    private $jumpPageType;

    /**
     * @var string 手机号码
     */
    private $phone;

    /**
     * @var string 姓名
     */
    private $name;

    /**
     * @var int 证件类型
     */
    private $identityType;

    /**
     * @var string 证件号码
     */
    private $identityNo;

    /**
     * @var string 成功跳转地址
     */
    private $jumpUrl;

    /**
     * @var string 失败跳转地址
     */
    private $errorJumpUrl;

    /**
     * @var string 后台通知地址
     */
    private $backUrl;


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
     * @return UpdatePayPwd
     */
    public function setBizUserId(string $bizUserId): UpdatePayPwd
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取跳转页面类型
     *
     * @return int|null
     */
    public function getJumpPageType(): ?int
    {
        return $this->jumpPageType;
    }

    /**
     * 设置跳转页面类型
     *
     * @param int $jumpPageType 跳转页面类型
     * @return UpdatePayPwd
     */
    public function setJumpPageType(int $jumpPageType): UpdatePayPwd
    {
        $this->jumpPageType = $jumpPageType;
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
     * @return UpdatePayPwd
     */
    public function setPhone(string $phone): UpdatePayPwd
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
     * @return UpdatePayPwd
     */
    public function setName(string $name): UpdatePayPwd
    {
        $this->name = $name;
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
     * @return UpdatePayPwd
     */
    public function setIdentityType(int $identityType): UpdatePayPwd
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
     * @return UpdatePayPwd
     */
    public function setIdentityNo(string $identityNo): UpdatePayPwd
    {
        $this->identityNo = $identityNo;
        return $this;
    }

    /**
     * 获取成功跳转地址
     *
     * @return string|null
     */
    public function getJumpUrl(): ?string
    {
        return $this->jumpUrl;
    }

    /**
     * 设置成功通知地址
     *
     * @param string $jumpUrl 成功通知地址
     * @return UpdatePayPwd
     */
    public function setJumpUrl(string $jumpUrl): UpdatePayPwd
    {
        $this->jumpUrl = $jumpUrl;
        return $this;
    }

    /**
     * 获取错误通知地址
     *
     * @return string|null
     */
    public function getErrorJumpUrl(): ?string
    {
        return $this->errorJumpUrl;
    }

    /**
     * 设置错误通知地址
     *
     * @param string $errorJumpUrl 错误通知地址
     * @return UpdatePayPwd
     */
    public function setErrorJumpUrl(string $errorJumpUrl): UpdatePayPwd
    {
        $this->errorJumpUrl = $errorJumpUrl;
        return $this;
    }

    /**
     * 获取后台通知地址
     *
     * @return string|null
     */
    public function getBackUrl(): ?string
    {
        return $this->backUrl;
    }

    /**
     * 设置后台通知地址
     *
     * @param string $backUrl 后台通知地址
     * @return UpdatePayPwd
     */
    public function setBackUrl(string $backUrl): UpdatePayPwd
    {
        $this->backUrl = $backUrl;
        return $this;
    }
}
