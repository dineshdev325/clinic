<?php

namespace App\Http\Livewire\Patients;

use App\Models\Consultation;
use App\Models\PatientDetails;
use Livewire\Component;

class Form extends Component
{
    public $full_name;
    public $email;
    public $phone_number;
    public $health_concerns;

    //INSERT DATA INTO PATIENT AND CONSULTATION DETAILS 
    public function patient_details()
    {
        //VALIDATE PATIENT DETAILS
        $this->validate([
            'full_name' => 'required || alpha ||max:255',
            'email' => 'required || email',
            'phone_number' => 'required ',
            'health_concerns' => 'required',

        ]);
        //GET SESSION DATA
        $selected_doctor_id=session()->get('selected_doctor_id');
        $selected_date=session()->get('selected_date');
        $selected_time=session()->get('selected_time');
 //INSERT PATIENTS DATA
      $patient=new PatientDetails;
        $patient->full_name=$this->full_name;
        $patient->email=$this->email;
        $patient->phone_number=$this->phone_number;
      $patient->save();
      $patient_id=$patient->id;
// INSERT CONSULTATION DATA
      $consultation =new Consultation;
        $consultation->doctors_id=$selected_doctor_id;
        $consultation->patient_details_id=$patient_id;
        $consultation->consultation_date_time="$selected_date  $selected_time";
        $consultation->health_concerns= $this->health_concerns;
        $consultation->save();
      $consultation_id=$consultation->id;
      if($consultation_id){
        session(['consultation_id'=>$consultation_id]);
        return redirect()->to('/confirm');
      }
    }

 
    public function render()
    {
        return view('livewire.patients.form');
    }
}
