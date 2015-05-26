<?php

namespace spec\Yoqut\Component\Sms\Factory;

use PhpSpec\ObjectBehavior;

class SmsFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Yoqut\Component\Sms\Factory\SmsFactory');
    }

    function it_implements_Yoqut_sms_factory_interface()
    {
        $this->shouldImplement('Yoqut\Component\Sms\Factory\SmsFactoryInterface');
    }

    function its_create_method_should_return_new_sms()
    {
        $this->create()->shouldHaveType('Yoqut\Component\Sms\Model\Sms');
    }
}
