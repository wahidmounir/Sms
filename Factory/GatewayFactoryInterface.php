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
     * @param string $username
     * @param string $password
     * @param string $serviceNumber
     * @param array $prefixes
     * @return GatewayInterface
     */
    public static function create(
        $host,
        $port,
        $username,
        $password,
        $serviceNumber = null,
        array $prefixes = array()
    );
}
