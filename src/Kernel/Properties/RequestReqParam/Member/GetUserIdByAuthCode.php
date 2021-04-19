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

class GetUserIdByAuthCode extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 收银宝子商户号
     */
    private $vspCusId;

    /**
     * @var string 授权码
     */
    private $authCode;

    /**
     * @var string 授权码类型
     */
    private $authType;

    /**
     * @var string 微信支付APP_ID
     */
    private $subAppId;

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
     * 获取收银宝子商户号
     *
     * @return string|null
     */
    public function getVspCusId(): ?string
    {
        return $this->vspCusId;
    }

    /**
     * 设置收银宝子商户号
     *
     * @param string $vspCusId 收银宝子商户号
     * @return GetUserIdByAuthCode
     */
    public function setVspCusId(string $vspCusId): GetUserIdByAuthCode
    {
        $this->vspCusId = $vspCusId;
        return $this;
    }

    /**
     * 获取授权码
     *
     * @return string|null
     */
    public function getAuthCode(): ?string
    {
        return $this->authCode;
    }

    /**
     * 设置授权码
     *
     * @param string $authCode 授权码
     * @return GetUserIdByAuthCode
     */
    public function setAuthCode(string $authCode): GetUserIdByAuthCode
    {
        $this->authCode = $authCode;
        return $this;
    }

    /**
     * 获取授权码类型
     *
     * @return string|null
     */
    public function getAuthType(): ?string
    {
        return $this->authType;
    }

    /**
     * 设置授权码类型
     *
     * @param string $authType 授权码类型
     * @return GetUserIdByAuthCode
     */
    public function setAuthType(string $authType): GetUserIdByAuthCode
    {
        $this->authType = $authType;
        return $this;
    }

    /**
     * 获取微信支付APP_ID
     *
     * @return string|null
     */
    public function getSubAppId(): ?string
    {
        return $this->subAppId;
    }

    /**
     * 设置微信支付APP_ID
     *
     * @param string $subAppId 微信支付APP_ID
     * @return GetUserIdByAuthCode
     */
    public function setSubAppId(string $subAppId): GetUserIdByAuthCode
    {
        $this->subAppId = $subAppId;
        return $this;
    }
}
