<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel\Providers;

use EasyAllInPay\Kernel\Encryption\Encryptor;
use EasyAllInPay\Kernel\Properties\Merchant;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class EncryptionServiceProvider implements ServiceProviderInterface
{
    /**
     * Registers services on the given container.
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $pimple A container instance
     */
    public function register(Container $pimple)
    {
        $pimple['encryptor'] = function ($app) {
            $config = $app['config'];
            $basicConfig = $config['basic'] ?? [];
            $httpRequestConfig = $config['http_request'] ??[];
            $merchantProperty = new Merchant();
            $merchantProperty->setSysId($basicConfig['sys_id'] ?? '')
                        ->setAccountSetNo($basicConfig['account_set_no'] ?? '')
                        ->setAlias($basicConfig['alias'] ?? '')
                        ->setPrivateKeyPath($basicConfig['private_key'] ?? '')
                        ->setPublicKeyPath($basicConfig['public_key'] ?? '')
                        ->setPrivatePwd($basicConfig['private_pwd'] ?? '')
                        ->setVersion($httpRequestConfig['version'] ?? '');
            return new Encryptor($merchantProperty);
        };
    }
}
