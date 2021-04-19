<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\VerifyBankCardChangeBindPhone;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$member = $app['member'];

$verifyBankCardChangeBindPhoneRequest = new VerifyBankCardChangeBindPhone();
try {
    $verifyBankCardChangeBindPhoneRequest
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setTranceNum('123456') //流水号 可选
        ->setPhone('13200000000') //银行预留手机 必填
        ->setValidate('0321') //有效期 可选
        ->setCvv2('123') //CVV2 可选
        ->setVerificationCode('1234') //短信验证码 必填
    ;
    $verifyBankCardChangeBindPhoneResponse = $member->verifyBankCardChangeBindPhone($verifyBankCardChangeBindPhoneRequest);
    var_dump($verifyBankCardChangeBindPhoneResponse);
    //var_dump($verifyBankCardChangeBindPhoneResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

