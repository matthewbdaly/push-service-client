<?php

namespace Matthewbdaly\PushService\Drivers;

use Matthewbdaly\PushService\Contracts\Driver;

class Pushwoosh extends Base implements Driver
{
    protected $name = 'Pushwoosh';

    protected $endpoint ='https://cp.pushwoosh.com/json/1.3/createMessage';
}
