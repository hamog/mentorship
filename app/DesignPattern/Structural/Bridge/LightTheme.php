<?php

namespace App\DesignPattern\Structural\Bridge;

use App\DesignPattern\Structural\Bridge\Theme;

class LightTheme implements Theme
{

    public function getColor()
    {
        return 'Off white';
    }
}
