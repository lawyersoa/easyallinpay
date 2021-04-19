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

class GetSubAcctNoInfoForHT extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var string 会员子账号
     */
    private $subAcctNo;

    /**
     * @var string 成功跳转页面地址
     */
    private $jumpUrl;

    /**
     * @var string 后台通知地址
     */
    private $backUrl;

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
     * @return GetSubAcctNoInfoForHT
     */
    public function setBizUserId(string $bizUserId): GetSubAcctNoInfoForHT
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取会员子账号
     *
     * @return string|null
     */
    public function getSubAcctNo(): ?string
    {
        return $this->subAcctNo;
    }

    /**
     * 设置会员子账号
     *
     * @param string $subAcctNo 会员子账号
     * @return GetSubAcctNoInfoForHT
     */
    public function setSubAcctNo(string $subAcctNo): GetSubAcctNoInfoForHT
    {
        $this->subAcctNo = $subAcctNo;
        return $this;
    }

    /**
     * 获取成功跳转页面地址
     *
     * @return string|null
     */
    public function getJumpUrl(): ?string
    {
        return $this->jumpUrl;
    }

    /**
     * 设置成功跳转页面地址
     *
     * @param string $jumpUrl 成功跳转页面地址
     * @return GetSubAcctNoInfoForHT
     */
    public function setJumpUrl(string $jumpUrl): GetSubAcctNoInfoForHT
    {
        $this->jumpUrl = $jumpUrl;
        return $this;
    }

    /**
     * 获取后台通知地址
     *
     * @return string|null
     */
    public function getBackUrl(): ?string
    {
        return $this->backUrl;
    }

    /**
     * 设置后台通知地址
     *
     * @param string $backUrl 后台通知地址
     * @return GetSubAcctNoInfoForHT
     */
    public function setBackUrl(string $backUrl): GetSubAcctNoInfoForHT
    {
        $this->backUrl = $backUrl;
        return $this;
    }
}
