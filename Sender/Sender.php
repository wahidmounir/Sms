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
use Yoqut\Component\Sms\Model\GatewayInterface;

/**
 * The default sender implementation
 *
 * @author Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 */
class Sender implements SenderInterface
{
    /**
     * {@inheritDoc}
     */
    public function send(SmsInterface $sms, GatewayInterface $gateway)
    {
        $transport = new \SocketTransport(array($gateway->getHost()), $gateway->getPort());
        $transport->setRecvTimeout(10000);
        $transport->debug = true;

        $smpp = new \SmppClient($transport);
        $smpp->debug = true;

        $transport->open();
        $smpp->bindTransmitter($gateway->getUsername(), $gateway->getPassword());

        $message = \GsmEncoder::utf8_to_gsm0338($sms->getMessage());
        $sender = new \SmppAddress($sms->getSender(), \SMPP::TON_ALPHANUMERIC);
        $recipient = new \SmppAddress($sms->getRecipient(), \SMPP::TON_INTERNATIONAL, \SMPP::NPI_E164);

        $messageId = $smpp->sendSMS($sender, $recipient, $message);
        $smpp->close();

        return $messageId;
    }
}
