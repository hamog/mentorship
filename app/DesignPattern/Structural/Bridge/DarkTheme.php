<?php

namespace App\DesignPattern\Structural\Bridge;

use App\DesignPattern\Structural\Bridge\Theme;

class DarkTheme implements Theme
{

    public function getColor()
    {
        return 'Dark Black';
    }
}
