<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Properties\ResponseSignedValue\Merchant;

use EasyAllInPay\Kernel\Properties\ResponseSignedValue\ResponseSignedValue;

class GetCheckAccountFile extends ResponseSignedValue
{
    /**
     * @var string 通商云对账文件地址
     */
    private $url;

    /**
     * 获取通商云对账文件地址
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 设置通商云对账文件地址
     *
     * @param string $url 通商云对账文件地址
     * @return GetCheckAccountFile
     */
    public function setUrl(string $url): GetCheckAccountFile
    {
        $this->url = $url;
        return $this;
    }
}
