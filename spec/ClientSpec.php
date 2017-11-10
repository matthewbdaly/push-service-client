<?php

namespace spec\Matthewbdaly\PushService;

use Matthewbdaly\PushService\Client;
use Matthewbdaly\PushService\Contracts\Driver;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ClientSpec extends ObjectBehavior
{
    function let(Driver $driver)
    {
        $this->beConstructedWith($driver);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Client::class);
    }
}
