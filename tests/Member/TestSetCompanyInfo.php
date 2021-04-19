<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\SetCompanyInfo;
use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\CompanyBasicInfo;
use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\CompanyExtendInfo;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$member = $app['member'];

$setCompanyInfoRequest = new SetCompanyInfo();
$companyBasicInfoRequest = new CompanyBasicInfo();
$companyExtendInfoRequest = new CompanyExtendInfo();
try {
    $companyBasicInfoRequest
        ->setCompanyName('济南律之程网络信息科技有限公司') //企业名称 必填
        ->setCompanyAddress('公司地址') //企业地址 可选
        ->setAuthType(FieldMapping::AUTH_TYPE_ONE) //认证类型 可选
        ->setUniCredit('123456') //统一社会信用 可选(一证时必填)
        ->setBusinessLicense('123456') //营业执照号 可选(三证时必填)
        ->setOrganizationCode('123456') //组织机构代码 可选(三证时必填)
        ->setTaxRegister('123456') //税务登记证 可选(三证时必填)
        ->setExpLicense('2020-12-22') //统一社会信用/营业执照号到期时间 可选
        ->setTelephone('13512121212') //联系电话 可选(华通银行存管必须上送)
        ->setLegalName('孙悟空') //法人姓名 必填
        ->setIdentityType(FieldMapping::IDENTITY_TYPE_ID) //证件类型 必填
        ->setLegalIds('123456') //法人证件号码 必填
        ->setIdentityBeginDate('1990-01-01') //证件有效开始日期 可选(华通银行存管必须上送)
        ->setIdentityEndDate('1990-01-01') //证件有效截止日期 可选(华通银行存管必须上送)
        ->setLegalPhone('13200000000') //法人手机号码 必填
        ->setAccountNo('123456') //企业对公账户 必填
        ->setParentBankName('农业银行') //开户银行名称 必填
        ->setBankCityNo(1100) //开户行地区代码 可选
        ->setBankName('花园路支行') //开户行支行名称 必填
        ->setUnionBank('123456') //支付行号 必填
        ->setProvince('山东省') //开户行所在省 可选(开户行所在市必须同时上送)
        ->setCity('济南市') //开户行所在市 可选(开户行所在省必须同时上送)
    ;
    $setCompanyInfoRequest
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setBackUrl('http://www.easyallinpay.com') //后台通知地址 必填
        ->setCompanyBasicInfo($companyBasicInfoRequest) //企业基本信息 必填
        ->setCompanyExtendInfo($companyExtendInfoRequest) //企业扩展信息 可选
        ->setIsAuth(true) //是否进行线上认证 必填
    ;
    $setCompanyInfoResponse = $member->setCompanyInfo($setCompanyInfoRequest);
    var_dump($setCompanyInfoResponse);
    //var_dump($setCompanyInfoResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

