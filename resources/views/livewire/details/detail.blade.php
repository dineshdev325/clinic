<div class="lg:px-20 lg:mt-6">
    <h3 class="px-5 mt-5 text-lg font-medium lg:hidden">Your Appointment Details</h3>
    <div class="lg:flex lg:justify-center lg:gap-16">
        <div class="px-5 mt-4 lg:w-[45%] lg:min-w-max">
            <h2 class="hidden lg:font-medium lg:text-lg lg:text-center lg:block lg:mt-5">Your Appointment
                Details</h2>
            <div
                class=" shadow-[0px_1px_3px_0px_rgba(0, 0, 0, 0.07) border rounded-lg py-5  lg:pt-0 pb-3 lg:pb-0 lg:w-full lg:mt-10">
                <div class="flex gap-6 px-4 lg:px-4 lg:py-6 lg:items-center">
                    <img src="{{$doctor[0]->image}}" alt="">
                    <span class="text-lg font-medium">Dr. {{Str::ucfirst($doctor[0]->name)}}</span>
                </div>
                <div class="border-b border-b-[#D1D5D8] ml-2 mr-2 mb-3 mt-3 lg:mt-0 lg:mb-0 lg:border">
                </div>
                <div class="flex justify-between gap-3 px-4 mt-4 lg:mt-0 lg:py-6 lg:flex lg:justify-between">
                    <div class="flex items-center gap-2 font-normal lg:flex lg:justify-between lg:items-center">
                        <img src="/assets/icons/calender.svg" alt="">
                        <span>{{date('j-m-Y',strtotime(substr($consultation[0]->consultation_date_time,0,10)))}}</span>
                    </div>
                    <div class="flex items-center gap-2 font-normal">
                        <img src="/assets/icons/time.svg" alt="">
                        <span>
                            {{-- {{substr($consultation[0]->consultation_date_time,10)}} --}}
                            {{date('h:i A',strtotime(substr($consultation[0]->consultation_date_time,10)))}}
                        </span>
                    </div>

                </div>
            </div>
        </div>


        <div class="px-5 mt-5 lg:mt-4 lg:w-[40%] lg:min-w-max">
            <h3 class="hidden px-5 mt-4 text-lg font-medium lg:text-center lg:block">Payment Details</h3>
            <div class="border lg:py-4 shadow-[0px_1px_3px_0px_rgba(0, 0, 0, 0.07)] rounded-lg lg:mt-10 lg:py-7">
                <h1 class="px-3 py-3 text-lg font-medium lg:hidden">Payment Details</h1>
                <div class="flex justify-between gap-3 px-6 ">
                    <span class="font-normal lg:text-[#6B7280]">Consultation Fees</span>
                    <span class="text-[#6B7280]">${{$payment_details[0]->amount}}</span>
                </div>
                <div class="flex justify-between px-6 py-3 lg:py-3">

                    <span class="font-normal text-[#6B7280]"> VAT (5%)</span>
                    <span class="text-[#6B7280]">0</span>
                </div>
                <div class="border-b border-b-[#878787] ml-2 mr-2 mt-2 mb-3 lg:mt-0 lg:mb-0"></div>

                <div class="flex justify-between gap-3 px-6 pb-4 lg:pb-0 lg:py-4">
                    <span class="font-normal">Total Payable</span>
                    <span class="text-black">${{$payment_details[0]->amount}}</span>
                </div>

            </div>
        </div>
    </div>
</div>