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
        // Get the gateway configurations
        $configs = $gateway->getConfigs();

        // Create a new socket transport
        $transport = new \SocketTransport(
            array($gateway->getHost()),
            $gateway->getPort(),
            $configs['persistent']
        );
        $transport->setSendTimeout($configs['sender']['timeout']);
        $transport->debug = $configs['debug'];

        // Create a new SMPP client
        $smpp = new \SmppClient($transport);
        $smpp->debug = $configs['debug'];

        // Open the connection
        $transport->open();
        $smpp->bindTransmitter($gateway->getUsername(), $gateway->getPassword());

        // Configure a sender, recipient and message
        $sender = new \SmppAddress(
            $sms->getSender(),
            $configs['sender']['ton'],
            $configs['sender']['npi']
        );
        $recipient = new \SmppAddress(
            $sms->getRecipient(),
            $configs['recipient']['ton'],
            $configs['recipient']['npi']
        );
        $message = \GsmEncoder::utf8_to_gsm0338($sms->getMessage());

        // Send an SMS and close the connection
        $messageId = $smpp->sendSMS($sender, $recipient, $message);
        $smpp->close();

        return $messageId;
    }
}
