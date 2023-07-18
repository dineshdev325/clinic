<?php

namespace App\Http\Livewire\Appointment;

use Carbon\Carbon;
use Livewire\Component;

class Month extends Component
{ 
    public $selected_month;
    public $selected_date;
    public $day_list=[];
    public function mount(){
        $this->selected_month=Carbon::now()->format('F');
        // $this->selected_date=Carbon::now()->format('D');
        for($starting_day=$this->selected_date;$starting_day<=10;$starting_day++){
           array_push($this->day_list,Carbon::now()->addDays($starting_day));
        }
        // dd($this->day_list);
    }

    public function render()
    {
        return view('livewire.appointment.month');
    }
}
