<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\WXSubMerchantService;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$member = $app['member'];

$WXSubMerchantServiceRequest = new WXSubMerchantService();
try {
    $WXSubMerchantServiceRequest
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setOperationType(FieldMapping::OPERATION_TYPE_SET) //操作 必填
        ->setMerchantId('123456') //微信服务商商户号 可选
        ->setAppId('123456') //微信服务商APP_ID 可选
        ->setSubMerchantId('123456') //微信子商户号 可选
        ->setSubAppId('123456') //微信子商户APP_ID 可选
    ;
    $WXSubMerchantServiceResponse = $member->WXSubMerchantService($WXSubMerchantServiceRequest);
    var_dump($WXSubMerchantServiceResponse);
    //var_dump($WXSubMerchantServiceResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

