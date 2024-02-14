<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function surgeries(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(DoctorSurgery::class, 'invoice_id');
    }
}
