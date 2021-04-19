<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Order\WithdrawApply;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$order = $app['order'];

$withdrawApplyProperty = new WithdrawApply();
try {
    $withdrawApplyProperty
        ->setBizOrderNo('') //商户订单号 必填
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setAccountSetNo('123456') //账户集编号 必填
        ->setAmount(2) //订单金额 必填
        ->setFee(1) //手续费 必填
        ->setValidateType(FieldMapping::VALIDATE_TYPE_NONE) //交易验证方式 可选
        ->setBackUrl('http://www.easyallinpay.com') //后台通知地址 可选
        ->setOrderExpireDatetime('2021-05-21 00:00:00')
        ->setPayMethod() //支付方式 可选
        ->setBankCardNo('') //银行卡号/账号 必填
        ->setBankCardPro('') //银行卡/账户属性 可选
        ->setWithdrawType() //提现方式 可选
        ->setIndustryCode('行业代码') //行业代码 必填
        ->setIndustryName('行业名称') //行业代码 必填
        ->setSource(FieldMapping::SOURCE_PC) //访问终端类型 必填
        ->setSummary('摘要信息') //摘要信息 可选
        ->setExtendInfo('扩展信息') //扩展信息 可选
    ;
    $withdrawApplyResponse = $order->withdrawApply($withdrawApplyProperty);
    var_dump($withdrawApplyResponse);
    //var_dump($withdrawApplyResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

