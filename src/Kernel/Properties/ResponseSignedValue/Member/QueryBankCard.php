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

class QueryBankCard extends ResponseSignedValue
{
    /**
     * @var array 已绑定银行卡信息列表
     */
    private $bindCardList;

    /**
     * 获取已绑定银行卡信息列表
     *
     * @return array|null
     */
    public function getBindCardList(): ?array
    {
        return $this->bindCardList;
    }

    /**
     * 设置已绑定银行卡信息列表
     *
     * @param array $bindCardList 已绑定银行卡信息列表
     * @return QueryBankCard
     */
    public function setBindCardList(array $bindCardList): QueryBankCard
    {
        $this->bindCardList = $bindCardList;
        return $this;
    }
}
