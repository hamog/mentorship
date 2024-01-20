<?php

/**
 * We could have done this simply by having an inheritance hierarchy for the animals but,
 * then we would have to modify the animals whenever we would have to add new actions to animals.
 * But now we will not have to change them. For example, let's say we are asked to add the jump behavior to the animals,
 * we can simply add that by creating a new visitor i.e.
 */

use App\DesignPattern\Behavioral\Visitor\Dolphin;
use App\DesignPattern\Behavioral\Visitor\Jump;
use App\DesignPattern\Behavioral\Visitor\Lion;
use App\DesignPattern\Behavioral\Visitor\Monkey;
use App\DesignPattern\Behavioral\Visitor\Speak;

$monkey = new Monkey();
$lion = new Lion();
$dolphin = new Dolphin();

$speak = new Speak();
$jump = new Jump();

$monkey->accept($speak);   // Ooh oo aa aa!
$monkey->accept($jump);    // Jumped 20 feet high! on to the tree!

$lion->accept($speak);     // Roaaar!
$lion->accept($jump);      // Jumped 7 feet! Back on the ground!

$dolphin->accept($speak);  // Tuut tutt tuutt!
$dolphin->accept($jump);   // Walked on water a little and disappeared
