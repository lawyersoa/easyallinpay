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

class QueryIdCardCollectResult extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 开户机构类型
     */
    private $acctOrgType;

    /**
     * 获取商户用户ID
     *
     * @return string|null
     */
    public function getBizUserId(): ?string
    {
        return $this->bizUserId;
    }

    /**
     * 设置商户用户ID
     *
     * @param string $bizUserId 商户用户ID
     * @return QueryIdCardCollectResult
     */
    public function setBizUserId(string $bizUserId): QueryIdCardCollectResult
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取开户机构类型
     *
     * @return string|null
     */
    public function getAcctOrgType(): ?string
    {
        return $this->acctOrgType;
    }

    /**
     * 设置开户机构类型
     *
     * @param string $acctOrgType 开户机构类型
     * @return QueryIdCardCollectResult
     */
    public function setAcctOrgType(string $acctOrgType): QueryIdCardCollectResult
    {
        $this->acctOrgType = $acctOrgType;
        return $this;
    }
}
