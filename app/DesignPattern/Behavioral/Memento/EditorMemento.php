<?php

namespace App\DesignPattern\Behavioral\Memento;

class EditorMemento
{
    protected string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }
}
