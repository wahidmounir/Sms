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
 * The default SMS implementation
 *
 * @author Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 */
class Sms implements SmsInterface
{
    /**
     * The unique id of an SMS
     *
     * @var mixed
     */
    protected $id;

    /**
     * The sender of an SMS
     *
     * @var string
     */
    protected $sender;

    /**
     * The recipient of an SMS
     *
     * @var string
     */
    protected $recipient;

    /**
     * The message of an SMS
     *
     * @var string
     */
    protected $message;

    /**
     * The created date of an SMS
     *
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime();
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
    public function setSender($sender)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * {@inheritDoc}
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * {@inheritDoc}
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
