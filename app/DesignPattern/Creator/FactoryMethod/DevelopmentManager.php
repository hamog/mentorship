<?php

namespace App\DesignPattern\Creator\FactoryMethod;

use App\DesignPattern\Creator\FactoryMethod\HiringManager;

class DevelopmentManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}
