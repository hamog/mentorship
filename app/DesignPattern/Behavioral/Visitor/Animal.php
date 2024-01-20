<?php

namespace App\DesignPattern\Behavioral\Visitor;

interface Animal
{
    public function accept(AnimalOperation $operation);
}
