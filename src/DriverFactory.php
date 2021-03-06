<?php

namespace Matthewbdaly\PushService;

use Matthewbdaly\PushService\Drivers\OneSignal;
use Matthewbdaly\PushService\Drivers\Pushwoosh;
use Matthewbdaly\PushService\Drivers\UrbanAirship;
use Matthewbdaly\PushService\Exceptions\ProviderNotSet;
use Matthewbdaly\PushService\Exceptions\UnknownDriver;

/**
 * Class DriverFactory
 * @package Matthewbdaly\PushService
 */
class DriverFactory
{
    /**
     * @param array $config
     * @return OneSignal|Pushwoosh|UrbanAirship
     * @throws ProviderNotSet
     * @throws UnknownDriver
     */
    public static function resolve(array $config)
    {
        if (!isset($config['provider'])) {
            throw new ProviderNotSet;
        }
        $provider = $config['provider'];
        unset($config['provider']);
        switch ($provider) {
            case 'onesignal':
                return new OneSignal($config);
                break;
            case 'pushwoosh':
                return new Pushwoosh($config);
                break;
            case 'urbanairship':
                return new UrbanAirship($config);
        }
        throw new UnknownDriver;
    }
}
