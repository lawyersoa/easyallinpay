<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Kernel;

use EasyAllInPay\Application;
use EasyAllInPay\Kernel\Http\Client;

class BaseClient
{
    /**
     * @var Application
     */
    protected $app;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var array 配置
     */
    protected $config;

    /**
     * @var array 基础配置
     */
    protected $basicConfig;

    /**
     * @var array HTTP配置
     */
    protected $httpRequestConfig;

    /**
     * Client constructor.
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->client = $this->app['client'];
        $this->config = $app['config'];
        $this->basicConfig = $this->config['basic'] ?? [];
        $this->httpRequestConfig = $this->config['http_request'] ?? [];
    }
}
