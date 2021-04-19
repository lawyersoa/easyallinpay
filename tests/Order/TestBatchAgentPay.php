<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Order\BatchAgentPay;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$order = $app['order'];

$batchAgentPayProperty = new BatchAgentPay();
try {
    $batchAgentPayProperty
        ->setBizBatchNo('') //商户批次号 必填
        ->setBatchPayList([]) //批量代付列表 必填
        ->setGoodsType() //商品类型 可选
        ->setBizGoodsNo('') //商户商品编号 可选
        ->setTradeCode('') //业务码 可选
    ;
    $batchAgentPayResponse = $order->batchAgentPay($batchAgentPayProperty);
    var_dump($batchAgentPayResponse);
    //var_dump($batchAgentPayResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

