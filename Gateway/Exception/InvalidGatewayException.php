<?php
/**
 * This file is a part of the Yoqut package.
 *
 * (c) Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that is distributed with this source code.
 */
namespace Yoqut\Component\Sms\Gateway\Exception;

/**
 * The exception is thrown when the given gateway is invalid.
 *
 * @author Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 */
class InvalidGatewayException extends \RuntimeException
{
    /**
     * Constructor
     *
     * @param string $message
     */
    public function __construct($message = '')
    {
        parent::__construct($message);
    }
}
