<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\CreateBankSubAcctNo;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$member = $app['member'];

$createBankSubAcctNoRequest = new CreateBankSubAcctNo();
try {
    $createBankSubAcctNoRequest
        ->setAccountSetNo('123456') //账户集编号 必填
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setAcctOrgType(FieldMapping::ACCT_ORG_TYPE_TL) //开户机构类型 必填
    ;
    $createBankSubAcctNoResponse = $member->createBankSubAcctNo($createBankSubAcctNoRequest);
    var_dump($createBankSubAcctNoResponse);
    //var_dump($createBankSubAcctNoResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

