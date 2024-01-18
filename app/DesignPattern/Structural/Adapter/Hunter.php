<?php

namespace App\DesignPattern\Structural\Adapter;

class Hunter
{
    public function hunt(Lion $lion)
    {
        $lion->roar();
    }
}
