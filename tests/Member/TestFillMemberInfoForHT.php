<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\FillMemberInfoForHT;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$member = $app['member'];

$fillMemberInfoForHTRequest = new FillMemberInfoForHT();
try {
    $fillMemberInfoForHTRequest
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setIdentityBeginDate('2018-12-01') //证件有效开始日期 可选
        ->setIdentityEndDate('2028-12-01') //证件有效截止日期 可选
        ->setAddress('山东省济南市历城区') //地址 可选
        ->setProfessionNo(FieldMapping::PROFESSION_NO_OTHER)  //职业 可选
        ->setTelephone('13200000000') //联系电话 可选
    ;
    $fillMemberInfoForHTResponse = $member->fillMemberInfoForHT($fillMemberInfoForHTRequest);
    var_dump($fillMemberInfoForHTResponse);
    //var_dump($fillMemberInfoForHTResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

