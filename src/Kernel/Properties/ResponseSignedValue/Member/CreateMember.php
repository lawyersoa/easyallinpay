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

class CreateMember extends ResponseSignedValue
{
    /**
     * @var string 通商云用户ID
     */
    private $userId;

    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * 获取通商云用户ID
     *
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * 设置通商云用户ID
     *
     * @param string $userId 通商云用户ID
     * @return CreateMember
     */
    public function setUserId(string $userId): CreateMember
    {
        $this->userId = $userId;
        return $this;
    }

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
     * @return CreateMember
     */
    public function setBizUserId(string $bizUserId): CreateMember
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }
}
