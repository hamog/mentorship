<?php

namespace App\DesignPattern\Behavioral\Mediator;

interface ChatRoomMediator
{
    public function showMessage(User $user, string $message);
}
