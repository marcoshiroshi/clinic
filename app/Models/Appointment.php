<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Status;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'comments',
        'status',
        'patient_id',
        'doctor_id',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}


