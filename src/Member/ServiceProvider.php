<?php

/*
 * This file is part of the lawyersoa/allinpay.
 *
 * (c) 乔亚奇 <tuyashequ@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyAllInPay\Member;

use EasyAllInPay\Kernel\Properties\RequestReqParam\Member\CreateMember as CreateMemberRequest;
use EasyAllInPay\Kernel\Properties\ResponseSignedValue\Member\CreateMember as CreateMemberResponse;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ServiceProvider
 * @package EasyAllInPay\Member
 * @method CreateMemberResponse createMember(CreateMemberRequest $createMemberRequest);
 */
class ServiceProvider implements ServiceProviderInterface
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
        $pimple['member'] = function ($app) {
            return new Client($app);
        };
    }
}
