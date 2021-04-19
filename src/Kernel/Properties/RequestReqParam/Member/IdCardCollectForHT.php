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

class IdCardCollectForHT extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 身份证正面（人像面）
     */
    private $certFront;

    /**
     * @var string 身份证背面（国徽面）
     */
    private $certBack;

    /**
     * @var string 营业执照
     */
    private $corpBusPic;

    /**
     * @var string 摘要
     */
    private $summary;

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
     * @return IdCardCollectForHT
     */
    public function setBizUserId(string $bizUserId): IdCardCollectForHT
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取身份证正面（人像面）
     *
     * @return string|null
     */
    public function getCertFront(): ?string
    {
        return $this->certFront;
    }

    /**
     * 设置身份证正面（人像面）
     *
     * @param string $certFront 身份证正面（人像面）
     * @return IdCardCollectForHT
     */
    public function setCertFront(string $certFront): IdCardCollectForHT
    {
        $this->certFront = $certFront;
        return $this;
    }

    /**
     * 获取身份证背面（国徽面）
     *
     * @return string|null
     */
    public function getCertBack(): ?string
    {
        return $this->certBack;
    }

    /**
     * 设置身份证背面（国徽面）
     *
     * @param string $certBack 身份证背面（国徽面）
     * @return IdCardCollectForHT
     */
    public function setCertBack(string $certBack): IdCardCollectForHT
    {
        $this->certBack = $certBack;
        return $this;
    }

    /**
     * 获取营业执照
     *
     * @return string|null
     */
    public function getCorpBusPic(): ?string
    {
        return $this->corpBusPic;
    }

    /**
     * 设置营业执照
     *
     * @param string $corpBusPic 营业执照
     * @return IdCardCollectForHT
     */
    public function setCorpBusPic(string $corpBusPic): IdCardCollectForHT
    {
        $this->corpBusPic = $corpBusPic;
        return $this;
    }

    /**
     * 获取摘要
     *
     * @return string|null
     */
    public function getSummary(): ?string
    {
        return $this->summary;
    }

    /**
     * 设置摘要
     *
     * @param string $summary 摘要
     * @return IdCardCollectForHT
     */
    public function setSummary(string $summary): IdCardCollectForHT
    {
        $this->summary = $summary;
        return $this;
    }
}
