<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Merchant\QueryMerchantBalance;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$merchant = $app['merchant'];

$queryMerchantBalanceRequest = new QueryMerchantBalance();
try {
    $queryMerchantBalanceRequest
        ->setAccountSetNo('123456') //账户集编号 必填
    ;
    $queryMerchantBalanceResponse = $merchant->queryMerchantBalance($queryMerchantBalanceRequest);
    var_dump($queryMerchantBalanceResponse);
    //var_dump($queryMerchantBalanceResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

