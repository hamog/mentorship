<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait ModelImageTrait
{
    public function getImage()
    {
        return Storage::disk('public')
            ->url($this->attributes['image']);
    }
}
