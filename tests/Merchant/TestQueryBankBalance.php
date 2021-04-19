<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Merchant\QueryBankBalance;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$merchant = $app['merchant'];

$queryBankBalanceRequest = new QueryBankBalance();
try {
    $queryBankBalanceRequest
        ->setAcctOrgType() //开户机构类型 必填
        ->setAcctNo('123456') //银行账户号 必填
        ->setAcctName('123456') //银行账户名 必填
        ->setDate('20210101') //查询日期 可选
    ;
    $queryBankBalanceResponse = $merchant->queryBankBalance($queryBankBalanceRequest);
    var_dump($queryBankBalanceResponse);
    //var_dump($queryBankBalanceResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

