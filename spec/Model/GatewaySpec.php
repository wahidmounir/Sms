<?php

namespace spec\Yoqut\Component\Sms\Model;

use PhpSpec\ObjectBehavior;

class GatewaySpec extends ObjectBehavior
{
    public function getMatchers()
    {
        return array(
            'haveMethod' => function($object, $method) {
                return method_exists($object, $method);
            }
        );
    }

    function let(
        $host,
        $port,
        $username,
        $password
    ) {
        $this->beConstructedWith(
            $host,
            $port,
            $username,
            $password
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Yoqut\Component\Sms\Model\Gateway');
    }

    function it_implements_Yoqut_gateway_interface()
    {
        $this->shouldImplement('Yoqut\Component\Sms\Model\GatewayInterface');
    }

    function it_has_no_id_by_default()
    {
        $this->getId()->shouldReturn(null);
    }

    function its_id_is_immutable()
    {
        $this->shouldNotHaveMethod('setId');
    }

    function its_host_is_immutable()
    {
        $this->shouldNotHaveMethod('setHost');
    }

    function its_port_is_immutable()
    {
        $this->shouldNotHaveMethod('setPort');
    }

    function its_username_is_immutable()
    {
        $this->shouldNotHaveMethod('setUsername');
    }

    function its_password_is_immutable()
    {
        $this->shouldNotHaveMethod('setPassword');
    }

    function it_has_no_service_number_by_default()
    {
        $this->getServiceNumber()->shouldReturn(null);
    }

    function its_service_number_is_immutable()
    {
        $this->shouldNotHaveMethod('setServiceNumber');
    }

    function its_prefix_codes_should_be_array()
    {
        $this->getPrefixCodes()->shouldBeArray();
    }

    function it_has_no_prefix_codes_by_default()
    {
        $this->getPrefixCodes()->shouldHaveCount(0);
    }

    function its_prefix_codes_are_immutable()
    {
        $this->shouldNotHaveMethod('addPrefixCode');
        $this->shouldNotHaveMethod('removePrefixCode');
    }

    function its_configs_should_be_array()
    {
        $this->getConfigs()->shouldBeArray();
    }

    function it_has_no_configs_by_default()
    {
        $this->getConfigs()->shouldHaveCount(0);
    }

    function its_configs_are_immutable()
    {
        $this->shouldNotHaveMethod('addConfig');
        $this->shouldNotHaveMethod('removeConfig');
    }
}
