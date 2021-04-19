<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Order\GetPayeeFundsInTransitDetail;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$order = $app['order'];

$getPayeeFundsInTransitDetailRequest = new GetPayeeFundsInTransitDetail();
try {
    $getPayeeFundsInTransitDetailRequest
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setAccountSetNo('123456') //收款人账户集编号 必填
        ->setBizOrderNo('21041714040409877976') //商户订单号 必填
        ->setDateStart('2021-01-01 00:00:00') //开始日期 必填
        ->setDateEnd('2021-01-01 23:59:59') //结束日期 必填
    ;
    $getPayeeFundsInTransitDetailResponse = $order->getPayeeFundsInTransitDetail($getPayeeFundsInTransitDetailRequest);
    var_dump($getPayeeFundsInTransitDetailResponse);
    //var_dump($getPayeeFundsInTransitDetailResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

