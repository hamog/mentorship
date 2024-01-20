<?php

namespace App\DesignPattern\Behavioral\Observer;

class JobPost
{
    protected string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
