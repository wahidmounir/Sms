<?php

namespace spec\Yoqut\Component\Sms\Model;

use PhpSpec\ObjectBehavior;
use Yoqut\Component\Sms\Model\Sms;

class SmsSpec extends ObjectBehavior
{
    public function getMatchers()
    {
        return array(
            'haveMethod' => function($object, $method) {
                return method_exists($object, $method);
            }
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Yoqut\Component\Sms\Model\Sms');
    }

    function it_implements_Yoqut_sms_interface()
    {
        $this->shouldImplement('Yoqut\Component\Sms\Model\SmsInterface');
    }

    function it_has_no_id_by_default()
    {
        $this->getId()->shouldReturn(null);
    }

    function its_id_is_immutable()
    {
        $this->shouldNotHaveMethod('setId');
    }

    function it_has_no_sender_by_default()
    {
        $this->getSender()->shouldReturn(null);
    }

    function its_sender_is_mutable()
    {
        $sender = 'sender';
        $this->setSender($sender);
        $this->getSender()->shouldReturn($sender);
    }

    function it_has_no_recipient_by_default()
    {
        $this->getRecipient()->shouldReturn(null);
    }

    function its_recipient_is_mutable()
    {
        $recipient = 'recipient';
        $this->setRecipient($recipient);
        $this->getRecipient()->shouldReturn($recipient);
    }

    function it_has_no_message_by_default()
    {
        $this->getMessage()->shouldReturn(null);
    }

    function its_message_is_mutable()
    {
        $message = 'message';
        $this->setMessage($message);
        $this->getMessage()->shouldReturn($message);
    }

    function it_has_no_state_by_default()
    {
        $this->getState()->shouldReturn(null);
    }

    function its_state_is_mutable()
    {
        $state = Sms::STATE_SENT;
        $this->setState($state);
        $this->getState()->shouldReturn($state);
    }

    function it_throws_exception_if_state_is_invalid()
    {
        $this
            ->shouldThrow('\InvalidArgumentException')
            ->duringSetState(-1);
    }

    function it_has_creation_date_by_default()
    {
        $this->getCreatedAt()->shouldHaveType('DateTime');
    }

    function its_creation_date_is_mutable()
    {
        $date = new \DateTime();
        $this->setCreatedAt($date);
        $this->getCreatedAt()->shouldReturn($date);
    }
}
