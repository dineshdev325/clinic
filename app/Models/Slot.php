<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;
    protected $fillable=['doctors_id','date'];
     public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doctors_id');
    }
    public function timeslot()
    {
        return $this->hasMany(TimeSlot::class,'slots_id');
    }
}
