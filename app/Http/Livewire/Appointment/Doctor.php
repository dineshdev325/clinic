<?php

namespace App\Http\Livewire\Appointment;

use App\Models\Doctor as ModelsDoctor;
use Livewire\Component;

class Doctor extends Component
{

    public $doctors;
    public function mount(){
    $this->doctors=ModelsDoctor::all();
    }

    public function render()
    {
        return view('livewire.appointment.doctor');
    }
}
