<?php

namespace Matthewbdaly\PushService\Contracts;

interface Driver
{
    public function getDriver();

    public function getEndpoint();
}
