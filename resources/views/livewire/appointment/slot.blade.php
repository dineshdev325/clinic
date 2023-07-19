<div x-data="{
available_slot:[],

}" x-effect="available_slot=[];">


@foreach ($available_time_slots as $slot )
   <div x-init="
   available_slot.push('{{$slot}}')" ></div>
@endforeach

<div x-init="console.log(available_slot)"></div>
    {{-- MORNING SLOTS --}}
    <div class="mt-6 lg:mt-16 2xl:mx-96">
        @foreach ($time_slots as $time_slot)
        @if ($time_slot<=strtotime('12:00:00')) 
        <div class="mb-4 ">
            <h1 class="font-medium ">Morning Slots</h1>
        </div>
    @break
    @endif
    @endforeach
    <div class="grid grid-cols-3 gap-4 lg:gap-10 lg:grid-cols-6 lg:mt-10">
        @foreach ($time_slots as $time_slot)
        
        @if ($time_slot<strtotime('12:00:00')) 
        <button 
        @click="selected_time= '{{date('H:i:s',$time_slot)}}'"
            class="py-2 text-xs text-center border cursor-pointer"
        :style="
        
         available_slot.includes('{{date('H:i:s',$time_slot)}}') ||({{strtotime(date("H:i:s",time()))}} > {{strtotime(date('H:i:s',$time_slot))}} &&
        selected_date=='{{$carbon->format('o-m-j')}}')? 'border:D1D5D8;color:#6B7280;cursor: not-allowed;' :
        selected_time=='{{date('H:i:s',$time_slot)}}'? 'background-color:#212245;color:white;':'border-color:#878787'"   
        :disabled="available_slot.includes('{{date('H:i:s',$time_slot)}}') || ({{strtotime(date("H:i:s",time()))}} > {{strtotime(date('H:i:s',$time_slot))}} &&
        selected_date=='{{$carbon->format('o-m-j')}}')? true :false" 
        >
            {{date('h:i A',$time_slot)}}</button>
    @endif
    @endforeach
    </div>

{{-- AFTERNOON SLOT --}}
<div class="mt-6 lg:mt-16 2xl:mx-96">
    @foreach ($time_slots as $time_slot)
    @if ($time_slot<=strtotime('17:00:00')) <div class="mb-4 ">
        <h1 class="font-medium ">Afternon Slots</h1>
</div>
@break
@endif
@endforeach
<div class="grid grid-cols-3 gap-4 lg:gap-10 lg:grid-cols-6 lg:mt-10">
    @foreach ($time_slots as $time_slot)
    @if ($time_slot<strtotime('17:00:00') && $time_slot>=strtotime('12:00:00'))
     <button 
        @click="selected_time= '{{date('H:i:s',$time_slot)}}'"
            class="py-2 text-xs text-center border cursor-pointer"
        :style="
        
available_slot.includes('{{date('H:i:s',$time_slot)}}') ||({{strtotime(date("H:i:s",time()))}} > {{strtotime(date('H:i:s',$time_slot))}} && selected_date=='{{$carbon->format('o-m-j')}}') ? 'border:D1D5D8;color:#6B7280;cursor: not-allowed;' :
        selected_time=='{{date('H:i:s',$time_slot)}}'? 'background-color:#212245;color:white;':'border-color:#878787'"   
        :disabled="available_slot.includes('{{date('H:i:s',$time_slot)}}') || ({{strtotime(date("H:i:s",time()))}} > {{strtotime(date('H:i:s',$time_slot))}} &&
        selected_date=='{{$carbon->format('o-m-j')}}')? true :false"       
        >
            {{date('h:i A',$time_slot)}} </button>
@endif
@endforeach
</div>
{{-- Evening SLOT --}}
<div class="mt-6 lg:mt-16 2xl:mx-96">
    @foreach ($time_slots as $time_slot)
    @if ($time_slot<=strtotime('21:00:00')) <div class="mb-4 ">
        <h1 class="font-medium ">Evening Slots</h1>
</div>
@break
@endif
@endforeach
<div class="grid grid-cols-3 gap-4 lg:gap-10 lg:grid-cols-6 lg:mt-10">
    @foreach ($time_slots as $time_slot)
    @if ($time_slot<=strtotime('24:00:00') && $time_slot>=strtotime('17:00:00'))
     <button @click="selected_time= '{{date('H:i:s',$time_slot)}}'" class="py-2 text-xs text-center border cursor-pointer"
        :style="
available_slot.includes('{{date('H:i:s',$time_slot)}}') ||({{strtotime(date("H:i:s",time()))}} > {{strtotime(date('H:i:s',$time_slot))}} &&
        selected_date=='{{$carbon->format('o-m-j')}}') ? 'border:D1D5D8;color:#6B7280;cursor: not-allowed;' :
        selected_time=='{{date('H:i:s',$time_slot)}}'? 'background-color:#212245;color:white;':'border-color:#878787'"   
        :disabled="available_slot.includes('{{date('H:i:s',$time_slot)}}') || ({{strtotime(date("H:i:s",time()))}} > {{strtotime(date('H:i:s',$time_slot))}} &&
        selected_date=='{{$carbon->format('o-m-j')}}')? true :false" 
        >
        {{date('h:i A',$time_slot)}} </button>
@endif
@endforeach
</div>
<!-- Button section start  -->
    <div class="flex justify-center mt-10 lg:mt-20">
        <button @click="redirect_to_patient"
        
            class="text-black lg:w-[40%] bg-[#A4CB6A] font-semibold mb-6 w-full text-center py-3 rounded-lg border-[#212245] border-t border-r-4 border-b-4 border-l">Proceed
            to Next</button>
    </div>
    <!-- Button section end  -->
</div>