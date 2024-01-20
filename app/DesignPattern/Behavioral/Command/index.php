<?php

/**
 * Command pattern can also be used to implement a transaction based system. Where you keep maintaining
 * the history of commands as soon as you execute them. If the final command is successfully executed,
 * all good otherwise just iterate through the history and keep executing the undo on all the executed commands.
 */

use App\DesignPattern\Behavioral\Command\Bulb;
use App\DesignPattern\Behavioral\Command\RemoteControl;
use App\DesignPattern\Behavioral\Command\TurnOff;
use App\DesignPattern\Behavioral\Command\TurnOn;

$bulb = new Bulb();

$turnOn = new TurnOn($bulb);
$turnOff = new TurnOff($bulb);

$remote = new RemoteControl();
$remote->submit($turnOn); // Bulb has been lit!
$remote->submit($turnOff); // Darkness!
