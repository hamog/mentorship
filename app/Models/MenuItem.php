<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class MenuItem extends Model implements Sortable
{
    use SortableTrait;

    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];


    const MODELS = [
        Category::class => 'دسته بندی',
        User::class => 'کاربر',
    ];


    public static function getModelItems(): array
    {
        $items = [];

        foreach (array_keys(static::MODELS) as $model) {
            $items[$model] = app($model)->all();
        }

        return $items;
    }
}
