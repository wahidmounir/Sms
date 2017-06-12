<?php

/**
 * This file is a part of the Yoqut package.
 *
 * (c) Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that is distributed with this source code.
 */

namespace Yoqut\Component\Sms\Model;

/**
 * The gateway interface
 *
 * @author Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 */
interface GatewayInterface
{
    /**
     * Sets the name
     *
     * @param string $name
     */
    public function setName($name);

    /**
     * Gets the name
     *
     * @return string
     */
    public function getName();

    /**
     * Gets the host
     *
     * @return string
     */
    public function getHost();

    /**
     * Gets the port
     *
     * @return integer
     */
    public function getPort();

    /**
     * Gets the interface version (E.g. 0x34, 0x50, etc)
     *
     * @return integer
     */
    public function getInterfaceVersion();

    /**
     * Gets the username
     *
     * @return string
     */
    public function getUsername();

    /**
     * Gets the password
     *
     * @return string
     */
    public function getPassword();

    /**
     * Gets the service numbers
     *
     * @return array
     */
    public function getServiceNumbers();

    /**
     * Gets the prefix codes
     *
     * @return array
     */
    public function getPrefixCodes();

    /**
     * Gets the configurations
     *
     * @return array
     */
    public function getConfigs();
}
