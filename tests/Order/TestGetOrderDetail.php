<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Order\GetOrderDetail;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$order = $app['order'];

$getOrderDetailRequest = new GetOrderDetail();
try {
    $getOrderDetailRequest
        ->setBizOrderNo('21041710090894304420') //商户订单号 必填
    ;
    $getOrderDetailResponse = $order->getOrderDetail($getOrderDetailRequest);
    var_dump($getOrderDetailResponse);
    //var_dump($getOrderDetailResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

