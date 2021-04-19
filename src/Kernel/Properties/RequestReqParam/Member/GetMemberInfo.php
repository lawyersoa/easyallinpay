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

class GetMemberInfo extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var int 开会机构类型
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
     * @return GetMemberInfo
     */
    public function setBizUserId(string $bizUserId): GetMemberInfo
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取开户机构类型
     *
     * @return int|null
     */
    public function getAcctOrgType(): ?int
    {
        return $this->acctOrgType;
    }

    /**
     * 设置开户机构类型
     *
     * @param int $acctOrgType 开户机构类型
     * @return GetMemberInfo
     * @throws InvalidArgumentException
     */
    public function setAcctOrgType(int $acctOrgType): GetMemberInfo
    {
        if(!in_array($acctOrgType, array_keys(FieldMapping::$acctOrgTypeMapping))){
            throw new InvalidArgumentException('非法的开户机构类型');
        }
        $this->acctOrgType = $acctOrgType;
        return $this;
    }
}
