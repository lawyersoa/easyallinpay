<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay;

use Overtrue\Http\Support\Collection;
use Pimple\Container;

/**
 */
class Application extends Container
{
    /**
     * @var array
     */
    protected $providers = [
        Merchant\ServiceProvider::class,
        Member\ServiceProvider::class,
        Order\ServiceProvider::class,
        Kernel\Providers\ClientServiceProvider::class,
        Kernel\Providers\EncryptionServiceProvider::class,
        Kernel\Providers\LoggerServiceProvider::class,
        Kernel\Providers\RequestServiceProvider::class,
        Kernel\Providers\ServerServiceProvider::class,
    ];

    /**
     * Application constructor.
     *
     * @param array $config
     * @param array $values
     */
    public function __construct($config = [], array $values = [])
    {
        parent::__construct($values);

        $this['config'] = function () use ($config) {
            return new Collection($config);
        };

        foreach ($this->providers as $provider) {
            $this->register(new $provider());
        }
    }

    /**
     * @param $name
     *
     * @return mixed
     */
    public function __get($name)
    {
        return $this[$name];
    }
}
