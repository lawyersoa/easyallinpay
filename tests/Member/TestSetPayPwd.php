<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\SetPayPwd;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$member = $app['member'];

$setPayPwdRequest = new SetPayPwd();
try {
    $setPayPwdRequest
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setJumpPageType(FieldMapping::JUMP_PAGE_TYPE_H5) //跳转页面类型 可选
        ->setPhone('13200000000') //手机号码 可选
        ->setName('孙悟空') //姓名 必填
        ->setIdentityType(FieldMapping::IDENTITY_TYPE_ID) //证件类型 必填
        ->setIdentityNo('370983190010100551') //证件号码 必填
        ->setJumpUrl('http://www.easyallinpay.com') //成功跳转页面地址 可选
        ->setErrorJumpUrl('http://www.easyallinpay.com') //失败跳转页面地址 可选
        ->setBackUrl('http://www.easyallinpay.com') //后台通知地址 必填
    ;
    $setPayPwdResponse = $member->setPayPwd($setPayPwdRequest);
    var_dump($setPayPwdResponse);
} catch (Exception $e) {
    var_dump($e->getMessage());
}

