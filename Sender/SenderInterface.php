<?php

/**
 * This file is a part of the Yoqut package.
 *
 * (c) Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that is distributed with this source code.
 */

namespace Yoqut\Component\Sms\Sender;

use Yoqut\Component\Sms\Model\SmsInterface;

/**
 * The sender interface
 *
 * @author Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 */
interface SenderInterface
{
    /**
     * Sends an SMS
     *
     * @param SmsInterface $sms
     * @return boolean
     */
    public function send(SmsInterface $sms);
}
