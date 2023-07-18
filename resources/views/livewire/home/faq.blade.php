<div>
    <div class="container px-5 mx-auto md:px-20">
        <!--container start-->

        <div class="pt-6 md:py-12">
            <div class="pt-3">
                <h1 class="text-xl font-bold text-center font-title">FAQ</h1>
            </div>
            <div class="container mx-auto md:px-20 md:pt-10">
                <div class="mt-8">
                    <!-- 1 -->
                    <div  x-data="{open:false}" class="border-black border-y-2">
                        <div @click="open=!open" class="flex justify-between py-5 ">
                            <h2 class="font-semibold text-md">How do I book an appointment?</h2>
                            <div>
                                <img :src="open?'/assets/icons/up_arrow.svg':'/assets/icons/down_arrow.svg'"  alt="">
                            </div>
                        </div>
                        <p x-show="open" class="pb-2" x-transition.delay.50ms>To book an appointment, simply go to our "Book an Appointment" page, select the doctor you'd like to consult with,
                        choose an available slot that suits your schedule, and follow the steps for prepayment. You'll receive a confirmation
                        email once your appointment is booked.
                        </p>
                    </div>
                   

                    <!-- 2 -->
                    <div x-data="{open:false}" class="border-b-2 border-black">
                        <div @click="open=!open" class="flex justify-between py-5 ">
                            <h2 class="font-semibold text-md">How does an online consultation work?</h2>
                            <div>
                                <img :src="open?'/assets/icons/up_arrow.svg':'/assets/icons/down_arrow.svg'" alt="">
                            </div>
                        
                        </div>
                        <p x-show="open" class="pb-2" x-transition.delay.50ms>An online consultation works much like a regular one, except it's conducted over video call. At your scheduled
                        appointment time, you'll receive a WhatsApp video call from your doctor. You can discuss your health concerns, symptoms,
                        and medical history during the call, just as you would in person.</p>
                    </div>
                   

                    <!-- 3 -->
                    <div x-data="{open:false}" class="border-b-2 border-black">
                    <div @click="open=!open" class="flex justify-between py-5 ">
                        <h2 class="font-semibold text-md">Is the online consultation secure? </h2>
                        <div>
                            <img :src="open?'/assets/icons/up_arrow.svg':'/assets/icons/down_arrow.svg'" alt="">
                        </div>
                      
                    </div>
                    
<p x-show="open" class="pb-2" x-transition.delay.50ms>Yes, our platform is designed to ensure your privacy and safety. All video calls are encrypted and none
    of the calls are
    recorded or stored.</p>
                    </div>
                    <!-- 4 -->
                    <div x-data="{open:false}">
                        <div @click="open=!open" class="flex justify-between py-5 border-black ">
                            <h2 class="font-semibold text-md">Can I get a prescription through an online consultation?</h2>
                            <div>
                                <img :src="open?'/assets/icons/up_arrow.svg':'/assets/icons/down_arrow.svg'" alt="">
                            </div>
                            
                        </div>
                       <p x-show="open" class="pb-2" x-transition.delay.50ms>Yes, if the doctor determines that you need medication, they can issue a digital prescription, which you'll receive by
                    email. You can use this to purchase your medication at your preferred pharmacy.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!--container end-->
</div>