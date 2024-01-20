<?php

namespace App\DesignPattern\Behavioral\State;

class PhoneStateCalling implements PhoneState
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
        throw new Exception("already dialing");
    }
}
