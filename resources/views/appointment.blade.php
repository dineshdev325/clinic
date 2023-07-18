<!DOCTYPE html>
<html lang="en" class="scroll-smooth scroll-pt-6">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clinic</title>
    <!-- font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    {{-- ALPINE JS --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    <div class="container px-5 mx-auto my-5 " 
    >
        <!-- Schedule section start  -->
        <h1 class="hidden text-lg font-bold leading-none text-center lg:block font-title">Schedule Your Online Consultation
        </h1>
        <div class="flex gap-3 ">
            <div class="mt-1 md:hidden">
                <img src="/assets/icons/arrow.svg" alt="">
            </div>
            <div>
                <h1 class="text-lg font-bold leading-none md:hidden font-title">Schedule Your Online</h1>
                <h1 class="text-lg font-bold leading-none md:hidden font-title">Consultation</h1>
            </div>
        </div>
        <!-- Schedule section end  -->
    
        <!-- Paragraph section start  -->
        <div class="mt-4 lg:mt-10">
            <p class=" text-sm text-[#6B7280] md:text-center">Choose your preferred doctor and consultation slot.
                Fill in your details and you'll be one step away from receiving expert care from the comfort of your
                home.
            </p>
        </div>
        <!-- Paragraph section end  -->
    
        <!-- Choose Your Doctor section start  -->
        <div class=" mt-7 lg:mt-10">
            <div>
                <h1 class="font-medium md:text-center md:font-bold">Choose Your Doctor</h1>
            </div>
    
        </div>
        @livewire('appointment.appointment')
    
     
    

    @livewireScripts
</body>

</html>