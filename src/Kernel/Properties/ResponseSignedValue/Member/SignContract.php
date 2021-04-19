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

class SignContract extends ResponseSignedValue
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 会员电子协议编号
     */
    private $contractNo;

    /**
     * @var string 签约结果
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
     * @return SignContract
     */
    public function setBizUserId(string $bizUserId): SignContract
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取会员电子协议编号
     *
     * @return string|null
     */
    public function getContractNo(): ?string
    {
        return $this->contractNo;
    }

    /**
     * 设置会员电子协议编号
     *
     * @param string $contractNo 会员电子协议编号
     * @return SignContract
     */
    public function setContractNo(string $contractNo): SignContract
    {
        $this->contractNo = $contractNo;
        return $this;
    }

    /**
     * 获取签约结果
     *
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->result;
    }

    /**
     * 设置签约结果
     *
     * @param string $result 签约结果
     * @return SignContract
     */
    public function setResult(string $result): SignContract
    {
        $this->result = $result;
        return $this;
    }

}
