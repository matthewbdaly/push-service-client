<?php

namespace spec\Matthewbdaly\PushService\Drivers;

use Matthewbdaly\PushService\Drivers\Pushwoosh;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PushwooshSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Pushwoosh::class);
    }
}
