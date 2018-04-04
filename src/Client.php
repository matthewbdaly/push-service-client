<?php

namespace Matthewbdaly\PushService;

use Matthewbdaly\PushService\Contracts\Driver;

/**
 * Class Client
 * @package Matthewbdaly\PushService
 */
class Client
{
    private $driver;

    /**
     * Client constructor.
     * @param Driver $driver
     */
    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }
}
