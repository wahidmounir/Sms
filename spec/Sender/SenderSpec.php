<?php

namespace spec\Yoqut\Component\Sms\Sender;

use PhpSpec\ObjectBehavior;

class SenderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Yoqut\Component\Sms\Sender\Sender');
    }
}
