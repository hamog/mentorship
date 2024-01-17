<?php

namespace App\DesignPattern\Creator\AbstractFactory;

class IronDoor implements Door
{
    public function getDescription()
    {
        echo 'I am an iron door';
    }
}
