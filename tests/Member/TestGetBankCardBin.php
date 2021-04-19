<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\GetBankCardBin;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$member = $app['member'];

$getBankCardBinRequest = new GetBankCardBin();
try {
    $getBankCardBinRequest
        ->setCardNo('123456') //银行卡号 必填
    ;
    $getBankCardBinResponse = $member->getBankCardBin($getBankCardBinRequest);
    var_dump($getBankCardBinResponse);
    //var_dump($getBankCardBinResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

