<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Properties;

class JumpPageResponse
{
    /**
     * @var string 跳转链接
     */
    private $jumpUrl;

    /**
     * 获取跳转链接
     *
     * @return string|null
     */
    public function getJumpUrl(): ?string
    {
        return $this->jumpUrl;
    }

    /**
     * 设置跳转链接
     *
     * @param string $jumpUrl 跳转链接
     * @return JumpPageResponse
     */
    public function setJumpUrl(string $jumpUrl): JumpPageResponse
    {
        $this->jumpUrl = $jumpUrl;
        return $this;
    }
}
