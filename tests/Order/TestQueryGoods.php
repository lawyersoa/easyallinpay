<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Order\QueryGoods;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$order = $app['order'];

$queryGoodsRequest = new QueryGoods();
try {
    $queryGoodsRequest
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setBizGoodsNo('21041714040409877976') //商户商品编号 必填
    ;
    $queryGoodsResponse = $order->queryGoods($queryGoodsRequest);
    var_dump($queryGoodsResponse);
    //var_dump($queryGoodsResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

