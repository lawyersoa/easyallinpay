<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\CreateMember;
use EasyAllInPay\Kernel\Constant\FieldMapping;
use Ramsey\Uuid\Uuid;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$member = $app['member'];

$createMemberRequest = new CreateMember();
try {
    $createMemberRequest
        ->setBizUserId(Uuid::uuid1()) //商户用户ID 必填
        ->setMemberType(FieldMapping::MEMBER_TYPE_PERSONAL) //会员类型 必填
        ->setSource(FieldMapping::SOURCE_PC) //获取访问终端类型 必填
        ->setExtendParam([
            'projectUserId' => '123456'
        ]) //扩展参数 可选
    ;
    $createMemberResponse = $member->createMember($createMemberRequest);
    var_dump($createMemberResponse);
    //var_dump($createMemberResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

