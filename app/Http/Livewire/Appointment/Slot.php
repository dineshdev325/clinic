<?php

namespace App\Http\Livewire\Appointment;

use Livewire\Component;

use App\Models\Doctor;
use App\Models\Slot as ModelsSlot;

use Carbon\Carbon;

class Slot extends Component
{
    
    public $start_time;
    public $end_time;
public $carbon;

    public $time_slots=[];
    public $available_time_slots=[];
    protected $listeners=['available_time'=>'time_slot'];

    public function mount(){
$this->carbon=Carbon::now();

    $this->start_time=strtotime('05:30:00');
    $this->end_time=strtotime('23:30:00');
    for($start=$this->start_time;
        $start<=$this->end_time;
        $start=$start+ 30*60) {
        array_push($this->time_slots,$start);
    }
    // $this->available_time_slots=ModelsTimeSlot::with('slots')->where('')    
    
}
    public function time_slot($doctor_id,$date){
        $available_time=[];
        // $doctor_id=Doctor::where('name','like',$doctor)->pluck('id');
        $slots=ModelsSlot::with('timeslot')->where('doctors_id','=',$doctor_id)->where('date','like',$date)->get();
        if(count($slots)>0){
        $slot_array=$slots[0]->timeslot->where('is_available',false)->pluck('time');
        foreach($slot_array as $slot){
            array_push($available_time,$slot);
        }
        $this->available_time_slots=$available_time;

        }
        else{
            $this->available_time_slots=[];
        }
        
    }

    public function render()
    {
        return view('livewire.appointment.slot');
    }
}
