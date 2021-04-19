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

class VspTermIdService extends ResponseSignedValue
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 绑定、查询收银宝终端号结果
     */
    private $result;

    /**
     * @var array 已绑定收银宝终端号列表
     */
    private $vspTermIdList;

    /**
     * @return string|null
     */
    public function getBizUserId(): ?string
    {
        return $this->bizUserId;
    }

    /**
     * @param string $bizUserId
     * @return VspTermIdService
     */
    public function setBizUserId(string $bizUserId): VspTermIdService
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取绑定、查询收银宝终端号结果
     *
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->result;
    }

    /**
     * 设置绑定、查询收银宝终端号结果
     *
     * @param string $result 绑定、查询收银宝终端号结果
     * @return VspTermIdService
     */
    public function setResult(string $result): VspTermIdService
    {
        $this->result = $result;
        return $this;
    }

    /**
     * 获取已绑定收银宝终端号列表
     *
     * @return array|null
     */
    public function getVspTermIdList(): ?array
    {
        return $this->vspTermIdList;
    }

    /**
     * 设置已绑定收银宝终端号列表
     *
     * @param array $vspTermIdList 已绑定收银宝终端号列表
     * @return VspTermIdService
     */
    public function setVspTermIdList(array $vspTermIdList): VspTermIdService
    {
        $this->vspTermIdList = $vspTermIdList;
        return $this;
    }
}
