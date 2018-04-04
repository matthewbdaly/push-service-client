<?php

namespace Matthewbdaly\PushService\Drivers;

use Matthewbdaly\PushService\Contracts\Driver;

/**
 * Class Base
 * @package Matthewbdaly\PushService\Drivers
 */
abstract class Base implements Driver
{
    /**
     * @return mixed
     */
    public function getDriver()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }
}
