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
     * The name of a gateway
     *
     * @var string
     */
    protected $name;

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
     * The service numbers of a gateway
     *
     * @var array
     */
    protected $serviceNumbers;

    /**
     * The prefix codes of a gateway
     *
     * @var array
     */
    protected $prefixCodes;

    /**
     * The default configurations of a gateway
     *
     * @var array
     */
    protected $configs = array(
        'persistent' => false,
        'debug' => false,
        'send_timeout' => 10000,
        'receive_timeout' => 10000,
        'sender' => array(
            'ton' => \SMPP::TON_UNKNOWN,
            'npi' => \SMPP::NPI_UNKNOWN
        ),
        'recipient' => array(
            'ton' => \SMPP::TON_INTERNATIONAL,
            'npi' => \SMPP::NPI_E164
        )
    );

    /**
     * Constructor
     *
     * @param string $host
     * @param integer $port
     * @param string $username
     * @param string $password
     * @param array $serviceNumbers
     * @param array $prefixCodes
     * @param array $configs
     */
    public function __construct(
        $host,
        $port,
        $username,
        $password,
        array $serviceNumbers = array(),
        array $prefixCodes = array(),
        array $configs = array()
    ) {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
        $this->serviceNumbers = $serviceNumbers;
        $this->prefixCodes = $prefixCodes;
        $this->configs = array_replace_recursive($this->configs, $configs);
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
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->name;
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
    public function getServiceNumbers()
    {
        return $this->serviceNumbers;
    }

    /**
     * {@inheritDoc}
     */
    public function getPrefixCodes()
    {
        return $this->prefixCodes;
    }

    /**
     * {@inheritDoc}
     */
    public function getConfigs()
    {
        return $this->configs;
    }
}
