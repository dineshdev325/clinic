<?php

namespace App\Http\Livewire\Appointment;

use App\Models\Slot;
use App\Models\TimeSlot;
use Carbon\Carbon;
use Livewire\Component;

class Appointment extends Component
{
public $carbon;
public $doctor_id;
protected $listeners=['add_booking_details','selected_doctor'];
public function mount(){
$this->carbon=Carbon::now();
}
// STORE DATA TO DB
public function add_booking_details($doctor_id,$date,$time){
 session(['selected_doctor_id'=>$doctor_id]);
 session(['selected_date'=>$date]);
 session(['selected_time'=>$time]);
 return redirect()->to('/patient');

}
 public function selected_doctor($doctor_id){
        $this->doctor_id=$doctor_id;
return view('livewire.appointment.appointment',compact('doctor_id'));

    }
   
    public function render()
    {
        return view('livewire.appointment.appointment');
    }
}
