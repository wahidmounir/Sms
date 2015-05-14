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
 * The default gateway implementation
 *
 * @author Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 */
class Gateway implements GatewayInterface
{
    /**
     * The unique id of a gateway
     *
     * @var mixed
     */
    protected $id;

    /**
     * The host of a gateway
     *
     * @var string
     */
    protected $host;

    /**
     * The port of a gateway
     *
     * @var integer
     */
    protected $port;

    /**
     * The username of a gateway
     *
     * @var string
     */
    protected $username;

    /**
     * The password of a gateway
     *
     * @var string
     */
    protected $password;

    /**
     * The prefixes of a gateway
     *
     * @var array
     */
    protected $prefixes;

    /**
     * Constructor
     *
     * @param string $host
     * @param integer $port
     * @param string $username
     * @param string $password
     * @param array $prefixes
     */
    public function __construct($host, $port, $username, $password, array $prefixes = array())
    {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
        $this->prefixes = $prefixes;
    }

    /**
     * Gets the id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * {@inheritDoc}
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * {@inheritDoc}
     */
    public function getPrefixes()
    {
        return $this->prefixes;
    }
}
