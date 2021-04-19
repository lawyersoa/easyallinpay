<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Properties\RequestReqParam\Order;

use EasyAllInPay\Kernel\Constant\FieldMapping;
use EasyAllInPay\Kernel\Exceptions\InvalidArgumentException;
use EasyAllInPay\Kernel\Properties\RequestReqParam\RequestReqParam;

class CloseOrder extends RequestReqParam
{
    /**
     * @var string 商户订单编号
     */
    private $bizOrderNo;

    /**
     * 获取商户订单编号
     *
     * @return string|null
     */
    public function getBizOrderNo(): ?string
    {
        return $this->bizOrderNo;
    }

    /**
     * 设置商户订单编号
     *
     * @param string $bizOrderNo 商户订单编号
     * @return CloseOrder
     */
    public function setBizOrderNo(string $bizOrderNo): CloseOrder
    {
        $this->bizOrderNo = $bizOrderNo;
        return $this;
    }
}
