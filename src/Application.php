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

use EasyAllInPay\Kernel\Exceptions\RuntimeException;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Pimple\Container;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @throws RuntimeException
     */
    public function __construct($config = [], array $values = [])
    {
        parent::__construct($values);

        $this['config'] = function () use ($config) {
            return new ArrayCollection($config);
        };

        foreach ($this->providers as $provider) {
            $this->register(new $provider());
        }

        $this->setLogger();
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

    /**
     * @param LineFormatter|null $lineFormatter
     * @param array $handlers
     * @throws RuntimeException
     */
    public function setLogger(LineFormatter $lineFormatter = null, array $handlers = [])
    {
        $requestLogPath = $this['config']['log']['request'] ?? '';
        if(!$requestLogPath){
            throw new RuntimeException('Request log file missed.');
        }
        $formatter = $lineFormatter && ($lineFormatter instanceof LineFormatter) ? $lineFormatter : new LineFormatter(null, null, false, true);
        if(!$handlers){
            $streamHandler = new StreamHandler($requestLogPath, Logger::INFO, true, 0777);
            $handlers = [$streamHandler];
        }
        foreach($handlers as $handler){
            if(!($handler instanceof StreamHandler)){
                throw new RuntimeException('Handler must be an instance of StreamHandler.');
            }
            $handler->setFormatter($formatter);
            $this['logger']->pushHandler($handler);
        }
    }

}
