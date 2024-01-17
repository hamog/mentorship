<?php

namespace App\DesignPattern\Creator\AbstractFactory;

class Welder implements DoorFittingExpert
{
    public function getDescription()
    {
        echo 'I can only fit iron doors';
    }
}
