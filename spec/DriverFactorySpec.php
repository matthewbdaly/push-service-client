<?php

namespace spec\Matthewbdaly\PushService;

use Matthewbdaly\PushService\DriverFactory;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Matthewbdaly\PushService\Drivers\OneSignal;
use Matthewbdaly\PushService\Drivers\Pushwoosh;
use Matthewbdaly\PushService\Drivers\UrbanAirship;
use Matthewbdaly\PushService\Exceptions\ProviderNotSet;
use Matthewbdaly\PushService\Exceptions\UnknownDriver;

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
        $this->resolve($config)->shouldReturnAnInstanceOf(OneSignal::class);
    }

    function it_should_return_pushwoosh_driver()
    {
        $config = [
            'provider' => 'pushwoosh',
        ];
        $this->resolve($config)->shouldReturnAnInstanceOf(Pushwoosh::class);
    }

    function it_should_return_urbanairship_driver()
    {
        $config = [
            'provider' => 'urbanairship',
        ];
        $this->resolve($config)->shouldReturnAnInstanceOf(UrbanAirship::class);
    }

    function it_should_throw_an_exception_if_provider_unknown()
    {
        $config = [
            'provider' => 'foo',
        ];
        $this->shouldThrow(UnknownDriver::class)->during('resolve', [$config]);
    }
}
