<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use HasFactory;
    protected $fillable=['slots_id','time','is_available'];
      public function slots()
    {
        return $this->belongsTo(Slot::class,'slots_id');
    }
}
