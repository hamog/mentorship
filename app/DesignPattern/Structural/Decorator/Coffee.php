<?php

namespace App\DesignPattern\Structural\Decorator;

interface Coffee
{
    public function getCost(): int;
    public function getDescription(): string;
}
