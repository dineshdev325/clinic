<div x-data="{
    selected_doctor:1,
    selected_date:'{{$carbon->format('o-m-j')}}',
    selected_time:'',
    redirect_to_patient(){
    if(this.selected_time){
        Livewire.emit('add_booking_details',this.selected_doctor,this.selected_date,this.selected_time)
    {{-- window.location.href='/patient' --}}
    }
    }
   
   
}"  x-effect="Livewire.emit('available_time',selected_doctor,selected_date)">

<!-- Desktop male & female flex section start  -->
    @livewire('appointment.doctor')
    <!-- Desktop male & female flex section end  -->
    
    <!-- Choose Your Doctor section end  -->
    
    <!-- June section start  -->
    @livewire('appointment.month')
    <!-- June section end  -->
    
    @livewire('appointment.slot')
      @if (session()->has('message'))

            <div class="p-2 text-white bg-red-500">

                {{ session('message') }}

            </div>

        @endif

</div>
