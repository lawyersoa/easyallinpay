<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Order\EntryGoods;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$order = $app['order'];

$entryGoodsRequest = new EntryGoods();
try {
    $entryGoodsRequest
        ->setBizUserId('3fa11096-9b8b-11eb-866b-0800274df54a') //商户用户ID 必填
        ->setGoodsType() //商品类型 必填
        ->setBizGoodsNo('21041714040409877976') //商户商品编号 必填
        ->setGoodsName('商品名称') //商品名称 必填
        ->setGoodsDetail('商品详细信息') //商品详细信息 可选
        ->setGoodsParams([]) //商品参数 可选
        ->setShowUrl('http://www.easyallinpay.com') //商品详情URL 可选
    ;
    $entryGoodsResponse = $order->entryGoods($entryGoodsRequest);
    var_dump($entryGoodsResponse);
    //var_dump($entryGoodsResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

