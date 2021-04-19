<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Order\ConsumeApply;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$order = $app['order'];

$consumeApplyProperty = new ConsumeApply();
try {
    $consumeApplyProperty
        ->setPayerId('') //付款方商户用户ID 必填
        ->setReceiverId('') //收款方商户用户ID 必填
        ->setBizOrderNo('') //商户订单号 必填
        ->setAmount(2) //订单金额 必填
        ->setFee(1) //手续费 必填
        ->setValidateType(FieldMapping::VALIDATE_TYPE_NONE) //交易验证方式 可选
        ->setSplitRule([]) //分账规则 可选
        ->setFrontUrl('http://www.easyallinpay.com') //前台跳转地址 可选
        ->setBackUrl('http://www.easyallinpay.com') //后台通知地址 可选
        ->setOrderExpireDatetime('2021-05-21 00:00:00')
        ->setPayMethod() //支付方式 必填
        ->setGoodsType() //商品类型 可选
        ->setBizGoodsNo('') //商户商品编号
        ->setGoodsName('商品名称') //商品名称 可选
        ->setIndustryCode('行业代码') //行业代码 必填
        ->setIndustryName('行业名称') //行业代码 必填
        ->setSource(FieldMapping::SOURCE_PC) //访问终端类型 必填
        ->setSummary('摘要信息') //摘要信息 可选
        ->setExtendInfo('扩展信息') //扩展信息 可选
    ;
    $consumeApplyResponse = $order->consumeApply($consumeApplyProperty);
    var_dump($consumeApplyResponse);
    //var_dump($consumeApplyResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

