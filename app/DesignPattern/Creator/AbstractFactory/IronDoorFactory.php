<?php

namespace App\DesignPattern\Creator\AbstractFactory;

use App\DesignPattern\Creator\AbstractFactory\DoorFactory;

class IronDoorFactory implements DoorFactory
{
    public function makeDoor(): Door
    {
        return new IronDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Welder();
    }
}
