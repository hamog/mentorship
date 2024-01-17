<?php

namespace App\DesignPattern\Creator\FactoryMethod;

use App\DesignPattern\Creator\FactoryMethod\Interviewer;

class CommunityExecutive implements Interviewer
{
    public function askQuestions()
    {
        echo 'Asking about community building';
    }
}
