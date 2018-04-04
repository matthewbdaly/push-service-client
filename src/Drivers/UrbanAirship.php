<?php

namespace Matthewbdaly\PushService\Drivers;

use Matthewbdaly\PushService\Contracts\Driver;

/**
 * Class UrbanAirship
 * @package Matthewbdaly\PushService\Drivers
 */
class UrbanAirship extends Base implements Driver
{
    protected $name = 'UrbanAirship';

    protected $endpoint ='https://go.urbanairship.com/api/push';
}
