<?php

namespace spec\Yoqut\Component\Sms\Factory;

use PhpSpec\ObjectBehavior;

class GatewayFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Yoqut\Component\Sms\Factory\GatewayFactory');
    }

    function it_implements_Yoqut_gateway_factory_interface()
    {
        $this->shouldImplement('Yoqut\Component\Sms\Factory\GatewayFactoryInterface');
    }

    function its_create_method_should_return_new_gateway(
        $host,
        $port,
        $username,
        $password
    ) {
        $this->create(
            $host,
            $port,
            $username,
            $password
        )->shouldHaveType('Yoqut\Component\Sms\Model\Gateway');
    }
}
