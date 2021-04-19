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

class VspTermIdService extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 操作
     */
    private $operationType;

    /**
     * @var string 收银宝集团商户号
     */
    private $vspMerchantId;

    /**
     * @var string 收银宝商户号
     */
    private $vspCusId;

    /**
     * @var string 收银宝分配的APP_ID
     */
    private $appId;

    /**
     * @var string 收银宝终端编号
     */
    private $vspTermId;

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
     * @return VspTermIdService
     */
    public function setBizUserId(string $bizUserId): VspTermIdService
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
     * @return VspTermIdService
     */
    public function setOperationType(string $operationType): VspTermIdService
    {
        $this->operationType = $operationType;
        return $this;
    }

    /**
     * 获取收银宝集团商户号
     *
     * @return string|null
     */
    public function getVspMerchantId(): ?string
    {
        return $this->vspMerchantId;
    }

    /**
     * 设置收银宝集团商户号
     *
     * @param string $vspMerchantid 收银宝集团商户号
     * @return VspTermIdService
     */
    public function setVspMerchantId(string $vspMerchantId): VspTermIdService
    {
        $this->vspMerchantId = $vspMerchantId;
        return $this;
    }

    /**
     * 获取收银宝商户号
     *
     * @return string|null
     */
    public function getVspCusId(): ?string
    {
        return $this->vspCusId;
    }

    /**
     * 设置收银宝商户号
     *
     * @param string $vspCusId 收银宝商户号
     * @return VspTermIdService
     */
    public function setVspCusId(string $vspCusId): VspTermIdService
    {
        $this->vspCusId = $vspCusId;
        return $this;
    }

    /**
     * 获取收银宝分配的APP_ID
     *
     * @return string|null
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * 设置收银宝分配的APP_ID
     *
     * @param string $appId 收银宝分配的APP_ID
     * @return VspTermIdService
     */
    public function setAppId(string $appId): VspTermIdService
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * 获取收银宝终端号
     *
     * @return string|null
     */
    public function getVspTermId(): ?string
    {
        return $this->vspTermId;
    }

    /**
     * 设置收银宝终端号
     *
     * @param string $vspTermId 收银宝终端号
     * @return VspTermIdService
     */
    public function setVspTermId(string $vspTermId): VspTermIdService
    {
        $this->vspTermId = $vspTermId;
        return $this;
    }
}
