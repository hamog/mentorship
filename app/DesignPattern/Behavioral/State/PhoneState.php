<?php

namespace App\DesignPattern\Behavioral\State;

interface PhoneState
{
    public function pickUp(): PhoneState;
    public function hangUp(): PhoneState;
    public function dial(): PhoneState;
}
