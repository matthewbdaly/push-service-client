<?php

namespace Matthewbdaly\PushService\Drivers;

use Matthewbdaly\PushService\Contracts\Driver;

class OneSignal implements Driver
{
    protected $name = 'OneSignal';

    public function getDriver()
    {
        return $this->name;
    }
}
