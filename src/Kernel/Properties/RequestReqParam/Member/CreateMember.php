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

class CreateMember extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var int 会员类型
     */
    private $memberType;

    /**
     * @var int 访问终端类型
     */
    private $source;

    /**
     * @var array 扩展参数
     */
    private $extendParam;

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
     * @return CreateMember
     */
    public function setBizUserId(string $bizUserId): CreateMember
    {
        $this->bizUserId = $bizUserId;
        return $this;
    }

    /**
     * 获取用户类型
     *
     * @return int|null
     */
    public function getMemberType(): ?int
    {
        return $this->memberType;
    }

    /**
     * 设置会员类型
     *
     * @param int $memberType 会员类型
     * @return CreateMember
     * @throws InvalidArgumentException
     */
    public function setMemberType(int $memberType): CreateMember
    {
        if(!in_array($memberType, array_keys(FieldMapping::$memberTypeMapping))){
            throw new InvalidArgumentException('非法的会员类型');
        }
        $this->memberType = $memberType;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSource(): ?int
    {
        return $this->source;
    }

    /**
     * 设置访问终端类型
     *
     * @param int $source 访问终端类型
     * @return CreateMember
     * @throws InvalidArgumentException
     */
    public function setSource(int $source): CreateMember
    {
        if(!in_array($source, array_keys(FieldMapping::$sourceMapping))){
            throw new InvalidArgumentException('非法的访问终端类型');
        }
        $this->source = $source;
        return $this;
    }

    /**
     * 获取扩展参数
     *
     * @return array
     */
    public function getExtendParam(): array
    {
        return $this->extendParam;
    }

    /**
     * 设置扩展参数
     *
     * @param array $extendParam 扩展参数
     * @return CreateMember
     */
    public function setExtendParam(array $extendParam): CreateMember
    {
        $this->extendParam = $extendParam;
        return $this;
    }
}
