<?php

namespace App\DesignPattern\Creator\AbstractFactory;

class Carpenter implements DoorFittingExpert
{
    public function getDescription()
    {
        echo 'I can only fit wooden doors';
    }
}
