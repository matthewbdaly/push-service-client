<?php

namespace Matthewbdaly\PushService\Drivers;

use Matthewbdaly\PushService\Contracts\Driver;

abstract class Base implements Driver
{
    public function getDriver()
    {
        return $this->name;
    }

    public function getEndpoint()
    {
        return $this->endpoint;
    }
}
