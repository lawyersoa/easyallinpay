<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Properties\RequestReqParam\Merchant;

use EasyAllInPay\Kernel\Constant\FieldMapping;
use EasyAllInPay\Kernel\Exceptions\InvalidArgumentException;
use EasyAllInPay\Kernel\Properties\RequestReqParam\RequestReqParam;

class GetCheckAccountFile extends RequestReqParam
{
    /**
     * @var string 对账文件日期
     */
    private $date;

    /**
     * @var int 文件类型
     */
    private $fileType;

    /**
     * 获取对账文件日期
     *
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * 设置对账文件日期
     *
     * @param string $date 对账文件日期
     * @return GetCheckAccountFile
     */
    public function setDate(string $date): GetCheckAccountFile
    {
        $this->date = $date;
        return $this;
    }

    /**
     * 获取文件类型
     *
     * @return int|null
     */
    public function getFileType(): ?int
    {
        return $this->fileType;
    }

    /**
     * 设置文件类型
     *
     * @param int $fileType 文件类型
     * @return GetCheckAccountFile
     */
    public function setFileType(int $fileType): GetCheckAccountFile
    {
        $this->fileType = $fileType;
        return $this;
    }
}
