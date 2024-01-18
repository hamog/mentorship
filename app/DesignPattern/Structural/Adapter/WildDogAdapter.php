<?php

namespace App\DesignPattern\Structural\Adapter;

use App\DesignPattern\Structural\Adapter\Lion;

class WildDogAdapter implements Lion
{
    protected WildDog $dog;

    public function __construct(WildDog $dog)
    {
        $this->dog = $dog;
    }

    public function roar()
    {
        $this->dog->bark();
    }
}
