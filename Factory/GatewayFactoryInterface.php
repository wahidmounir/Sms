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

use Yoqut\Component\Sms\Model\GatewayInterface;

/**
 * The gateway factory interface
 *
 * @author Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 */
interface GatewayFactoryInterface
{
    /**
     * Creates a new gateway
     *
     * @param string $host
     * @param integer $port
     * @param integer $interfaceVersion
     * @param string $username
     * @param string $password
     * @param array $serviceNumbers
     * @param array $prefixCodes
     * @param array $configs
     * @return GatewayInterface
     */
    public static function create(
        $host,
        $port,
        $interfaceVersion,
        $username,
        $password,
        array $serviceNumbers = array(),
        array $prefixCodes = array(),
        array $configs = array()
    );
}
