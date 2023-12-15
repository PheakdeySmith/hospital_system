<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surgery extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 'surgeon_id', 'surgery_date', 'procedure_name'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function surgeon()
    {
        return $this->belongsTo(Doctor::class, 'surgeon_id');
    }
}
