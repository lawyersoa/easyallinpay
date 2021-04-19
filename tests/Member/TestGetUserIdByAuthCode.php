<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\GetUserIdByAuthCode;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$member = $app['member'];

$getUserIdByAuthCodeRequest = new GetUserIdByAuthCode();
try {
    $getUserIdByAuthCodeRequest
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setVspCusId('123456') //收银宝子商户号 可选(收银宝集团模式必传)
        ->setAuthCode('123456') //授权码(付款码) 必填
        ->setAuthType(FieldMapping::AUTH_CODE_TYPE_WECHAT) //授权码类型 必填
        ->setSubAppId('123456') //微信支付APP_ID 可选
    ;
    $getUserIdByAuthCodeResponse = $member->getUserIdByAuthCode($getUserIdByAuthCodeRequest);
    var_dump($getUserIdByAuthCodeResponse);
    //var_dump($getUserIdByAuthCodeResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

