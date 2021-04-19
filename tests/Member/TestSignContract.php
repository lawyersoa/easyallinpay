<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\SignContract;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$member = $app['member'];

$signContractRequest = new SignContract();
try {
    $signContractRequest
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setJumpPageType(FieldMapping::JUMP_PAGE_TYPE_H5) //跳转页面类型 可选
        ->setJumpUrl('http://www.easyallinpay.com') //签订成功跳转页面地址 可选
        ->setNoContractUrl('http://www.easyallinpay.com') //取消签约跳转页面地址 可选
        ->setBackUrl('http://www.easyallinpay.com') //后台通知地址 必填
        ->setSource(FieldMapping::SOURCE_PC) //访问终端类型 必填
    ;
    $signContractResponse = $member->signContract($signContractRequest);
    var_dump($signContractResponse);
    //var_dump($signContractResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

