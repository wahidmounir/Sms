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

    function it_has_no_name_by_default()
    {
        $this->getName()->shouldReturn(null);
    }

    function its_name_is_mutable()
    {
        $name = 'name';
        $this->setName($name);
        $this->getName()->shouldReturn($name);
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

    function its_service_numbers_should_be_array()
    {
        $this->getServiceNumbers()->shouldBeArray();
    }

    function it_has_no_service_numbers_by_default()
    {
        $this->getServiceNumbers()->shouldHaveCount(0);
    }

    function its_service_numbers_are_immutable()
    {
        $this->shouldNotHaveMethod('addServiceNumber');
        $this->shouldNotHaveMethod('removeServiceNumber');
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

    function it_has_configs_by_default()
    {
        $this->getConfigs()->shouldNotHaveCount(0);
    }

    function its_configs_are_immutable()
    {
        $this->shouldNotHaveMethod('addConfig');
        $this->shouldNotHaveMethod('removeConfig');
    }
}
