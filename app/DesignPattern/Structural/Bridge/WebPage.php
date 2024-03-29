<?php

namespace App\DesignPattern\Structural\Bridge;

interface WebPage
{
    public function __construct(Theme $theme);
    public function getContent();
}
