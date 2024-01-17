<?php

use App\DesignPattern\Creator\FactoryMethod\DevelopmentManager;
use App\DesignPattern\Creator\FactoryMethod\MarketingManager;

$devManager = new DevelopmentManager();
$devManager->takeInterview(); // Output: Asking about design patterns

$marketingManager = new MarketingManager();
$marketingManager->takeInterview(); // Output: Asking about community building.
