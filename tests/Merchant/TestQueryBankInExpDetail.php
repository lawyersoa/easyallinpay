<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Merchant\QueryBankInExpDetail;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$merchant = $app['merchant'];

$queryBankInExpDetailRequest = new QueryBankInExpDetail();
try {
    $queryBankInExpDetailRequest
        ->setAcctOrgType(1) //开户机构类型 必填
        ->setStartDate('2021-01-01') //开始日期 必填
        ->setEndDate('2021-01-07') //结束日期 必填
        ->setIsFirstFlag(1) //首次查询标志 必填
        ->setStartPosition(0) //起始位置 必填
        ->setQueryNum(100) //查询行数 必填
    ;
    $queryBankInExpDetailResponse = $merchant->queryBankInExpDetail($queryBankInExpDetailRequest);
    var_dump($queryBankInExpDetailResponse);
    //var_dump($queryBankInExpDetailResponse);
} catch (Exception $e) {
    var_dump($e->getMessage());
}

