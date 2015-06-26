<?php

namespace spec\Yoqut\Component\Sms\Sender;

use PhpSpec\ObjectBehavior;

class SenderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Yoqut\Component\Sms\Sender\Sender');
    }

    function it_implements_Yoqut_sender_interface()
    {
        $this->shouldImplement('Yoqut\Component\Sms\Sender\SenderInterface');
    }
}
