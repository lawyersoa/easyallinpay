<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\IdCardCollect;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$member = $app['member'];

$idCardCollectRequest = new IdCardCollect();
try {
    $idCardCollectRequest
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setOcrComparisonResultBackUrl('http://www.easyallinpay.com') //影印件核对结果 异步通知地址 可选
        ->setPicType(FieldMapping::ID_CARD_PIC_TYPE_IDENTITY_CARD_FRONT) //影印件类型 必填
        ->setPicture('http://www.easyallinpay.com/picture.png'); //影印件图片 必填
    $idCardCollectResponse = $member->idCardCollect($idCardCollectRequest);
    var_dump($idCardCollectResponse);
    //var_dump($idCardCollectResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

