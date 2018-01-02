<?php

namespace Matthewbdaly\PushService\Drivers;

use Matthewbdaly\PushService\Contracts\Driver;

class UrbanAirship implements Driver
{
    protected $name = 'UrbanAirship';

    public function getDriver()
    {
        return $this->name;
    }
}
