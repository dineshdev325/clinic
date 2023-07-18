<div >

    <div class="mt-6 lg:mt-12 2xl:mx-96">
        <div class="mb-4 ">
            <h1 class="font-medium ">{{$selected_month}}</h1>
        </div>
        <!-- Date section start  -->
        <div class="flex gap-4 overflow-x-auto lg:gap-10 lg:mt-10">
            @foreach ($day_list as $day)
                <div  class=" border border-[#878787] text-center px-4 py-2 rounded cursor-pointer"
                @click="selected_date='{{$day->format('o-m-j')}}'"
                :style="selected_date=='{{$day->format('o-m-j')}}'? 'background:#212245;color:white':''"
                >
                    <h6 class="text-xs font-medium uppercase">{{$day->format('D')}}</h6>
                    <h6 class="mt-2 text-xs font-normal text-center ">{{$day->format('j')}}</h6>
                </div>
             @endforeach
         
            {{--<div class=" border border-[#D1D5D8] text-center px-4 py-2 rounded cursor-pointer">
                <h6 class=" font-medium text-xs text-[#212121]">SUN</h6>
                <h6 class=" font-normal text-xs mt-2 text-[#212121]">16</h6>
            </div> --}}
        </div>

        <!-- Date section end  -->
    </div>
</div>