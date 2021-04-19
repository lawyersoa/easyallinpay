<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Order\ResendPaySms;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$order = $app['order'];

$resendPaySmsRequest = new ResendPaySms();
try {
    $resendPaySmsRequest
        ->setBizOrderNo('21041714040409877976') //商户订单号 必填
    ;
    $resendPaySmsResponse = $order->resendPaySms($resendPaySmsRequest);
    var_dump($resendPaySmsResponse);
} catch (Exception $e) {
    var_dump($e->getMessage());
}

