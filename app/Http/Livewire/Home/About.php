<?php

namespace App\Http\Livewire\Home;

use App\Models\Doctor;
use Livewire\Component;

class About extends Component
{
     public $doctors;
     protected $listeners=['selected_doctor'];
     public $doctor_id;
    public function mount(){
    $this->doctors=Doctor::all();
    }
 public function selected_doctor($doctor_id){
        $this->doctor_id=$doctor_id;
        dd($doctor_id);
       return view('livewire.appointment.appointment',compact('doctor_id'));

    }
    public function render()
    {
        return view('livewire.home.about');
    }
}
