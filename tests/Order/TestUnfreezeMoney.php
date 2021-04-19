<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Order\UnfreezeMoney;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$order = $app['order'];

$unfreezeMoneyRequest = new UnfreezeMoney();
try {
    $unfreezeMoneyRequest
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setBizFrozenNo('21041714040409877976') //商户冻结金额订单号 必填
        ->setAccountSetNo('123456') //账户集编号 必填
        ->setAmount(10) //冻结金额 必填
    ;
    $unfreezeMoneyResponse = $order->unfreezeMoney($unfreezeMoneyRequest);
    var_dump($unfreezeMoneyResponse);
    //var_dump($unfreezeMoneyResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

