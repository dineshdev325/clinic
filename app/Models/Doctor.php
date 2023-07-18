<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable=['name','specialization','amount','image'];
    public function slots(){
        return $this->hasMany(Slot::class,'doctors_id');
    }
    public function consultations()
    {
        return $this->hasMany(Consultation::class,'consultations_id');
    }
}
