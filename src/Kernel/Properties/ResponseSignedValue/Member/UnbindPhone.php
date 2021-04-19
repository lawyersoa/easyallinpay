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

class UnbindPhone extends ResponseSignedValue
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 手机号码
     */
    private $phone;

    /**
     * @var string 支付账户用户标识绑定结果
     */
    private $result;

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
     * @return UnbindPhone
     */
    public function setBizUserId(string $bizUserId): UnbindPhone
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取手机号码
     *
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * 设置手机号码
     *
     * @param string $phone 手机号码
     * @return UnbindPhone
     */
    public function setPhone(string $phone): UnbindPhone
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * 获取解绑结果
     *
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->result;
    }

    /**
     * 设置解绑结果
     *
     * @param string $result 解绑结果
     * @return UnbindPhone
     */
    public function setResult(string $result): UnbindPhone
    {
        $this->result = $result;
        return $this;
    }
}
