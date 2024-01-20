<?php

namespace App\DesignPattern\Behavioral\Mediator;

class User
{
    protected string $name;
    protected ChatRoomMediator $chatMediator;

    public function __construct(string $name, ChatRoomMediator $chatMediator) {
        $this->name = $name;
        $this->chatMediator = $chatMediator;
    }

    public function getName() {
        return $this->name;
    }

    public function send($message) {
        $this->chatMediator->showMessage($this, $message);
    }
}
