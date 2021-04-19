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

class IdCardCollect extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 核对结果异步通知地址
     */
    private $ocrComparisonResultBackUrl;

    /**
     * @var int 影印件类型
     */
    private $picType;

    /**
     * @var string 影印件图片
     */
    private $picture;

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
     * @return IdCardCollect
     */
    public function setBizUserId(string $bizUserId): IdCardCollect
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取核对结果异步通知地址
     *
     * @return string|null
     */
    public function getOcrComparisonResultBackUrl(): ?string
    {
        return $this->ocrComparisonResultBackUrl;
    }

    /**
     * 设置核对结果异步通知地址
     *
     * @param string $ocrComparisonResultBackUrl 核对结果异步通知地址
     * @return IdCardCollect
     */
    public function setOcrComparisonResultBackUrl(string $ocrComparisonResultBackUrl): IdCardCollect
    {
        $this->ocrComparisonResultBackUrl = $ocrComparisonResultBackUrl;
        return $this;
    }

    /**
     * 获取图片类型
     *
     * @return int|null
     */
    public function getPicType(): ?int
    {
        return $this->picType;
    }

    /**
     * 设置图片类型
     *
     * @param int $picType 图片类型
     * @return IdCardCollect
     * @throws InvalidArgumentException
     */
    public function setPicType(int $picType): IdCardCollect
    {
        if(!in_array($picType, array_keys(FieldMapping::$idCardTypeMapping))){
            throw new InvalidArgumentException('非法的图片类型');
        }
        $this->picType = $picType;
        return $this;
    }

    /**
     * 获取图片
     *
     * @return string|null
     */
    public function getPicture(): ?string
    {
        return $this->picture;
    }

    /**
     * 设置图片
     *
     * @param string $picture 图片
     * @return IdCardCollect
     */
    public function setPicture(string $picture): IdCardCollect
    {
        $this->picture = $picture;
        return $this;
    }
}
