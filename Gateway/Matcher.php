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
 * The default gateway matcher implementation
 *
 * @author Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 */
class Matcher implements MatcherInterface
{
    /**
     * The available gateways
     *
     * @var array
     */
    protected $gateways;

    /**
     * Constructor
     *
     * @param GatewayInterface[] $gateways
     */
    public function __construct(array $gateways)
    {
        $this->gateways = $gateways;
    }

    /**
     * {@inheritDoc}
     */
    public function match(SmsInterface $sms)
    {
        foreach ($this->gateways as $gateway) {
            if (!$this->supports($gateway)) {
                throw new InvalidGatewayException();
            }

            foreach ($gateway->getPrefixPatterns() as $prefixPattern) {
                $recipient = $sms->getRecipient();

                if ($prefixPattern != '' && strrpos($recipient, $prefixPattern, -strlen($recipient)) !== false) {
                    return $gateway;
                }
            }
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function supports(GatewayInterface $gateway)
    {
        return $gateway instanceof GatewayInterface;
    }
}
