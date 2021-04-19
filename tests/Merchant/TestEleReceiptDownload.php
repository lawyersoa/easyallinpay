<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Merchant\ElectronicReceiptDownload;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$merchant = $app['merchant'];

$electronicReceiptDownloadRequest = new ElectronicReceiptDownload();
try {
    $electronicReceiptDownloadRequest
        ->setBizOrderNo('21041715265855235598') //商户订单号 必填
    ;
    $electronicReceiptDownloadResponse = $merchant->electronicReceiptDownloadRequest($electronicReceiptDownloadRequest);
    var_dump($electronicReceiptDownloadResponse);
    //var_dump($electronicReceiptDownloadResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

