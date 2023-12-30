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
        Category::class => 'دسته بندی'
    ];


    public static function getAllCategories()
    {
        return Category::where('type', 'news')->select(['id', 'name'])->get();
    }
}
