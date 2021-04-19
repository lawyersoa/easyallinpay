<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\IdCardCollectForHT;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$member = $app['member'];

$idCardCollectForHTRequest = new IdCardCollectForHT();
try {
    $idCardCollectForHTRequest
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setCertFront('http://www.easyallinpay.com/picture.png') //身份证正面(人像面) 可选
        ->setCertBack('http://www.easyallinpay.com/picture.png') //身份证背面(国徽面) 可选
        ->setCorpBusPic('http://www.easyallinpay.com/picture.png') //营业执照 可选
        ->setSummary('摘要') //摘要 可选
    ;
    $idCardCollectForHTResponse = $member->idCardCollectForHT($idCardCollectForHTRequest);
    var_dump($idCardCollectForHTResponse);
    //var_dump($idCardCollectForHTResponse);
} catch (Exception $e) {
    var_dump($e->getMessage());
}

