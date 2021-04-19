<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Order\QueryBalance;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$order = $app['order'];

$queryBalanceRequest = new QueryBalance();
try {
    $queryBalanceRequest
        ;
    $queryBalanceResponse = $order->queryBalance($queryBalanceRequest);
    var_dump($queryBalanceResponse);
    //var_dump($queryBalanceResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

