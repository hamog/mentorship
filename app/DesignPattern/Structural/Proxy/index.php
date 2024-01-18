<?php

use App\DesignPattern\Structural\Proxy\LabDoor;
use App\DesignPattern\Structural\Proxy\SecuredDoor;

$door = new SecuredDoor(new LabDoor(), 'secret');
$door->open('invalid'); // Big no! It ain't possible.

$door->open('$ecr@t'); // Opening lab door
$door->close(); // Closing lab door
