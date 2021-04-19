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

class IdCardCollectForHT extends ResponseSignedValue
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var int 身份证识别结果
     */
    private $idCodeResult;

    /**
     * @var string 营业执照识别结果
     */
    private $licCodeResult;

    /**
     * @var string 识别信息说明
     */
    private $resultMsg;

    /**
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
     * @return IdCardCollectForHT
     */
    public function setBizUserId(string $bizUserId): IdCardCollectForHT
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取身份证识别结果
     *
     * @return int
     */
    public function getIdCodeResult(): int
    {
        return $this->idCodeResult;
    }

    /**
     * 设置身份证识别结果
     *
     * @param int $idCodeResult 身份证识别结果
     * @return IdCardCollectForHT
     */
    public function setIdCodeResult(int $idCodeResult): IdCardCollectForHT
    {
        $this->idCodeResult = $idCodeResult;
        return $this;
    }

    /**
     * 获取营业执照识别结果
     *
     * @return string|null
     */
    public function getLicCodeResult(): ?string
    {
        return $this->licCodeResult;
    }

    /**
     * 设置营业执照识别结果
     *
     * @param string $licCodeResult 营业执照识别结果
     * @return IdCardCollectForHT
     */
    public function setLicCodeResult(string $licCodeResult): IdCardCollectForHT
    {
        $this->licCodeResult = $licCodeResult;
        return $this;
    }

    /**
     * 获取识别信息说明
     *
     * @return string|null
     */
    public function getResultMsg(): ?string
    {
        return $this->resultMsg;
    }

    /**
     * 设置识别信息说明
     *
     * @param string $resultMsg 识别信息说明
     * @return IdCardCollectForHT
     */
    public function setResultMsg(string $resultMsg): IdCardCollectForHT
    {
        $this->resultMsg = $resultMsg;
        return $this;
    }
}
