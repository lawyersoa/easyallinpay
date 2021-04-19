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

class ResponseBasic
{
    /**
     * @var string
     */
    private $status;

    /**
     * @var ResponseSignedValue
     */
    private $signedValue;

    /**
     * @var string
     */
    private $sign;

    /**
     * @var string
     */
    private $errorCode;

    /**
     * @var string
     */
    private $message;

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return ResponseSignedValue
     */
    public function getSignedValue(): ResponseSignedValue
    {
        return $this->signedValue;
    }

    /**
     * @return string
     */
    public function getSign(): string
    {
        return $this->sign;
    }

    /**
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $status
     * @return ResponseBasic
     */
    public function setStatus(string $status): ResponseBasic
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param ResponseSignedValue $signedValue
     * @return ResponseBasic
     */
    public function setSignedValue(ResponseSignedValue $signedValue): ResponseBasic
    {
        $this->signedValue = $signedValue;
        return $this;
    }

    /**
     * @param string $sign
     * @return ResponseBasic
     */
    public function setSign(string $sign): ResponseBasic
    {
        $this->sign = $sign;
        return $this;
    }

    /**
     * @param string $errorCode
     * @return ResponseBasic
     */
    public function setErrorCode(string $errorCode): ResponseBasic
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * @param string $message
     * @return ResponseBasic
     */
    public function setMessage(string $message): ResponseBasic
    {
        $this->message = $message;
        return $this;
    }
}
