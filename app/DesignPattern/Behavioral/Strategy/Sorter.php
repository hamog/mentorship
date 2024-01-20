<?php

namespace App\DesignPattern\Behavioral\Strategy;

class Sorter
{
    protected SortStrategy $sorterSmall;
    protected SortStrategy $sorterBig;

    public function __construct(SortStrategy $sorterSmall, SortStrategy $sorterBig)
    {
        $this->sorterSmall = $sorterSmall;
        $this->sorterBig = $sorterBig;
    }

    public function sort(array $dataset): array
    {
        if (count($dataset) > 5) {
            return $this->sorterBig->sort($dataset);
        } else {
            return $this->sorterSmall->sort($dataset);
        }
    }
}
