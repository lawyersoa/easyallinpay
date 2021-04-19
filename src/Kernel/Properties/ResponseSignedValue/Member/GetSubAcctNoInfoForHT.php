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

class GetSubAcctNoInfoForHT extends ResponseSignedValue
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
     * @var string 华通合规信息维护地址
     */
    private $redirectUrl;

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
     * 获取华通合规信息维护地址
     *
     * @return string|null
     */
    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }

    /**
     * 设置华通合规信息维护地址
     *
     * @param string $redirectUrl 华通合规信息维护地址
     * @return GetSubAcctNoInfoForHT
     */
    public function setRedirectUrl(string $redirectUrl): GetSubAcctNoInfoForHT
    {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }
}
