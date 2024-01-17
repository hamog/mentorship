<?php

namespace App\DesignPattern\Creator\SimpleFactory;

interface Door
{
    public function getWidth(): float;
    public function getHeight(): float;
}
