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

class WXSubMerchantService extends ResponseSignedValue
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 绑定、查询收银宝终端号结果
     */
    private $result;

    /**
     * @var string 微信服务商商户号
     */
    private $merchantId;

    /**
     * @var string 微信服务商APP_Id
     */
    private $appId;

    /**
     * @var string 微信子商户号
     */
    private $subMerchantId;

    /**
     * @var string 微信子商户 APP_ID
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
     * @return WXSubMerchantService
     */
    public function setBizUserId(string $bizUserId): WXSubMerchantService
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取绑定、查询收银宝终端号结果
     *
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->result;
    }

    /**
     * 设置绑定、查询收银宝终端号结果
     *
     * @param string $result 绑定、查询收银宝终端号结果
     * @return WXSubMerchantService
     */
    public function setResult(string $result): WXSubMerchantService
    {
        $this->result = $result;
        return $this;
    }

    /**
     * 获取微信服务商商户号
     *
     * @return string|null
     */
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    /**
     * 设置微信服务商商户号
     *
     * @param string $merchantId 微信服务商商户号
     * @return WXSubMerchantService
     */
    public function setMerchantId(string $merchantId): WXSubMerchantService
    {
        $this->merchantId = $merchantId;
        return $this;
    }

    /**
     * 获取微信服务商APP_ID
     *
     * @return string|null
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * 设置微信服务商APP_ID
     *
     * @param string $appId 微信服务商APP_ID
     * @return WXSubMerchantService
     */
    public function setAppId(string $appId): WXSubMerchantService
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * 获取微信子商户号
     *
     * @return string|null
     */
    public function getSubMerchantId(): ?string
    {
        return $this->subMerchantId;
    }

    /**
     * 设置微信子商户号
     *
     * @param string $subMerchantId 微信子商户号
     * @return WXSubMerchantService
     */
    public function setSubMerchantId(string $subMerchantId): WXSubMerchantService
    {
        $this->subMerchantId = $subMerchantId;
        return $this;
    }

    /**
     * 获取微信子商户APP_ID
     *
     * @return string|null
     */
    public function getSubAppId(): ?string
    {
        return $this->subAppId;
    }

    /**
     * 设置微信子商户APP_ID
     *
     * @param string $subAppId 微信子商户APP_ID
     * @return WXSubMerchantService
     */
    public function setSubAppId(string $subAppId): WXSubMerchantService
    {
        $this->subAppId = $subAppId;
        return $this;
    }
}
