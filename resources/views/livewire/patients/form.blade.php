<div>
    <form wire:submit.prevent='patient_details'>
        <div class="container px-5 mx-auto">
            <div class="lg:grid-cols-2 lg:grid lg:gap-8 lg:items-center">
                <div class="h-32 py-4">
                    <div class="flex">
                        <h3 class="font-medium block text-sm text-[#374151] ">Full Name</h3>
                        <span class="relative text-[#B4173A] bottom-1 pl-1  text-lg">*</span>
                    </div>
                    <input type="text" name="" id=""
                        class="mt-2  focus:outline-none pl-4 shadow-[0px_1px_3px_0px_rgba(0, 0, 0, 0.07)] border border-gray-300  rounded-lg w-full py-2"
                        wire:model.debounce='full_name'>
                        @error('full_name')
                        <p class="mt-1 text-sm text-red-500 ">{{$message}}</p>
                        @enderror
                </div>
    
                <div class="h-32 py-4">
                    <div class="flex ">
                        <h3 class="font-medium text-sm text-[#374151] ">Email</h3>
                        <span class="text-[#B4173A]  relative bottom-1 pl-1 text-lg">*</span>
                    </div>
                    <input type="text" name="" id="" wire:model.debounce='email'
                        class="mt-2 focus:outline-none pl-4 shadow-[0px_1px_3px_0px_rgba(0, 0, 0, 0.07)]  border border-gray-300 rounded-lg w-full py-2">
               @error('email')
                <p class="mt-1 text-sm text-red-500 ">{{$message}}</p>
                @enderror
                    </div>
    
            </div>
    
    
            <div class="py-4 lg:py-3">
                <div class="relative flex">
                    <h3 class="font-medium block text-sm text-[#374151] ">Phone Number</h3>
                    <span class="text-[#B4173A]  relative bottom-1 pl-1 text-lg">*</span>
                </div>
                <input type="text" name="" id="" wire:model.debounce='phone_number'
                    class="mt-2 form-control [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none pl-4 focus:outline-none shadow-[0px_1px_3px_0px_rgba(0, 0, 0, 0.07)]  border border-gray-300 rounded-lg  w-full py-2">
           @error('phone_number')
            <p class="mt-1 text-sm text-red-500">{{$message}}</p>
            @enderror
                </div>
    
            <div class="lg:py-3">
                <textarea name="" id="" cols="10" rows="8" placeholder="Briefly describe the problem"
                    wire:model.debounce="health_concerns"
                    class="w-full pt-3 pl-4 placeholder:text-base focus:outline-none placeholder:font-normal  placeholder:text-[#374151]  shadow-[0px_1px_3px_0px_rgba(0, 0, 0, 0.07)] border border-gray-300 rounded-lg"></textarea>
            @error('health_concerns')
            <p class="mt-1 text-sm text-red-500">{{$message}}</p>
            @enderror
                </div>
            <button type="submit"
                class="text-black lg:hidden bg-[#A4CB6A] font-semibold mb-6 mt-48 w-full text-center py-3 rounded-lg border-t border-r-4 border-l border-[#212245]   border-r-[#212245] border-b-4 border-b-[#212245] border-t-[#212245]">Proceed
                to Next</button>
    
        </div>
    
        <div class="lg:border-t lg:border-t-[Grey/300] lg:mt-3 lg:ml-2 lg:mr-2"></div>
    
        <div class="hidden lg:pt-6 lg:block lg:px-4">
            <button type="submit"
                class="text-black text-sm  bg-[#A4CB6A] font-semibold mb-6  text-center py-1.5 px-4 rounded-lg">Confirm
                & Pay</button>
                {{-- <input type="submit"
                    class="text-black text-sm  bg-[#A4CB6A] font-semibold mb-6  text-center py-1.5 px-4 rounded-lg" value="Confirm & Pay"> --}}
            <a href="/appointment"
                class="border text-black text-sm border-[#D1D5DB] font-semibold shadow-[0px_1px_3px_0px_rgba(0, 0, 0, 0.07)] ml-6 rounded-lg py-1.5 px-4">Cancel
            </a>
    
        </div>
    </form>
</div>
