<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Order\Refund;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$member = $app['member'];

$refundRequest = new Refund();
try {
    $refundRequest
        ->setBizOrderNo('21041710090894304420') //商户订单号 必填
        ->setOriBizOrderNo('21041710095848270640') //商户原订单号 必填
        ->setBizUserId('19e2fa8c-9f22-11eb-8ea5-0800274df54a') //付款方商户用户ID 必填
        ->setRefundType('') //退款方式 可选
        ->setRefundList([]) //收款人的退款金额 必填
        ->setBackUrl('http://www.easyallinpay.com') //后台通知地址 可选
        ->setAmount(2) //本次退款总金额 必填
        ->setCouponAmount(1) //代金券退款金额 可选
        ->setFeeAmount(1) //手续费退款金额 可选
        ->setExtendInfo('扩展信息') //扩展信息 可选
    ;
    $refundResponse = $member->refund($refundRequest);
    var_dump($refundResponse);
    //var_dump($refundResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

