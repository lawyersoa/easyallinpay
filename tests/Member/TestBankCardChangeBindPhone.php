<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\BankCardChangeBindPhone;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$member = $app['member'];

$bankCardChangeBindPhoneRequest = new BankCardChangeBindPhone();
try {
    $bankCardChangeBindPhoneRequest
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setCardNo('123456') //银行卡号 必填
        ->setPhone('13200000000') //银行预留手机 可选
        ->setName('孙悟空') //姓名 必填
        ->setCardCheck(FieldMapping::CARD_CHECK_TLT_ACCOUNT_REAL_VERIFIED_FOUR) //绑卡方式 必填
        ->setIdentityType(FieldMapping::IDENTITY_TYPE_ID) //证件类型 必填
        ->setIdentityNo('370983190010100551') //证件号码 必填
        ->setValidate('0321') //有效期 可选
        ->setCvv2('123') //CVV2 可选
    ;
    $bankCardChangeBindPhoneResponse = $member->bankCardChangeBindPhone($bankCardChangeBindPhoneRequest);
    var_dump($bankCardChangeBindPhoneResponse);
    //var_dump($bankCardChangeBindPhoneResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

