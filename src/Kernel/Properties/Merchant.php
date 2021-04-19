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

class Merchant
{
    /**
     * @var string 应用ID
     */
    private $sysId;

    /**
     * @var string 应用别名
     */
    private $alias;

    /**
     * @var string 应用托管账户集编号
     */
    private $accountSetNo;

    /**
     * @var string 应用私密证书路径
     */
    private $privateKeyPath;

    /**
     * @var string 应用公共证书路径
     */
    private $publicKeyPath;

    /**
     * @var string 应用私有密码
     */
    private $privatePwd;

    /**
     * @var string 应用版本号
     */
    private $version;

    /**
     * 获取应用ID
     *
     * @return string|null
     */
    public function getSysId(): ?string
    {
        return $this->sysId;
    }

    /**
     * 设置应用ID
     *
     * @param string $sysId 应用ID
     * @return $this
     */
    public function setSysId(string $sysId): Merchant
    {
        $this->sysId = $sysId;
        return $this;
    }

    /**
     * 获取应用别名
     *
     * @return string|null
     */
    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * 设置应用别名
     *
     * @param string $alias 应用别名
     * @return $this
     */
    public function setAlias(string $alias): Merchant
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * 获取应用托管账户集编号
     *
     * @return string|null
     */
    public function getAccountSetNo(): ?string
    {
        return $this->accountSetNo;
    }

    /**
     * 设置应用托管账户集编号
     *
     * @param string $accountSetNo 应用托管账户集编号
     * @return $this
     */
    public function setAccountSetNo(string $accountSetNo): Merchant
    {
        $this->accountSetNo = $accountSetNo;
        return $this;
    }

    /**
     * 获取应用私密证书密码
     *
     * @return string|null
     */
    public function getPrivateKeyPath(): ?string
    {
        return $this->privateKeyPath;
    }

    /**
     * 设置应用私密证书路径
     *
     * @param string $privateKeyPath 应用私密证书路径
     * @return $this
     */
    public function setPrivateKeyPath(string $privateKeyPath): Merchant
    {
        $this->privateKeyPath = $privateKeyPath;
        return $this;
    }

    /**
     * 获取应用公共证书密码
     *
     * @return string|null
     */
    public function getPublicKeyPath(): ?string
    {
        return $this->publicKeyPath;
    }

    /**
     * 设置应用公共证书路径
     *
     * @param string $publicKeyPath 应用公共证书路径
     * @return $this
     */
    public function setPublicKeyPath(string $publicKeyPath): Merchant
    {
        $this->publicKeyPath = $publicKeyPath;
        return $this;
    }

    /**
     * 获取应用私密证书密码
     *
     * @return string|null
     */
    public function getPrivatePwd(): ?string
    {
        return $this->privatePwd;
    }

    /**
     * 设置应用私有密码
     *
     * @param string $privatePwd 应用私有密码
     * @return $this
     */
    public function setPrivatePwd(string $privatePwd): Merchant
    {
        $this->privatePwd = $privatePwd;
        return $this;
    }

    /**
     * 获取应用版本号
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * 设置应用版本号
     *
     * @param string $version 应用版本号
     * @return $this
     */
    public function setVersion(string $version): Merchant
    {
        $this->version = $version;
        return $this;
    }
}
