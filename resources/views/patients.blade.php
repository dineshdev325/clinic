<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class=" lg:bg-black/40 lg:px-80 lg:pt-28 lg:pb-80">
        <!-- main div open  -->
        <div class="container mx-auto lg:bg-white rounded-xl">
            <!-- parent div open  -->
            <div class="flex items-center gap-3 py-6 ml-4 lg:py-0 lg:pt-3">
                
                <a href="/appointment"><img src="/assets/icons/left-arrow.svg" alt="" class="w-5 cursor-pointer lg:hidden"></a>
                <h1 class="text-lg font-bold font-title">Your Information</h1>

            </div>
            <div class="lg:border-b lg:border-b-[Grey/300] lg:ml-2 lg:mr-2 lg:mt-3"></div>
    
    @livewire('patients.form')        
            
        </div> <!-- parent div open  -->
    </div> <!-- main div close  -->
    @livewireScripts
</body>

</html>