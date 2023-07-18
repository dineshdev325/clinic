<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<link rel="stylesheet" href="custom.css" />
<script src="https://cdn.tailwindcss.com"></script>
<script src="/tailwind.config.js"></script>

<body>
    <div>
    {{-- @dd($patient) --}}
        <!-- main div open  -->
        <div class="lg:mx-40 lg:pt-28">
            <!-- parent div open  -->
            <div>
                <div class="flex justify-center mt-10 lg:hidden">

                    <img src="/assets/icons/booking-success.svg" alt="">
                </div>
                <h1 class="px-10 mt-4 text-xl font-bold text-center font-title lg:text-2xl">Appointment Successfully
                    Booked</h1>
                <span class="text-center block px-5 text-[#6B7280] mt-3 lg:text-xl lg:mt-9">Thank you for trusting us
                    with your
                    healthcare.
                    We're looking forward to helping you!"</span>
            </div>

           

@livewire('details.detail',['payment_details'=>$patient])
            <div class="mt-7 px-7 lg:hidden">

                <h1 class="text-base font-medium text-center underline ">What Happens Next?</h1>

                <div class="relative ">
                    <div class="border bg-black rounded-full w-1.5 h-1.5 absolute left-0 top-2"></div>
                    <p class="mt-4 ml-5 text-sm text-start">At your appointment time, please ensure you have a stable
                        internet connection and your WhatsApp is open. Our doctor will initiate the video call.</p>
                </div>

                <div class="relative ">
                    <div class="border bg-black rounded-full w-1.5 h-1.5 absolute left-0 top-2"></div>
                    <p class="mt-4 ml-5 text-sm text-start">A confirmation message with all these details and further
                        instructions for the consultation has been sent to your WhatsApp.</p>
                </div>
            </div>
            <div class="px-5 ">
                <button
                    class="text-black lg:hidden bg-[#A4CB6A] font-semibold mb-6 mt-7 w-full text-center py-3 rounded-lg border-t border-r-4 border-l border-[#212245]   border-r-[#212245] border-b-4 border-b-[#212245] border-t-[#212245]">Back
                    to Home</button>

            </div>

            <div class="hidden mt-7 lg:mt-14 lg:px-7 lg:block">
                <h1 class="text-base font-medium text-center underline ">What Happens Next?</h1>

                <ul class="text-sm text-center list-disc list-inside lg:mt-7 ">
                    <li>At your appointment time, please ensure you have a stable
                        internet connection and your WhatsApp is open. Our doctor will initiate the video call.</li>
                    <ul class="text-sm text-center list-disc list-inside lg:mt-5">
                        <li>A confirmation message with all these details and further
                            instructions for the consultation has been sent to your WhatsApp.</li>
                    </ul>
                </ul>
            </div>

            <div class="justify-center hidden lg:flex lg:mt-12">
                <a href="/"
                    class="text-black  bg-[#A4CB6A] font-semibold mb-6 mt-6 lg:px-28 lg:py-2 lg:text-base text-center py-3 rounded-lg border-t border-r-4 border-l border-[#212245]   border-r-[#212245] border-b-4 border-b-[#212245] border-t-[#212245]">Back
                    to Home</a>

            </div>


        </div> <!-- parent div close  -->
    </div> <!-- main div close  -->
</body>

</html>