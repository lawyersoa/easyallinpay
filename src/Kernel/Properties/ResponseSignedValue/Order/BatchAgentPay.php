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

class BatchAgentPay extends ResponseSignedValue
{
    /**
     * @var string 商户批次号
     */
    private $bizBatchNo;

    /**
     * 获取商户批次号
     *
     * @return string|null
     */
    public function getBizBatchNo(): ?string
    {
        return $this->bizBatchNo;
    }

    /**
     * 设置商户批次号
     *
     * @param string $bizBatchNo 商户批次号
     * @return BatchAgentPay
     */
    public function setBizBatchNo(string $bizBatchNo): BatchAgentPay
    {
        $this->bizBatchNo = $bizBatchNo;
        return $this;
    }
}
