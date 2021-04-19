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

class SetRealName extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var bool 是否由通商云进行认证
     */
    private $isAuth;

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
     * @return SetRealName
     */
    public function setBizUserId(string $bizUserId): SetRealName
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取是否由通商云认证
     *
     * @return bool
     */
    public function getIsAuth(): bool
    {
        return $this->isAuth;
    }

    /**
     * 设置是否由通商云认证
     *
     * @param bool $isAuth 是否由通商云认证
     * @return SetRealName
     * @throws InvalidArgumentException
     */
    public function setIsAuth(bool $isAuth): SetRealName
    {
        if($isAuth !== true){
            throw new InvalidArgumentException('目前必须通过通商云认证');
        }
        $this->isAuth = $isAuth;
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
     * @return SetRealName
     */
    public function setName(string $name): SetRealName
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
     * @return SetRealName
     * @throws InvalidArgumentException
     */
    public function setIdentityType(int $identityType): SetRealName
    {
        if(!in_array($identityType, array_keys(FieldMapping::$identityTypeMapping))){
            throw new InvalidArgumentException('非法的证件类型');
        }
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
     * @return SetRealName
     */
    public function setIdentityNo(string $identityNo): SetRealName
    {
        global $app;
        $this->identityNo = $app['encryptor']->encrypt($identityNo);
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
     * @return SetRealName
     */
    public function setIdentityBeginDate(string $identityBeginDate): SetRealName
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
     * @return SetRealName
     */
    public function setIdentityEndDate(string $identityEndDate): SetRealName
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
     * @return SetRealName
     */
    public function setAddress(string $address): SetRealName
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
     * @return SetRealName
     * @throws InvalidArgumentException
     */
    public function setProfessionNo(string $professionNo): SetRealName
    {
        if(!in_array($professionNo, array_keys(FieldMapping::$professionNoMapping))){
            throw new InvalidArgumentException('非法的职业');
        }
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
     * @return SetRealName
     */
    public function setTelephone(string $telephone): SetRealName
    {
        $this->telephone = $telephone;
        return $this;
    }
}
