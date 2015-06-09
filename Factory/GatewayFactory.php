<?php

/**
 * This file is a part of the Yoqut package.
 *
 * (c) Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that is distributed with this source code.
 */

namespace Yoqut\Component\Sms\Factory;

use Yoqut\Component\Sms\Model\Gateway;

/**
 * The default gateway factory implementation
 *
 * @author Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 */
class GatewayFactory implements GatewayFactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public static function create(
        $host,
        $port,
        $username,
        $password,
        array $serviceNumbers = array(),
        array $prefixCodes = array(),
        array $configs = array()
    ) {
        return new Gateway(
            $host,
            $port,
            $username,
            $password,
            $serviceNumbers,
            $prefixCodes,
            $configs
        );
    }
}
