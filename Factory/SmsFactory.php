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

use Yoqut\Component\Sms\Model\Sms;

/**
 * The default SMS factory implementation
 *
 * @author Sukhrob Khakimov <sukhrob.khakimov@gmail.com>
 */
class SmsFactory implements SmsFactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public static function create()
    {
        return new Sms();
    }
}
