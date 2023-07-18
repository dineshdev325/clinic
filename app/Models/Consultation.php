<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable = ['doctors_id', 'patient_details_id', 'consultation_date_time', 'health_concerns', 'is_paid'];

       public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doctors_id');
    }

    public function patient()
    {
        return $this->belongsTo(PatientDetails::class,'patient_details_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
