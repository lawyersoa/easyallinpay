<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Order\Pay;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$order = $app['order'];

$payRequest = new Pay();
try {
    $payRequest
        ->setBizUserId('') //商户用户ID 必填
        ->setBizOrderNo('') //商户订单号 必填
        ->setTradeNo('') //交易编号 可选
        ->setVerificationCode('') //短信验证码 必填
        ->setConsumerIp('') //IP地址 必填
    ;
    $payResponse = $order->pay($payRequest);
    var_dump($payResponse);
    //var_dump($payResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

