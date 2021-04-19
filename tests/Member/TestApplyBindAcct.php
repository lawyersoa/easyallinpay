<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\ApplyBindAcct;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$member = $app['member'];

$applyBindAcctRequest = new ApplyBindAcct();
try {
    $applyBindAcctRequest
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setOperationType(FieldMapping::OPERATION_TYPE_SET) //操作 必填
        ->setAcctType(FieldMapping::ACCT_TYPE_WECHAT_MINI_PROGRAM) //支付账户类型 必填
        ->setAcct('123456') //支付账户用户标识 必填
    ;
    $applyBindAcctResponse = $member->applybindAcct($applyBindAcctRequest);
    var_dump($applyBindAcctResponse);
    //var_dump($applyBindAcctResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

