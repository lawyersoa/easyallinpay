<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Properties\RequestReqParam\Member;

use EasyAllInPay\Kernel\Constant\FieldMapping;
use EasyAllInPay\Kernel\Exceptions\InvalidArgumentException;
use EasyAllInPay\Kernel\Properties\RequestReqParam\RequestReqParam;

class GetBankCardBin extends RequestReqParam
{
    /**
     * @var string 银行卡号
     */
    private $cardNo;

    /**
     * 获取银行卡号
     *
     * @return string|null
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }

    /**
     * 设置银行卡号
     *
     * @param string $cardNo 银行卡号
     * @return GetBankCardBin
     */
    public function setCardNo(string $cardNo): GetBankCardBin
    {
        $this->cardNo = $cardNo;
        return $this;
    }
}
