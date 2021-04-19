<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Order\ApplicationTransfer;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$order = $app['order'];

$applicationTransferRequest = new ApplicationTransfer();
try {
    $applicationTransferRequest
        ->setBizTransferNo('21041710090894304420') //商户系统转账订单号 必填
        ->setSourceAccountSetNo('') //源账户集编号 必填
        ->setTargetBizUserId('19e2fa8c-9f22-11eb-8ea5-0800274df54a') //目标商户用户ID 必填
        ->setTargetAccountSetNo('123456') //目标账户集编号 必填
        ->setAmount(2) //转账金额 必填
        ->setExtendInfo('扩展信息') //扩展信息 可选
    ;
    $applicationTransferResponse = $order->applicationTransfer($applicationTransferRequest);
    var_dump($applicationTransferResponse);
    //var_dump($applicationTransferResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

