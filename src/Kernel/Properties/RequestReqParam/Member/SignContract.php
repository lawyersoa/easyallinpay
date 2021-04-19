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

class SignContract extends RequestReqParam
{
    /**
     * @var string 商户用户ID
     */
    private $bizUserId;

    /**
     * @var int 页面跳转类型
     */
    private $jumpPageType;

    /**
     * @var string 签约成功跳转页面地址
     */
    private $jumpUrl;

    /**
     * @var string 取消签约页面跳转地址
     */
    private $noContractUrl;

    /**
     * @var string 后台通知地址
     */
    private $backUrl;

    /**
     * @var int 访问终端类型
     */
    private $source;

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
     * @param string $biz_user_id 商户用户ID
     * @return SignContract
     */
    public function setBizUserId(string $biz_user_id): SignContract
    {
        $this->bizUserId = $biz_user_id;
        return $this;
    }

    /**
     * 获取跳转页面类型
     *
     * @return int|null
     */
    public function getJumpPageType(): ?int
    {
        return $this->jumpPageType;
    }

    /**
     * 设置跳转页面类型
     *
     * @param int $jumpPageType 跳转页面类型
     * @return SignContract
     * @throws InvalidArgumentException
     */
    public function setJumpPageType(int $jumpPageType): SignContract
    {
        if(!in_array($jumpPageType, array_keys(FieldMapping::$jumpPageTypeMapping))){
            throw new InvalidArgumentException('非法的跳转页面类型');
        }
        $this->jumpPageType = $jumpPageType;
        return $this;
    }

    /**
     * 获取签约成功跳转地址
     *
     * @return string|null
     */
    public function getJumpUrl(): ?string
    {
        return $this->jumpUrl;
    }

    /**
     * 设置签约成功跳转地址
     *
     * @param string $jump_url 签约成功跳转地址
     * @return SignContract
     */
    public function setJumpUrl(string $jump_url): SignContract
    {
        $this->jumpUrl = $jump_url;
        return $this;
    }

    /**
     * 获取取消签约跳转地址
     *
     * @return string|null
     */
    public function getNoContractUrl(): ?string
    {
        return $this->noContractUrl;
    }

    /**
     * 设置取消签约跳转地址
     *
     * @param string $no_contract_url 取消签约跳转地址
     * @return SignContract
     */
    public function setNoContractUrl(string $no_contract_url): SignContract
    {
        $this->noContractUrl = $no_contract_url;
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
     * @param string $back_url 后台通知地址
     * @return SignContract
     */
    public function setBackUrl(string $back_url): SignContract
    {
        $this->backUrl = $back_url;
        return $this;
    }

    /**
     * 获取访问终端类型
     *
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
     * @return SignContract
     * @throws InvalidArgumentException
     */
    public function setSource(int $source): SignContract
    {
        if(!in_array($source, array_keys(FieldMapping::$sourceMapping))){
            throw new InvalidArgumentException('非法的访问终端类型');
        }
        $this->source = $source;
        return $this;
    }
}
