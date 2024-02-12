<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surgery extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_name',
        'patient_national_code',
        'document_number',
        'description',
        'surgeried_at',
        'released_at'
    ];
}
