<?php

namespace App\DesignPattern\Behavioral\ChainOfResponsibility;

use App\DesignPattern\Behavioral\ChainOfResponsibility\Account;

class Paypal extends Account
{
    protected $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}
