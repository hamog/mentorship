<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    use HasFactory;

    public static function clearAllCaches()
    {
        if (Cache::has('settings')) {
            Cache::forget('settings');
        }
        if (Cache::has('all_settings')) {
            Cache::forget('all_settings');
        }
    }

    protected static function booted(): void
    {
        static::created(function () {
            static::clearAllCaches();
        });
        static::updated(function () {
            static::clearAllCaches();
        });
        static::deleted(function () {
            static::clearAllCaches();
        });
        static::saved(function () {
            static::clearAllCaches();
        });
    }
}
