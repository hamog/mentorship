<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorSurgery extends Model
{
    public function doctor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function surgery(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Surgery::class);
    }

    public function doctorRole(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(DoctorRole::class, 'doctor_role_id');
    }

    public function invoice(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Invoice::class, 'invoice_id');
    }

    public function getDoctorQuotaAmount(): int
    {
        return round(($this->doctorRole->quota / 100) * $this->surgery->getTotalPrice());
    }

}
