<?php

namespace spec\Matthewbdaly\PushService;

use Matthewbdaly\PushService\DriverFactory;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DriverFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(DriverFactory::class);
    }
}
