<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surgery extends Model
{
    use HasFactory;

    protected $fillable = [
        'basic_insurance_id',
        'supp_insurance_id',
        'patient_name',
        'patient_national_code',
        'document_number',
        'description',
        'surgeried_at',
        'released_at'
    ];

    public function getTotalPrice()
    {
        return $this->operations->sum('price');
    }

    public function operations(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Operation::class, 'operation_surgery')
            ->withPivot(['amount']);
    }

    public function doctors(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Doctor::class, 'doctor_surgery')
            ->withPivot(['doctor_role_id']);;
    }
}
