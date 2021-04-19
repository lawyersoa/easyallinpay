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

class FillMemberInfoForHT extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 证件有效开始日期
     */
    private $identityBeginDate;

    /**
     * @var string 证件有效截止日期
     */
    private $identityEndDate;

    /**
     * @var string 地址
     */
    private $address;

    /**
     * @var string 职业
     */
    private $professionNo;

    /**
     * @var string 联系电话
     */
    private $telephone;

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
     * @return FillMemberInfoForHT
     */
    public function setBizUserId(string $bizUserId): FillMemberInfoForHT
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取证件有效开始日期
     *
     * @return string|null
     */
    public function getIdentityBeginDate(): ?string
    {
        return $this->identityBeginDate;
    }

    /**
     * 设置证件有效开始日期
     *
     * @param string $identityBeginDate 证件有效开始日期
     * @return FillMemberInfoForHT
     */
    public function setIdentityBeginDate(string $identityBeginDate): FillMemberInfoForHT
    {
        $this->identityBeginDate = $identityBeginDate;
        return $this;
    }

    /**
     * 获取证件有效截止日期
     *
     * @return string|null
     */
    public function getIdentityEndDate(): ?string
    {
        return $this->identityEndDate;
    }

    /**
     * 设置证件有效截止日期
     *
     * @param string $identityEndDate 证件有效截止日期
     * @return FillMemberInfoForHT
     */
    public function setIdentityEndDate(string $identityEndDate): FillMemberInfoForHT
    {
        $this->identityEndDate = $identityEndDate;
        return $this;
    }

    /**
     * 获取地址
     *
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * 设置地址
     *
     * @param string $address 地址
     * @return FillMemberInfoForHT
     */
    public function setAddress(string $address): FillMemberInfoForHT
    {
        $this->address = $address;
        return $this;
    }

    /**
     * 获取职业
     *
     * @return string|null
     */
    public function getProfessionNo(): ?string
    {
        return $this->professionNo;
    }

    /**
     * 设置职业
     *
     * @param string $professionNo 职业
     * @return FillMemberInfoForHT
     */
    public function setProfessionNo(string $professionNo): FillMemberInfoForHT
    {
        $this->professionNo = $professionNo;
        return $this;
    }

    /**
     * 获取联系电话
     *
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * 设置联系电话
     *
     * @param string $telephone 联系电话
     * @return FillMemberInfoForHT
     */
    public function setTelephone(string $telephone): FillMemberInfoForHT
    {
        $this->telephone = $telephone;
        return $this;
    }
}
