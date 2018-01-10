<?php

namespace spec\Matthewbdaly\PushService\Drivers;

use Matthewbdaly\PushService\Drivers\Pushwoosh;
use Matthewbdaly\PushService\Contracts\Driver;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PushwooshSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Pushwoosh::class);
    }

    function it_implements_interface()
    {
        $this->shouldImplement(Driver::class);
    }

    function it_returns_name()
    {
        $this->getDriver()->shouldReturn('Pushwoosh');
    }
}