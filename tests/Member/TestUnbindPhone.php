<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\UnbindPhone;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$member = $app['member'];

$unbindPhoneRequest = new UnbindPhone();
try {
    $unbindPhoneRequest
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setPhone('13200000000') //手机号码 必填
        ->setVerificationCode('1234'); //验证码 必填
    ;
    $unbindPhoneResponse = $member->unbindPhone($unbindPhoneRequest);
    var_dump($unbindPhoneResponse);
    //var_dump($unbindPhoneResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

