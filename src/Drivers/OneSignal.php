<?php

namespace Matthewbdaly\PushService\Drivers;

use Matthewbdaly\PushService\Contracts\Driver;

/**
 * Class OneSignal
 * @package Matthewbdaly\PushService\Drivers
 */
class OneSignal extends Base implements Driver
{
    protected $name = 'OneSignal';

    protected $endpoint = 'https://onesignal.com/api/v1/notifications';
}
