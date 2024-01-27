<?php

namespace App\Models;

use App\Traits\ModelImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use ModelImageTrait;

    protected $fillable = [
        'name', 'email'
    ];

    public function getNameAttr(): string
    {
        return 'My Name';
    }
}

$category = new Category();
$category->getImage();
