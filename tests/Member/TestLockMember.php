<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\LockMember;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$member = $app['member'];

$lockMemberRequest = new LockMember();
try {
    $lockMemberRequest
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
    ;
    $lockMemberResponse = $member->lockMember($lockMemberRequest);
    var_dump($lockMemberResponse);
    //var_dump($lockMemberResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

