<?php

namespace spec\Matthewbdaly\PushService;

use Matthewbdaly\PushService\DriverFactory;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Matthewbdaly\PushService\Drivers\OneSignal;
use Matthewbdaly\PushService\Drivers\Pushwoosh;
use Matthewbdaly\PushService\Drivers\UrbanAirship;
use Matthewbdaly\PushService\Exceptions\ProviderNotSet;

class DriverFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(DriverFactory::class);
    }

    function it_should_throw_an_exception_if_provider_not_set()
    {
        $config = [];
        $this->shouldThrow(ProviderNotSet::class)->during('resolve', [$config]);
    }

    function it_should_return_onesignal_driver()
    {
        $config = [
            'provider' => 'onesignal',
        ];
        $this->resolve($config)->shouldReturn(OneSignal::class);
    }

    function it_should_return_pushwoosh_driver()
    {
        $config = [
            'provider' => 'pushwoosh',
        ];
        $this->resolve($config)->shouldReturn(Pushwoosh::class);
    }

    function it_should_return_urbanairship_driver()
    {
        $config = [
            'provider' => 'urbanairship',
        ];
        $this->resolve($config)->shouldReturn(UrbanAirship::class);
    }
}
