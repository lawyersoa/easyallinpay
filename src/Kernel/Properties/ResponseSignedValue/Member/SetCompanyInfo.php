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

class SetCompanyInfo extends ResponseSignedValue
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var int 审核结果
     */
    private $result;

    /**
     * @var string 失败原因
     */
    private $failReason;

    /**
     * @var string 备注
     */
    private $remark;

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
     * @return SetCompanyInfo
     */
    public function setBizUserId(string $bizUserId): SetCompanyInfo
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取审核结果
     *
     * @return int|null
     */
    public function getResult(): ?int
    {
        return $this->result;
    }

    /**
     * 设置审核结果
     *
     * @param int $result 审核结果
     * @return SetCompanyInfo
     */
    public function setResult(int $result): SetCompanyInfo
    {
        $this->result = $result;
        return $this;
    }

    /**
     * 获取失败原因
     *
     * @return string|null
     */
    public function getFailReason(): ?string
    {
        return $this->failReason;
    }

    /**
     * 设置失败原因
     *
     * @param string $failReason 失败原因
     * @return SetCompanyInfo
     */
    public function setFailReason(string $failReason): SetCompanyInfo
    {
        $this->failReason = $failReason;
        return $this;
    }

    /**
     * 获取备注
     *
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * 设置备注
     *
     * @param string $remark 备注
     * @return SetCompanyInfo
     */
    public function setRemark(string $remark): SetCompanyInfo
    {
        $this->remark = $remark;
        return $this;
    }
}
