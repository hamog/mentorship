<?php

namespace App\DesignPattern\Creator\FactoryMethod;

use App\DesignPattern\Creator\FactoryMethod\Interviewer;

class Developer implements Interviewer
{
    public function askQuestions()
    {
        echo 'Asking about design patterns!';
    }
}
