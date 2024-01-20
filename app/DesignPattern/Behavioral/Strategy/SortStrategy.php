<?php

namespace App\DesignPattern\Behavioral\Strategy;

interface SortStrategy
{
    public function sort(array $dataset): array;
}
