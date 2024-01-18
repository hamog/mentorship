<?php

namespace App\DesignPattern\Structural\Proxy;

interface Door
{
    public function open(string|null $password);
    public function close();
}
