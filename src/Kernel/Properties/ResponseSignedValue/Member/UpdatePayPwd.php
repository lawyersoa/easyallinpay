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

class UpdatePayPwd extends ResponseSignedValue
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 设置支付密码结果
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
     * @return UpdatePayPwd
     */
    public function setBizUserId(string $bizUserId): UpdatePayPwd
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取修改支付密码结果
     *
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->result;
    }

    /**
     * 设置修改支付密码结果
     *
     * @param string $result 修改支付密码结果
     * @return UpdatePayPwd
     */
    public function setResult(string $result): UpdatePayPwd
    {
        $this->result = $result;
        return $this;
    }
}
