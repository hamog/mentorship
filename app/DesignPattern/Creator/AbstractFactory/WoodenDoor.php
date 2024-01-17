<?php

namespace App\DesignPattern\Creator\AbstractFactory;

use App\DesignPattern\Creator\AbstractFactory\Door;

class WoodenDoor implements Door
{
    public function getDescription()
    {
        echo 'I am a wooden door';
    }
}
