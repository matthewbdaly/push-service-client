<?php

namespace Matthewbdaly\PushService\Drivers;

use Matthewbdaly\PushService\Contracts\Driver;

class Pushwoosh implements Driver
{
    protected $name = 'Pushwoosh';

    public function getDriver()
    {
        return $this->name;
    }
}
