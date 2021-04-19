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

class IdCardCollect extends ResponseSignedValue
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var int 上传结果
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
     * @return IdCardCollect
     */
    public function setBizUserId(string $bizUserId): IdCardCollect
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取上传结果
     *
     * @return int
     */
    public function getResult(): int
    {
        return $this->result;
    }

    /**
     * 设置上传结果
     *
     * @param int $result 上传结果
     * @return IdCardCollect
     */
    public function setResult(int $result): IdCardCollect
    {
        $this->result = $result;
        return $this;
    }
}
