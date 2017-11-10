<?php

namespace Matthewbdaly\PushService;

use Matthewbdaly\PushService\Contracts\Driver;

class Client
{
    private $driver;

    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }
}
