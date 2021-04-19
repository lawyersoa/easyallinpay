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

class QueryReserveFundBalance extends RequestReqParam
{
    /**
     * @var string 分配的系统编号
     */
    private $sysId;

    /**
     * @var string 资金托管系统
     */
    private $fundAcctSys;

    /**
     * 获取分配的系统编号
     *
     * @return string|null
     */
    public function getSysId(): ?string
    {
        return $this->sysId;
    }

    /**
     * 设置分配的系统编号
     *
     * @param string $sysId 分配的系统编号
     * @return QueryReserveFundBalance
     */
    public function setSysId(string $sysId): QueryReserveFundBalance
    {
        $this->sysId = $sysId;
        return $this;
    }

    /**
     * 获取资金托管系统
     *
     * @return string|null
     */
    public function getFundAcctSys(): ?string
    {
        return $this->fundAcctSys;
    }

    /**
     * 设置资金托管系统
     *
     * @param string $fundAcctSys 资金托管系统
     * @return QueryReserveFundBalance
     */
    public function setFundAcctSys(string $fundAcctSys): QueryReserveFundBalance
    {
        $this->fundAcctSys = $fundAcctSys;
        return $this;
    }
}
