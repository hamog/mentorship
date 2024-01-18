<?php

namespace App\DesignPattern\Structural\Proxy;

use App\DesignPattern\Structural\Proxy\Door;

class SecuredDoor implements Door
{
    protected Door $door;

    public function __construct(Door $door)
    {
        $this->door = $door;
    }

    public function open($password)
    {
        if ($this->authenticate($password)) {
            $this->door->open();
        } else {
            echo "Big no! It ain't possible.";
        }
    }

    public function authenticate($password)
    {
        return $password === '$ecr@t';
    }

    public function close()
    {
        $this->door->close();
    }
}
