<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Merchant\QueryReserveFundBalance;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$merchant = $app['merchant'];

$queryReserveFundBalanceRequest = new QueryReserveFundBalance();
try {
    $queryReserveFundBalanceRequest
        ->setSysId('') //应用ID 必填
        ->setFundAcctSys() //资金托管系统 可选
    ;
    $queryReserveFundBalanceResponse = $merchant->queryReserveFundBalance($queryReserveFundBalanceRequest);
    var_dump($queryReserveFundBalanceResponse);
    //var_dump($queryReserveFundBalanceResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

