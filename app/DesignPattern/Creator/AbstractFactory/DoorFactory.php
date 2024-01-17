<?php

namespace App\DesignPattern\Creator\AbstractFactory;

interface DoorFactory
{
    public function makeDoor(): Door;
    public function makeFittingExpert(): DoorFittingExpert;
}
