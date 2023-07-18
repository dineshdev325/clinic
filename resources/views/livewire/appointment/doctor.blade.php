<div >

    <div class="justify-between gap-16 md:flex 2xl:mx-96 lg:mt-7">
        @foreach ($doctors as $doctor)
            
        <!-- Male section start  -->
        {{-- border-[#212245] border-t border-r-4 border-b-4 border-l --}}
        <div  class="flex px-5 py-5 mt-5 rounded-lg " 
        :class="selected_doctor=={{$doctor->id}}? 'border-[#212245] border-t border-r-4 border-b-4 border-l':'shadow-[0px_3px_8px_0px_rgba(0,0,0,0.14)]'"
        @click="selected_doctor={{$doctor->id}}">
            <div>
                <img src="{{$doctor->image}}" alt="" class="w-20 ">
            </div>
            <div class="ml-5 ">
                <h3 class="text-sm font-medium md:font-bold">Dr. {{$doctor->name}}</h3>
                <span class=" text-xs text-[#6B7280]">{{$doctor->specialization}}</span>
                <h6 class="mt-3 text-sm font-semibold "> $ {{$doctor->amount}}</h6>
            </div>
            <div>
                <input type="checkbox" @change="selected_doctor={{$doctor->id}}" name="" id="" class=" w-4 h-4 accent-[#212245]" :checked="selected_doctor=={{$doctor->id}}? true :false">
            </div>
        </div>
        <!-- Male section end  -->


        @endforeach
    </div>
</div>
