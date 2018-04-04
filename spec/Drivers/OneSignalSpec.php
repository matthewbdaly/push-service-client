<?php

namespace spec\Matthewbdaly\PushService\Drivers;

use Matthewbdaly\PushService\Drivers\OneSignal;
use Matthewbdaly\PushService\Contracts\Driver;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OneSignalSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(OneSignal::class);
    }

    function it_implements_interface()
    {
        $this->shouldImplement(Driver::class);
    }

    function it_returns_name()
    {
        $this->getDriver()->shouldReturn('OneSignal');
    }

    public function it_returns_the_driver_endpoint()
    {
        $this->getEndpoint()->shouldReturn('https://onesignal.com/api/v1/notifications');
    }
}
