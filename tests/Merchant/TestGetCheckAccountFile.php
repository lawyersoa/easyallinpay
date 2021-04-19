<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Merchant\GetCheckAccountFile;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$merchant = $app['merchant'];

$getCheckAccountFileRequest = new GetCheckAccountFile();
try {
    $getCheckAccountFileRequest
        ->setDate('20210101') //对账文件日期 必填
        ->setFileType() //文件类型 可选
    ;
    $getCheckAccountFileResponse = $merchant->getCheckAccountFile($getCheckAccountFileRequest);
    var_dump($getCheckAccountFileResponse);
    //var_dump($getCheckAccountFileResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

