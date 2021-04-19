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

class ElectronicReceiptDownload extends ResponseSignedValue
{
    /**
     * @var string 电子回单地址
     */
    private $url;

    /**
     * 获取电子回单地址
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 设置电子回单地址
     *
     * @param string $url 电子回单地址
     * @return ElectronicReceiptDownload
     */
    public function setUrl(string $url): ElectronicReceiptDownload
    {
        $this->url = $url;
        return $this;
    }
}
