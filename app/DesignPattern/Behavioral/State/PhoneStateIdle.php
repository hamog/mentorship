<?php

namespace App\DesignPattern\Behavioral\State;

class PhoneStateIdle implements PhoneState
{
    public function pickUp(): PhoneState
    {
        return new PhoneStatePickedUp();
    }

    public function hangUp(): PhoneState
    {
        throw new Exception("already idle");
    }

    public function dial(): PhoneState
    {
        throw new Exception("unable to dial in idle state");
    }
}
