<?php

namespace App\DesignPattern\Creator\FactoryMethod;

use App\DesignPattern\Creator\FactoryMethod\HiringManager;

class MarketingManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }
}
