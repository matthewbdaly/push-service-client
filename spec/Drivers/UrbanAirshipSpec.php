<?php

namespace spec\Matthewbdaly\PushService\Drivers;

use Matthewbdaly\PushService\Drivers\UrbanAirship;
use Matthewbdaly\PushService\Contracts\Driver;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UrbanAirshipSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(UrbanAirship::class);
    }

    function it_implements_interface()
    {
        $this->shouldImplement(Driver::class);
    }

    function it_returns_name()
    {
        $this->getDriver()->shouldReturn('UrbanAirship');
    }

    public function it_returns_the_driver_endpoint()
    {
        $this->getEndpoint()->shouldReturn('https://go.urbanairship.com/api/push');
    }
}
