<?php

namespace App\DesignPattern\Creator\SimpleFactory;

class DoorFactory
{
    public static function makeDoor($width, $height): Door
    {
        return new WoodenDoor($width, $height);
    }
}
