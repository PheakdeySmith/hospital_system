<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'total_amount',
        'invoice_date',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
