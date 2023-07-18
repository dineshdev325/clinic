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
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
        <!--bg color-->
        <div class="bg-[#DCEAC6]" >
        <div class="container bg-[#DCEAC6] px-5 mx-auto md:px-0 lg:px-20">
         @livewire('home.navigation')
         @livewire('home.header')
        </div>
        </div>
         @livewire('home.benefits')
         <div class="container px-5 mx-auto md:px-20">
            @livewire('home.about')
            @livewire('home.testimonial')
         </div>
         @livewire('home.how-its-work')
         @livewire('home.faq')
         @livewire('home.footer')
    @livewireScripts
</body>
</html>