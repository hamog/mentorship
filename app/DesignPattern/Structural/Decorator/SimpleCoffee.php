<?php

namespace App\DesignPattern\Structural\Decorator;

use App\DesignPattern\Structural\Decorator\Coffee;

class SimpleCoffee implements Coffee
{
    public function getCost(): int
    {
        return 10;
    }

    public function getDescription(): string
    {
        return 'Simple coffee';
    }
}
