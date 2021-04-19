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

class GetPayeeFundsInTransitDetail extends ResponseSignedValue
{
    /**
     * @var array 收款人在途资金明细
     */
    private $payeeFundsInTransitList;

    /**
     * 获取收款人在途资金明细
     *
     * @return array|null
     */
    public function getPayeeFundsInTransitList(): ?array
    {
        return $this->payeeFundsInTransitList;
    }

    /**
     * 设置收款人在途资金明细
     *
     * @param array $payeeFundsInTransitList 收款人在途资金明细
     * @return GetPayeeFundsInTransitDetail
     */
    public function setPayeeFundsInTransitList(array $payeeFundsInTransitList): GetPayeeFundsInTransitDetail
    {
        $this->payeeFundsInTransitList = $payeeFundsInTransitList;
        return $this;
    }
}
