<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\VspTermIdService;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$member = $app['member'];

$vspTermIdServiceRequest = new VspTermIdService();
try {
    $vspTermIdServiceRequest
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setOperationType(FieldMapping::OPERATION_TYPE_SET) //操作 必填
        ->setVspMerchantId('123456') //收银宝集团商户号 可选
        ->setVspCusId('123456') //收银宝商户号 必填
        ->setAppId('123456') //收银宝分配的APP_ID 必填
        ->setVspTermId('123456') //收银宝终端ID 可选
    ;
    $vspTermIdServiceResponse = $member->vspTermIdService($vspTermIdServiceRequest);
    var_dump($vspTermIdServiceResponse);
    //var_dump($vspTermIdServiceResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

