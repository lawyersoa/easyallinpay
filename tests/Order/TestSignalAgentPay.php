<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use EasyAllInPay\Kernel\Properties\RequestReqParam\Order\SignalAgentPay;
use EasyAllInPay\Kernel\Constant\FieldMapping;

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../config.example.php';

$app = new EasyAllInPay\Application($config);
$order = $app['order'];

$signalAgentPayProperty = new SignalAgentPay();
try {
    $signalAgentPayProperty
        ->setBizOrderNo('') //商户订单号 必填
        ->setCollectPayList([]) //源托管代收订单付款信息 必填
        ->setBizUserId('') //商户用户ID 必填
        ->setAccountSetNo('') //账户集编号 必填
        ->setBackUrl('http://www.easyallinpay.com') //后台通知地址 可选
        ->setAmount(2) //订单金额 必填
        ->setFee(1) //手续费 必填
        ->setSplitRuleList([]) //分账规则 可选
        ->setGoodsType() //商品类型 可选
        ->setBizGoodsNo('') //商户商品编号 可选
        ->setTradeCode('') //业务码 可选
        ->setSummary('摘要信息') //摘要信息 可选
        ->setExtendInfo('扩展信息') //扩展信息 可选
    ;
    $signalAgentPayResponse = $order->signalAgentPay($signalAgentPayProperty);
    var_dump($signalAgentPayResponse);
    //var_dump($signalAgentPayResponse->toArray());
} catch (Exception $e) {
    var_dump($e->getMessage());
}

