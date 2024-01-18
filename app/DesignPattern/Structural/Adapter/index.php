<?php

use App\DesignPattern\Structural\Adapter\Hunter;
use App\DesignPattern\Structural\Adapter\WildDog;
use App\DesignPattern\Structural\Adapter\WildDogAdapter;

$wildDog = new WildDog();
$wildDogAdapter = new WildDogAdapter($wildDog);

$hunter = new Hunter();
$hunter->hunt($wildDogAdapter);
