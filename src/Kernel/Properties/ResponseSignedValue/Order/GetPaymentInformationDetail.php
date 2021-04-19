<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Properties\ResponseSignedValue\Order;

use EasyAllInPay\Kernel\Properties\ResponseSignedValue\ResponseSignedValue;

class GetPaymentInformationDetail extends ResponseSignedValue
{
    /**
     * @var array 付款方资金代付明细
     */
    private $paymentInformationList;

    /**
     * 获取付款方资金代付明细
     *
     * @return array|null
     */
    public function getPaymentInformationList(): ?array
    {
        return $this->paymentInformationList;
    }

    /**
     * 设置付款方资金代付明细
     *
     * @param array $paymentInformationList 付款方资金代付明细
     * @return GetPaymentInformationDetail
     */
    public function setPaymentInformationList(array $paymentInformationList): GetPaymentInformationDetail
    {
        $this->paymentInformationList = $paymentInformationList;
        return $this;
    }
}
