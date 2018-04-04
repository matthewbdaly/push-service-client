<?php

namespace Matthewbdaly\PushService;

use Matthewbdaly\PushService\Drivers\OneSignal;
use Matthewbdaly\PushService\Drivers\Pushwoosh;
use Matthewbdaly\PushService\Drivers\UrbanAirship;
use Matthewbdaly\PushService\Exceptions\ProviderNotSet;

class DriverFactory
{
    public static function resolve(array $config)
    {
        if (!isset($config['provider'])) {
            throw new ProviderNotSet;
        }
    }
}
