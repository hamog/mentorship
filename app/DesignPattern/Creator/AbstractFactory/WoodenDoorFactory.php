<?php

namespace App\DesignPattern\Creator\AbstractFactory;

use App\DesignPattern\Creator\AbstractFactory\DoorFactory;

class WoodenDoorFactory implements DoorFactory
{
    public function makeDoor(): Door
    {
        return new WoodenDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Carpenter();
    }
}
