<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Properties\ResponseSignedValue\Member;

use EasyAllInPay\Kernel\Properties\ResponseSignedValue\ResponseSignedValue;

class GetBankCardBin extends ResponseSignedValue
{
    /**
     * @var array 卡bin信息
     */
    private $cardBinInfo;

    /**
     * 获取卡bin信息
     *
     * @return array|null
     */
    public function getCardBinInfo(): ?array
    {
        return $this->cardBinInfo;
    }

    /**
     * 设置卡bin信息
     *
     * @param array $cardBinInfo 卡bin信息
     * @return GetBankCardBin
     */
    public function setCardBinInfo(array $cardBinInfo): GetBankCardBin
    {
        $this->cardBinInfo = $cardBinInfo;
        return $this;
    }
}
