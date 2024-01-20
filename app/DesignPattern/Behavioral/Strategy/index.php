<?php

use App\DesignPattern\Behavioral\Strategy\BubbleSortStrategy;
use App\DesignPattern\Behavioral\Strategy\QuickSortStrategy;
use App\DesignPattern\Behavioral\Strategy\Sorter;

$smallDataset = [1, 3, 4, 2];
$bigDataset = [1, 4, 3, 2, 8, 10, 5, 6, 9, 7];

$sorter = new Sorter(new BubbleSortStrategy(), new QuickSortStrategy());

$sorter->sort($smallDataset); // Output : Sorting using bubble sort

$sorter->sort($bigDataset); // Output : Sorting using quick sort
