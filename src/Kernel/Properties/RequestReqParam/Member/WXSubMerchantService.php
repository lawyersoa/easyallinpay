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

class WXSubMerchantService extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 操作类型
     */
    private $operationType;

    /**
     * @var string 微信服务商商户号
     */
    private $merchantId;

    /**
     * @var string 微信服务商APP_ID
     */
    private $appId;

    /**
     * @var string 微信子商户号
     */
    private $subMerchantId;

    /**
     * @var string 微信子商户APP_ID
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
     * 获取操作类型
     *
     * @return string|null
     */
    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    /**
     * 设置操作类型
     *
     * @param string $operationType 操作类型
     * @return WXSubMerchantService
     */
    public function setOperationType(string $operationType): WXSubMerchantService
    {
        $this->operationType = $operationType;
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
