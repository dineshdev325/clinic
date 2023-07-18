<?php

namespace App\Http\Livewire\Confirm;

use App\Models\Consultation;
use Livewire\Component;

class ConfirmDetails extends Component
{
    public $consultation_id;
    public $consultation_details;
public function mount(){
    $this->consultation_id=session()->get('consultation_id');
    $this->consultation_details=Consultation::with('patient','doctor')->where('id','=',$this->consultation_id)->get();
// dd($consultation_details);
    // dd($this->consultation_id);
}
    public function render()
    {
        return view('livewire.confirm.confirm-details');
    }
}
