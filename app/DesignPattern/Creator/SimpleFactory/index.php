<?php

// Make me a door of 100x200
use App\DesignPattern\Creator\SimpleFactory\DoorFactory;

$door = DoorFactory::makeDoor(100, 200);

echo 'Width: ' . $door->getWidth();
echo 'Height: ' . $door->getHeight();

// Make me a door of 50x100
$door2 = DoorFactory::makeDoor(50, 100);
