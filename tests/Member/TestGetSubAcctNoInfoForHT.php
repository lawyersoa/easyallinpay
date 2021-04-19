<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\GetSubAcctNoInfoForHT;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$member = $app['member'];

$getSubAcctNoInfoForHTRequest = new GetSubAcctNoInfoForHT();
try {
    $getSubAcctNoInfoForHTRequest
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setSubAcctNo('123456') //会员子账号 必填
        ->setJumpUrl('http://www.easyallinpay.com') //成功跳转页面地址 可选
        ->setBackUrl('http://www.easyallinpay.com') //后台通知地址 必填
    ;
    $getSubAcctNoInfoForHTResponse = $member->getSubAcctNoInfoForHT($getSubAcctNoInfoForHTRequest);
    var_dump($getSubAcctNoInfoForHTResponse);
} catch (Exception $e) {
    var_dump($e->getMessage());
}

