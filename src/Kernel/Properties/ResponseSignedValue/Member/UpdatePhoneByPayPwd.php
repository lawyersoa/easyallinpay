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

class UpdatePhoneByPayPwd extends ResponseSignedValue
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
     * @var string 新手机号
     */
    private $newPhone;

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
     * @return UpdatePhoneByPayPwd
     */
    public function setBizUserId(string $bizUserId): UpdatePhoneByPayPwd
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取修改手机密码是否成功
     *
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->result;
    }

    /**
     * 设置修改手机密码是否成功
     *
     * @param string $result 修改手机密码是否成功
     * @return UpdatePhoneByPayPwd
     */
    public function setResult(string $result): UpdatePhoneByPayPwd
    {
        $this->result = $result;
        return $this;
    }

    /**
     * 获取新手机号
     *
     * @return string|null
     */
    public function getNewPhone(): ?string
    {
        return $this->newPhone;
    }

    /**
     * 设置新手机号
     *
     * @param string $newPhone 新手机号
     * @return UpdatePhoneByPayPwd
     */
    public function setNewPhone(string $newPhone): UpdatePhoneByPayPwd
    {
        $this->newPhone = $newPhone;
        return $this;
    }
}
