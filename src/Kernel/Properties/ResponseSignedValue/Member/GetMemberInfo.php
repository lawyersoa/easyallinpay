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

use EasyAllInPay\Kernel\Constant\FieldMapping;
use EasyAllInPay\Kernel\Properties\ResponseSignedValue\ResponseSignedValue;
use EasyAllInPay\Kernel\Exceptions\ResponseException;
use ReflectionException;

class GetMemberInfo extends ResponseSignedValue
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var int 会员类型
     */
    private $memberType;

    /**
     * @var mixed 会员信息
     */
    private $memberInfo;

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
     * @return GetMemberInfo
     */
    public function setBizUserId(string $bizUserId): GetMemberInfo
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取会员类型
     *
     * @return int|null
     */
    public function getMemberType(): ?int
    {
        return $this->memberType;
    }

    /**
     * 设置会员类型
     *
     * @param int $memberType 会员类型
     * @return GetMemberInfo
     */
    public function setMemberType(int $memberType): GetMemberInfo
    {
        $this->memberType = $memberType;
        return $this;
    }

    /**
     * 获取会员信息
     *
     * @return PersonalMemberInfo|null
     */
    public function getMemberInfo(): ?PersonalMemberInfo
    {
        return $this->memberInfo;
    }

    /**
     * 设置会员信息
     *
     * @param PersonalMemberInfo $memberInfo 会员信息
     * @return GetMemberInfo
     * @throws ResponseException
     * @throws ReflectionException
     */
    public function setMemberInfo(PersonalMemberInfo $memberInfo): GetMemberInfo
    {
        $this->memberInfo = $memberInfo;
        return $this;
        if($this->memberType == FieldMapping::MEMBER_TYPE_COMPANY){
            $this->memberInfo = (new CompanyMemberInfo())->buildResponse($memberInfo);
        }else if($this->memberType == FieldMapping::MEMBER_TYPE_PERSONAL){
            $this->memberInfo = (new PersonalMemberInfo())->buildResponse($memberInfo);
        }else{
        }
    }

}

class PersonalMemberInfo extends ResponseSignedValue
{
    /**
     * @var string 姓名
     */
    private $name;

    /**
     * @var int 用户状态
     */
    private $userState;

    /**
     * @var string 通商云用户ID
     */
    private $userId;

    /**
     * @var string 国家
     */
    private $country;

    /**
     * @var string 省份
     */
    private $province;

    /**
     * @var string 县市
     */
    private $area;

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
     * @var string 手机号码
     */
    private $phone;

    /**
     * @var string 证件类型
     */
    private $identityType;

    /**
     * @var string 身份证号码
     */
    private $identityCardNo;

    /**
     * @var string 证件有效开始日期
     */
    private $identityBeginDate;

    /**
     * @var string 证件有效截止日期
     */
    private $identityEndDate;

    /**
     * @var bool 是否绑定手机
     */
    private $isPhoneChecked;

    /**
     * @var string 创建时间
     */
    private $registerTime;

    /**
     * @var string 创建IP
     */
    private $registerIp;

    /**
     * @var int 支付失败次数
     */
    private $payFailAmount;

    /**
     * @var bool 是否进行实名认证
     */
    private $isIdentityChecked;

    /**
     * @var string 实名认证时间
     */
    private $realNameTime;

    /**
     * @var string 备注
     */
    private $remark;

    /**
     * @var int 访问终端类型
     */
    private $source;

    /**
     * @var bool 是否已设置支付密码
     */
    private $isSetPayPwd;

    /**
     * @var bool 是否已签电子协议
     */
    private $isSignContract;

    /**
     * @var int 开户机构类型
     */
    private $acctOrgType;

    /**
     * @var string 会员开通的华通子账号或通联子账号
     */
    private $subAcctNo;

    /**
     * @var string 签订电子协议时间
     */
    private $signContractTime;

    /**
     * @var string 电子协议编号
     */
    private $contractNo;

    /**
     * @var string 电子协议编号
     */
    private $ContractNo;

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
     * @return PersonalMemberInfo
     */
    public function setName(string $name): PersonalMemberInfo
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 获取用户状态
     *
     * @return int|null
     */
    public function getUserState(): ?int
    {
        return $this->userState;
    }

    /**
     * 设置用户状态
     *
     * @param int $userState 用户状态
     * @return PersonalMemberInfo
     */
    public function setUserState(int $userState): PersonalMemberInfo
    {
        $this->userState = $userState;
        return $this;
    }

    /**
     * 获取通商云用户ID
     *
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * 设置通商云用户ID
     *
     * @param string $userId 通商云用户ID
     * @return PersonalMemberInfo
     */
    public function setUserId(string $userId): PersonalMemberInfo
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param ?string $country
     * @return PersonalMemberInfo
     */
    public function setCountry(?string $country): PersonalMemberInfo
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * @param string $province
     * @return PersonalMemberInfo
     */
    public function setProvince(string $province): PersonalMemberInfo
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @return string
     */
    public function getArea(): ?string
    {
        return $this->area;
    }

    /**
     * @param string $area
     * @return PersonalMemberInfo
     */
    public function setArea(string $area): PersonalMemberInfo
    {
        $this->area = $area;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return PersonalMemberInfo
     */
    public function setAddress(string $address): PersonalMemberInfo
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getProfessionNo(): ?string
    {
        return $this->professionNo;
    }

    /**
     * @param string $professionNo
     * @return PersonalMemberInfo
     */
    public function setProfessionNo(string $professionNo): PersonalMemberInfo
    {
        $this->professionNo = $professionNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     * @return PersonalMemberInfo
     */
    public function setTelephone(string $telephone): PersonalMemberInfo
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return PersonalMemberInfo
     */
    public function setPhone(string $phone): PersonalMemberInfo
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentityType(): ?string
    {
        return $this->identityType;
    }

    /**
     * @param int $identityType
     * @return PersonalMemberInfo
     */
    public function setIdentityType(int $identityType): PersonalMemberInfo
    {
        $this->identityType = $identityType;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentityCardNo(): ?string
    {
        return $this->identityCardNo;
    }

    /**
     * @param string $identityCardNo
     * @return PersonalMemberInfo
     */
    public function setIdentityCardNo(string $identityCardNo): PersonalMemberInfo
    {
        $this->identityCardNo = $identityCardNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentityBeginDate(): ?string
    {
        return $this->identityBeginDate;
    }

    /**
     * @param string $identityBeginDate
     * @return PersonalMemberInfo
     */
    public function setIdentityBeginDate(string $identityBeginDate): PersonalMemberInfo
    {
        $this->identityBeginDate = $identityBeginDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdentityEndDate(): ?string
    {
        return $this->identityEndDate;
    }

    /**
     * @param string $identityEndDate
     * @return PersonalMemberInfo
     */
    public function setIdentityEndDate(string $identityEndDate): PersonalMemberInfo
    {
        $this->identityEndDate = $identityEndDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPhoneChecked(): ?bool
    {
        return $this->isPhoneChecked;
    }

    /**
     * @param bool $isPhoneChecked
     * @return PersonalMemberInfo
     */
    public function setIsPhoneChecked(bool $isPhoneChecked): PersonalMemberInfo
    {
        $this->isPhoneChecked = $isPhoneChecked;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRegisterTime(): ?string
    {
        return $this->registerTime;
    }

    /**
     * @param string $registerTime
     * @return PersonalMemberInfo
     */
    public function setRegisterTime(string $registerTime): PersonalMemberInfo
    {
        $this->registerTime = $registerTime;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRegisterIp(): ?string
    {
        return $this->registerIp;
    }

    /**
     * @param string $registerIp
     * @return PersonalMemberInfo
     */
    public function setRegisterIp(string $registerIp): PersonalMemberInfo
    {
        $this->registerIp = $registerIp;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPayFailAmount(): ?int
    {
        return $this->payFailAmount;
    }

    /**
     * @param int $payFailAmount
     * @return PersonalMemberInfo
     */
    public function setPayFailAmount(int $payFailAmount): PersonalMemberInfo
    {
        $this->payFailAmount = $payFailAmount;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isIdentityChecked(): ?bool
    {
        return $this->isIdentityChecked;
    }

    /**
     * @param bool $isIdentityChecked
     * @return PersonalMemberInfo
     */
    public function setIsIdentityChecked(bool $isIdentityChecked): PersonalMemberInfo
    {
        $this->isIdentityChecked = $isIdentityChecked;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRealNameTime(): ?string
    {
        return $this->realNameTime;
    }

    /**
     * @param string $realNameTime
     * @return PersonalMemberInfo
     */
    public function setRealNameTime(string $realNameTime): PersonalMemberInfo
    {
        $this->realNameTime = $realNameTime;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     * @return PersonalMemberInfo
     */
    public function setRemark(string $remark): PersonalMemberInfo
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSource(): ?int
    {
        return $this->source;
    }

    /**
     * @param int $source
     * @return PersonalMemberInfo
     */
    public function setSource(int $source): PersonalMemberInfo
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsSetPayPwd(): ?bool
    {
        return $this->isSetPayPwd;
    }

    /**
     * @param bool $isSetPayPwd
     * @return PersonalMemberInfo
     */
    public function setIsSetPayPwd(bool $isSetPayPwd): PersonalMemberInfo
    {
        $this->isSetPayPwd = $isSetPayPwd;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsSignContract(): ?bool
    {
        return $this->isSignContract;
    }

    /**
     * @param bool $isSignContract
     * @return PersonalMemberInfo
     */
    public function setIsSignContract(bool $isSignContract): PersonalMemberInfo
    {
        $this->isSignContract = $isSignContract;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAcctOrgType(): ?int
    {
        return $this->acctOrgType;
    }

    /**
     * @param int $acctOrgType
     * @return PersonalMemberInfo
     */
    public function setAcctOrgType(int $acctOrgType): PersonalMemberInfo
    {
        $this->acctOrgType = $acctOrgType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubAcctNo(): ?string
    {
        return $this->subAcctNo;
    }

    /**
     * @param string $subAcctNo
     * @return PersonalMemberInfo
     */
    public function setSubAcctNo(string $subAcctNo): PersonalMemberInfo
    {
        $this->subAcctNo = $subAcctNo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSignContractTime(): ?string
    {
        return $this->signContractTime;
    }

    /**
     * @param string $signContractTime
     * @return PersonalMemberInfo
     */
    public function setSignContractTime(string $signContractTime): PersonalMemberInfo
    {
        $this->signContractTime = $signContractTime;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContractNo(): ?string
    {
        return $this->contractNo;
    }

    /**
     * @param string $contractNo
     * @return PersonalMemberInfo
     */
    public function setContractNo(string $contractNo): PersonalMemberInfo
    {
        $this->contractNo = $contractNo;
        return $this;
    }

//    public function buildResponse(array $response)
//    {
//        return parent::buildResponse($response);
//    }
}

class CompanyMemberInfo extends ResponseSignedValue
{

}
