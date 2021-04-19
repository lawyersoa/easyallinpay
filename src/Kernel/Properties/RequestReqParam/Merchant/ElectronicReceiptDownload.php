<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Properties\RequestReqParam\Merchant;

use EasyAllInPay\Kernel\Constant\FieldMapping;
use EasyAllInPay\Kernel\Exceptions\InvalidArgumentException;
use EasyAllInPay\Kernel\Properties\RequestReqParam\RequestReqParam;

class ElectronicReceiptDownload extends RequestReqParam
{
    /**
     * @var string 商户订单编号
     */
    private $bizOrderNo;

    /**
     * 获取商户订单编号
     *
     * @return mixed
     */
    public function getBizOrderNo()
    {
        return $this->bizOrderNo;
    }

    /**
     * 设置商户订单编号
     *
     * @param mixed $bizOrderNo 商户订单编号
     * @return ElectronicReceiptDownload
     */
    public function setBizOrderNo($bizOrderNo): ElectronicReceiptDownload
    {
        $this->bizOrderNo = $bizOrderNo;
        return $this;
    }
}
