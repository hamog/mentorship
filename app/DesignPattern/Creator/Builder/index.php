<?php

use App\DesignPattern\Creator\Builder\BurgerBuilder;

$burger = (new BurgerBuilder(14))
    ->addPepperoni()
    ->addLettuce()
    ->addTomato()
    ->build();
