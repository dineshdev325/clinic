<?php

namespace App\Http\Livewire\Details;

use App\Models\Consultation;
use App\Models\Doctor;
use App\Models\PatientDetails;
use Livewire\Component;

class Detail extends Component
{

    public $patient;
    public $payment_details;
    public $doctor;
    public $consultation;
    public function mount(){
        $this->patient=PatientDetails::where('id',$this->payment_details[0]->patient_details_id)->get();
        $this->consultation=Consultation::where('id',$this->payment_details[0]->consultations_id)->get();
        $this->doctor=Doctor::where('id',$this->consultation[0]->doctors_id)->get();
    }
    public function render()
    {
        return view('livewire.details.detail');
    }
}
