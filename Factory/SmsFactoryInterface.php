<?php

/**
 * This file is a part of the Yoqut package.
 *
 * (c) Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that is distributed with this source code.
 */

namespace Yoqut\Component\Sms\Factory;

use Yoqut\Component\Sms\Model\SmsInterface;

/**
 * The SMS factory interface
 *
 * @author Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 */
interface SmsFactoryInterface
{
    /**
     * Creates a new SMS
     *
     * @return SmsInterface
     */
    public static function create();
}
