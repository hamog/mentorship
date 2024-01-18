<?php

namespace App\DesignPattern\Structural\Proxy;

use App\DesignPattern\Structural\Proxy\Door;

class LabDoor implements Door
{
    public function open($password)
    {
        echo "Opening lab door";
    }

    public function close()
    {
        echo "Closing the lab door";
    }
}
