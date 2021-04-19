<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Encryption;

use EasyAllInPay\Application;
use EasyAllInPay\Kernel\Exceptions\InvalidCredentialsException;
use EasyAllInPay\Kernel\Properties\Merchant;

class Encryptor
{

    /**
     * @var string 应用ID
     */
    private $sysId;

    /**
     * @var string 私钥证书
     */
    private $privateKey;

    /**
     * @var string 公钥证书
     */
    private $publicKey;

    /**
     * @var string 私有密码
     */
    private $privatePwd;

    /**
     * 构造方法
     *
     * @param Merchant $merchant
     * @throws InvalidCredentialsException
     */
    public function __construct(Merchant $merchant)
    {
        $this->sysId = $merchant->getSysId();
        $this->privatePwd = $merchant->getPrivatePwd();
        $this->privateKey = $this->_loadPrivateKey($merchant->getPrivateKeyPath(), $this->privatePwd);
        $this->publicKey = $this->_loadPublicKey($merchant->getPublicKeyPath());
    }

    /**
     * 签名方法
     *
     * @param string $str_request
     * @param string $timestamp
     * @return mixed
     */
    public function sign(string $str_request, string $timestamp)
    {
        $dataStr = $this->sysId . $str_request . $timestamp;
        $text = base64_encode(hash('md5', $dataStr, true));
        openssl_sign($text, $sign, $this->privateKey);
        $sign = base64_encode($sign);
        return $sign;
    }

    /**
     * 签名验证方法
     *
     * @param string $signed_value 返回的数据
     * @param string $sign 签名
     * @return bool
     */
    public function verify(string $signed_value, string $sign)
    {
        return (bool)openssl_verify($signed_value, base64_decode($sign), $this->publicKey, OPENSSL_ALGO_SHA1);
    }

    /**
     * 敏感数据加密
     *
     * @param string $data 数据
     * @return mixed
     */
    public function encrypt(string $data)
    {
        $publicKey = openssl_get_publickey($this->publicKey);
        openssl_public_encrypt($data, $encrypted, $publicKey);
        return strtoupper(bin2hex($encrypted));
    }

    /**
     * 敏感数据解密
     *
     * @param string $data 数据
     * @return mixed
     */
    public function decrypt(string $data)
    {
        $decrypted = '';
        openssl_private_decrypt(pack('H*', $data), $decrypted, $this->privateKey);
        return $decrypted;
    }

    /**
     * 从证书文件中加载公钥
     *
     * @param string $path 证书路径的绝对路径
     * @return mixed
     * @throws InvalidCredentialsException
     */
    private function _loadPublicKey(string $path)
    {
        $publicKey = file_get_contents($path);
        $publicKey = openssl_get_publickey($publicKey);
        if (!$publicKey) {
            throw new InvalidCredentialsException("Invalid AllInPay's public key.");
        }
        return $publicKey;
    }

    /**
     * 从证书文件中加载私钥
     *
     * @param string $path 证书路径（绝对路径）
     * @param string $password 证书密码
     * @return mixed
     * @throws InvalidCredentialsException
     */
    private function _loadPrivateKey(string $path, string $password)
    {
        $privateKey = null;
        $prefix = pathinfo($path, PATHINFO_EXTENSION);
        if ($prefix == 'pfx') {
            $privateKey = file_get_contents($path);
            if (openssl_pkcs12_read($privateKey, $certs, $password)) {
                $privateKey = $certs['pkey'];
            }
        }
        if ($prefix == 'pem') {
            $content = file_get_contents($path);
            $privateKey = openssl_get_privatekey($content, $password);
        }
        if(!$privateKey){
            throw new InvalidCredentialsException("Invalid AllInPay's private key.");
        }
        return $privateKey;
    }
}
