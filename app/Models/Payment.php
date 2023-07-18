<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['patient_details_id', 'consultations_id', 'amount', 'payment_status', 'transaction_id', 'payment_date'];
       public function patient()
    {
        return $this->belongsTo(PatientDetails::class,'patient_details_id');
    }

    public function consultation()
    {
        return $this->belongsTo(Consultation::class,'consultations_id');
    }

}
