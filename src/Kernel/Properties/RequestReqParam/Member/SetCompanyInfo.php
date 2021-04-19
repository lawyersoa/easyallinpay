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
use EasyAllInPay\Kernel\Exceptions\RequestException;
use ReflectionException;

class SetCompanyInfo extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 后台通知地址
     */
    private $backUrl;

    /**
     * @var array 企业基本信息
     */
    private $companyBasicInfo;

    /**
     * @var array 企业扩展信息
     */
    private $companyExtendInfo;

    /**
     * @var bool 是否进行线上认证
     */
    private $isAuth;

    /**
     * 获取商户用户ID
     *
     * @return string|null
     */
    public function getBizUserId()
    {
        return $this->bizUserId;
    }

    /**
     * 设置商户用户ID
     *
     * @param string $bizUserId 商户用户ID
     * @return SetCompanyInfo
     */
    public function setBizUserId(string $bizUserId)
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取后台通知地址
     *
     * @return string|null
     */
    public function getBackUrl()
    {
        return $this->backUrl;
    }

    /**
     * 设置后台通知地址
     *
     * @param string $backUrl 后台通知地址
     * @return SetCompanyInfo
     */
    public function setBackUrl(string $backUrl)
    {
        $this->backUrl = $backUrl;
        return $this;
    }

    /**
     * 获取企业基本信息
     *
     * @return array
     */
    public function getCompanyBasicInfo()
    {
        return $this->companyBasicInfo;
    }

    /**
     * 设置企业基本信息
     *
     * @param CompanyBasicInfo $companyBasicInfo 企业基本信息
     * @return SetCompanyInfo
     * @throws RequestException
     * @throws ReflectionException
     */
    public function setCompanyBasicInfo(CompanyBasicInfo $companyBasicInfo)
    {
        $this->companyBasicInfo = $companyBasicInfo->buildParam();
        return $this;
    }

    /**
     * 获取企业扩展信息
     *
     * @return array
     */
    public function getCompanyExtendInfo()
    {
        return $this->companyExtendInfo;
    }

    /**
     * 设置企业扩展信息
     *
     * @param mixed $companyExtendInfo 企业扩展信息
     * @return SetCompanyInfo
     */
    public function setCompanyExtendInfo($companyExtendInfo)
    {
        $this->companyExtendInfo = $companyExtendInfo;
        return $this;
    }

    /**
     * 获取是否进行线上认证
     *
     * @return bool
     */
    public function getIsAuth()
    {
        return $this->isAuth;
    }

    /**
     * 设置是否进行线上认证
     *
     * @param bool $isAuth 是否进行线上认证
     * @return SetCompanyInfo
     */
    public function setIsAuth(bool $isAuth)
    {
        $this->isAuth = $isAuth;
        return $this;
    }

}

class CompanyBasicInfo extends RequestReqParam
{
    /**
     * @var string 企业名称
     */
    private $companyName;

    /**
     * @var string 企业地址
     */
    private $companyAddress;

    /**
     * @var int 认证类型
     */
    private $authType;

    /**
     * @var string 统一社会信用
     */
    private $uniCredit;

    /**
     * @var string 营业执照号
     */
    private $businessLicense;

    /**
     * @var string 组织机构代码
     */
    private $organizationCode;

    /**
     * @var string 税务登记证
     */
    private $taxRegister;

    /**
     * @var string 统一社会信用/营业执照号到期时间
     */
    private $expLicense;

    /**
     * @var string 联系电话
     */
    private $telephone;

    /**
     * @var string 法人姓名
     */
    private $legalName;

    /**
     * @var int 法人证件类型
     */
    private $identityType;

    /**
     * @var string 法人证件号码
     */
    private $legalIds;

    /**
     * @var string 证件有效开始日期
     */
    private $identityBeginDate;

    /**
     * @var string 证件有效截止日期
     */
    private $identityEndDate;

    /**
     * @var string 法人手机号码
     */
    private $legalPhone;

    /**
     * @var string 企业对公账户
     */
    private $accountNo;

    /**
     * @var string 开户银行名称
     */
    private $parentBankName;

    /**
     * @var string 开户行地区代码
     */
    private $bankCityNo;

    /**
     * @var string 开户行支行名称
     */
    private $bankName;

    /**
     * @var string 支付行号
     */
    private $unionBank;

    /**
     * @var string 开户行所在省
     */
    private $province;

    /**
     * @var string 开户行所在市
     */
    private $city;

    /**
     * 获取企业名称
     *
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * 设置企业名称
     *
     * @param string $companyName 企业名称
     * @return CompanyBasicInfo
     */
    public function setCompanyName(string $companyName): CompanyBasicInfo
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * 获取企业地址
     *
     * @return string|null
     */
    public function getCompanyAddress(): ?string
    {
        return $this->companyAddress;
    }

    /**
     * 设置企业地址
     *
     * @param string $companyAddress 企业地址
     * @return CompanyBasicInfo
     */
    public function setCompanyAddress(string $companyAddress): CompanyBasicInfo
    {
        $this->companyAddress = $companyAddress;
        return $this;
    }

    /**
     * 获取认证类型
     *
     * @return int|null
     */
    public function getAuthType(): ?int
    {
        return $this->authType;
    }

    /**
     * 设置认证类型
     *
     * @param int $authType 认证类型
     * @return CompanyBasicInfo
     * @throws InvalidArgumentException
     */
    public function setAuthType(int $authType): CompanyBasicInfo
    {
        if(!in_array($authType, array_keys(FieldMapping::$authTypeMapping))){
            throw new InvalidArgumentException('非法的认证类型');
        }
        $this->authType = $authType;
        return $this;
    }

    /**
     * 获取统一社会信用
     *
     * @return string|null
     */
    public function getUniCredit(): ?string
    {
        return $this->uniCredit;
    }

    /**
     * 设置统一社会信用
     *
     * @param string $uniCredit 统一社会信用
     * @return CompanyBasicInfo
     */
    public function setUniCredit(string $uniCredit): CompanyBasicInfo
    {
        $this->uniCredit = $uniCredit;
        return $this;
    }

    /**
     * 获取营业执照号
     *
     * @return string|null
     */
    public function getBusinessLicense(): ?string
    {
        return $this->businessLicense;
    }

    /**
     * 设置营业执照号
     *
     * @param string $businessLicense 营业执照号
     * @return CompanyBasicInfo
     */
    public function setBusinessLicense(string $businessLicense): CompanyBasicInfo
    {
        $this->businessLicense = $businessLicense;
        return $this;
    }

    /**
     * 获取组织机构代码
     *
     * @return string|null
     */
    public function getOrganizationCode(): ?string
    {
        return $this->organizationCode;
    }

    /**
     * 设置组织机构代码
     *
     * @param string $organizationCode 组织机构代码
     * @return CompanyBasicInfo
     */
    public function setOrganizationCode(string $organizationCode): CompanyBasicInfo
    {
        $this->organizationCode = $organizationCode;
        return $this;
    }

    /**
     * 获取税务登记证
     *
     * @return string|null
     */
    public function getTaxRegister(): ?string
    {
        return $this->taxRegister;
    }

    /**
     * 设置税务登记证
     *
     * @param string $taxRegister 税务登记证
     * @return CompanyBasicInfo
     */
    public function setTaxRegister(string $taxRegister): CompanyBasicInfo
    {
        $this->taxRegister = $taxRegister;
        return $this;
    }

    /**
     * 获取统一社会信用/营业执照号到期时间
     *
     * @return string|null
     */
    public function getExpLicense(): ?string
    {
        return $this->expLicense;
    }

    /**
     * 设置统一社会信用/营业执照号到期时间
     *
     * @param string $expLicense 统一社会信用/营业执照号到期时间
     * @return CompanyBasicInfo
     */
    public function setExpLicense(string $expLicense): CompanyBasicInfo
    {
        $this->expLicense = $expLicense;
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
     * @return CompanyBasicInfo
     */
    public function setTelephone(string $telephone): CompanyBasicInfo
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * 获取法人姓名
     *
     * @return string|null
     */
    public function getLegalName(): ?string
    {
        return $this->legalName;
    }

    /**
     * 设置法人姓名
     *
     * @param string $legalName 法人姓名
     * @return CompanyBasicInfo
     */
    public function setLegalName(string $legalName): CompanyBasicInfo
    {
        $this->legalName = $legalName;
        return $this;
    }

    /**
     * 获取法人证件类型
     *
     * @return int|null
     */
    public function getIdentityType(): ?int
    {
        return $this->identityType;
    }

    /**
     * 设置法人证件类型
     *
     * @param int $identityType 法人证件类型
     * @return CompanyBasicInfo
     */
    public function setIdentityType(int $identityType): CompanyBasicInfo
    {
        $this->identityType = $identityType;
        return $this;
    }

    /**
     * 获取法人证件号码
     *
     * @return string|null
     */
    public function getLegalIds(): ?string
    {
        return $this->legalIds;
    }

    /**
     * 设置法人证件号码
     *
     * @param string $legalIds 法人证件号码
     * @return CompanyBasicInfo
     */
    public function setLegalIds(string $legalIds): CompanyBasicInfo
    {
        global $app;
        $this->legalIds = $app['encryptor']->encrypt($legalIds);
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
     * @return CompanyBasicInfo
     */
    public function setIdentityBeginDate(string $identityBeginDate): CompanyBasicInfo
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
     * @return CompanyBasicInfo
     */
    public function setIdentityEndDate(string $identityEndDate): CompanyBasicInfo
    {
        $this->identityEndDate = $identityEndDate;
        return $this;
    }

    /**
     * 获取法人手机号码
     *
     * @return string|null
     */
    public function getLegalPhone(): ?string
    {
        return $this->legalPhone;
    }

    /**
     * 设置法人手机号码
     *
     * @param string $legalPhone 法人手机号码
     * @return CompanyBasicInfo
     */
    public function setLegalPhone(string $legalPhone): CompanyBasicInfo
    {
        $this->legalPhone = $legalPhone;
        return $this;
    }

    /**
     * 获取企业对公账户
     *
     * @return string|null
     */
    public function getAccountNo(): ?string
    {
        return $this->accountNo;
    }

    /**
     * 设置企业对公账户
     *
     * @param string $accountNo 企业对公账户
     * @return CompanyBasicInfo
     */
    public function setAccountNo(string $accountNo): CompanyBasicInfo
    {
        $this->accountNo = $accountNo;
        return $this;
    }

    /**
     * 获取开户银行名称
     *
     * @return string|null
     */
    public function getParentBankName(): ?string
    {
        return $this->parentBankName;
    }

    /**
     * 设置开户银行名称
     *
     * @param string $parentBankName 开户银行名称
     * @return CompanyBasicInfo
     */
    public function setParentBankName(string $parentBankName): CompanyBasicInfo
    {
        $this->parentBankName = $parentBankName;
        return $this;
    }

    /**
     * 获取开户行地区代码
     *
     * @return string|null
     */
    public function getBankCityNo(): ?string
    {
        return $this->bankCityNo;
    }

    /**
     * 设置开户行地区代码
     *
     * @param string $bankCityNo 开户行地区代码
     * @return CompanyBasicInfo
     */
    public function setBankCityNo(string $bankCityNo): CompanyBasicInfo
    {
        $this->bankCityNo = $bankCityNo;
        return $this;
    }

    /**
     * 获取开户行支行名称
     *
     * @return string|null
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    /**
     * 设置开户行支行名称
     *
     * @param string $bankName 开户行支行名称
     * @return CompanyBasicInfo
     */
    public function setBankName(string $bankName): CompanyBasicInfo
    {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * 获取支付行号
     *
     * @return string|null
     */
    public function getUnionBank(): ?string
    {
        return $this->unionBank;
    }

    /**
     * 设置支付行号
     *
     * @param string $unionBank 支付行号
     * @return CompanyBasicInfo
     */
    public function setUnionBank(string $unionBank): CompanyBasicInfo
    {
        $this->unionBank = $unionBank;
        return $this;
    }

    /**
     * 获取开户行所在省
     *
     * @return string|null
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * 设置开户行所在省
     *
     * @param string $province 开户行所在省
     * @return CompanyBasicInfo
     */
    public function setProvince(string $province): CompanyBasicInfo
    {
        $this->province = $province;
        return $this;
    }

    /**
     * 获取开户行所在市
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * 设置开户行所在市
     *
     * @param string $city 开户行所在市
     * @return CompanyBasicInfo
     */
    public function setCity(string $city): CompanyBasicInfo
    {
        $this->city = $city;
        return $this;
    }

    /**
     * 构建参数
     *
     * @return array
     * @throws RequestException
     * @throws \ReflectionException
     */
    public function buildParam()
    {
        return parent::buildParam();
    }
}

class CompanyExtendInfo extends RequestReqParam
{

}