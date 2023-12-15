<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'med_name',
        'dosage',
    ];

    public function medicalRecord()
    {
        return $this->belongsTo(MedicalRecord::class, 'record_id');
    }
}
