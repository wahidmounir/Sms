<?php

namespace spec\Yoqut\Component\Sms\Gateway;

use PhpSpec\ObjectBehavior;
use Yoqut\Component\Sms\Model\SmsInterface;
use Yoqut\Component\Sms\Model\GatewayInterface;
use Yoqut\Component\Sms\Model\Sms;
use Yoqut\Component\Sms\Model\Gateway;

class MatcherSpec extends ObjectBehavior
{
    protected $gateways;

    function let()
    {
        $gateway = new Gateway(
            'localhost',
            2775,
            'username',
            'password',
            array('5555'),
            array('+555')
        );

        $this->gateways = array($gateway);
        $this->beConstructedWith($this->gateways);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Yoqut\Component\Sms\Gateway\Matcher');
    }

    function it_implements_Yoqut_matcher_interface()
    {
        $this->shouldImplement('Yoqut\Component\Sms\Gateway\MatcherInterface');
    }

    function it_should_not_throw_exception_if_gateway_is_valid(SmsInterface $sms, GatewayInterface $gateway)
    {
        $this
            ->shouldNotThrow('Yoqut\Component\Sms\Gateway\Exception\InvalidGatewayException')
            ->duringMatch($sms, $gateway);
    }

    function it_should_match_gateway_if_it_exists()
    {
        $sms = new Sms();
        $sms->setSender('sender');
        $sms->setRecipient('+5550100');
        $sms->setMessage('message');

        $this->match($sms)->shouldNotReturn(null);
    }

    function it_should_support_valid_gateway(GatewayInterface $gateway)
    {
        $this->supports($gateway)->shouldReturn(true);
    }
}
