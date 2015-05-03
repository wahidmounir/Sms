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
 * The SMS interface
 *
 * @author Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 */
interface SmsInterface
{
    /**
     * Sets the sender
     *
     * @param string $sender
     */
    public function setSender($sender);

    /**
     * Gets the sender
     *
     * @return string
     */
    public function getSender();

    /**
     * Sets the recipient
     *
     * @param string $recipient
     */
    public function setRecipient($recipient);

    /**
     * Gets the recipient
     *
     * @return string
     */
    public function getRecipient();

    /**
     * Sets the message
     *
     * @param string $message
     */
    public function setMessage($message);

    /**
     * Gets the message
     *
     * @return string
     */
    public function getMessage();

    /**
     * Sets the status
     *
     * @param integer $status
     */
    public function setStatus($status);

    /**
     * Gets the status
     *
     * @return integer
     */
    public function getStatus();

    /**
     * Sets the created date
     *
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt);

    /**
     * Gets the created date
     *
     * @return \DateTime
     */
    public function getCreatedAt();
}
