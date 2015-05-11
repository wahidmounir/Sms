<?php

/**
 * This file is a part of the Yoqut package.
 *
 * (c) Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that is distributed with this source code.
 */

namespace Yoqut\Component\Sms\Gateway;

use Yoqut\Component\Sms\Model\SmsInterface;
use Yoqut\Component\Sms\Model\GatewayInterface;
use Yoqut\Component\Sms\Gateway\Exception\InvalidGatewayException;

/**
 * The gateway matcher interface
 *
 * @author Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 */
interface MatcherInterface
{
    /**
     * Returns the matched gateway or null based on an SMS
     *
     * @param SmsInterface $sms
     * @throws InvalidGatewayException
     * @return GatewayInterface|null
     */
    public function match(SmsInterface $sms);

    /**
     * Checks whether the matcher supports the given gateway
     *
     * @param GatewayInterface $gateway
     * @return boolean
     */
    public function supports(GatewayInterface $gateway);
}
