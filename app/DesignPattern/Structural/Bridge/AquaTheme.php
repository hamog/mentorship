<?php

namespace App\DesignPattern\Structural\Bridge;

use App\DesignPattern\Structural\Bridge\Theme;

class AquaTheme implements Theme
{

    public function getColor()
    {
        return 'Light blue';
    }
}
