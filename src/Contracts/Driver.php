<?php

namespace Matthewbdaly\PushService\Contracts;

/**
 * Interface Driver
 * @package Matthewbdaly\PushService\Contracts
 */
interface Driver
{
    public function getDriver();

    public function getEndpoint();
}
