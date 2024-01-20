<?php

namespace App\DesignPattern\Behavioral\Iterator;

class RadioStation
{
    protected float $frequency;

    public function __construct(float $frequency)
    {
        $this->frequency = $frequency;
    }

    public function getFrequency(): float
    {
        return $this->frequency;
    }
}
