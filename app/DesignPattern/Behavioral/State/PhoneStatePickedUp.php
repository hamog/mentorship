<?php

namespace App\DesignPattern\Behavioral\State;

class PhoneStatePickedUp implements PhoneState
{
    public function pickUp(): PhoneState
    {
        throw new Exception("already picked up");
    }

    public function hangUp(): PhoneState
    {
        return new PhoneStateIdle();
    }

    public function dial(): PhoneState
    {
        return new PhoneStateCalling();
    }
}
