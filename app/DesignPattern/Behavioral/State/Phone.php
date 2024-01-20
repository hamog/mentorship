<?php

namespace App\DesignPattern\Behavioral\State;

class Phone
{
    private PhoneStateIdle $state;

    public function __construct()
    {
        $this->state = new PhoneStateIdle();
    }

    public function pickUp()
    {
        $this->state = $this->state->pickUp();
    }

    public function hangUp()
    {
        $this->state = $this->state->hangUp();
    }

    public function dial()
    {
        $this->state = $this->state->dial();
    }
}
