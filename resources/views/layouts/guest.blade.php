<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/modal.js'])
    </head>
    <body class="relative overflow-hidden font-sans text-gray-900 antialiased">
        <div class="decorative-circle absolute z-0 rounded-full w-96 h-96 bg-gray-500 -left-48 top-[33rem] md:top-[48rem] lg:top-[32rem]"></div>
        <div class="decorative-circle2 absolute w-64 h-40 bg-red-500 opacity-20 right-[-50px] top-[70px] rounded-l-lg"></div>
        <div class="decorative-circle2 absolute w-32 h-20 bg-red-500 opacity-20 left-[10px] lg:left-[120px] top-[2rem] md:top-[5rem] lg:top-[70px] rounded-lg  "></div>
        <div class="decorative-circle absolute rounded-full w-20 h-20 bg-gray-500 -right-[-8rem] top-[33rem] md:top-[48rem] lg:top-[37rem]"></div>

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 place-content-center bg-[#FCF5F2]">
            <div class="flex text-4xl text-gray-500 lg:text-6xl font-[1000] font-mono">
                <h1 class="text-[#D06139]">Track</h1>.
                <h1 class="text-[#FFE83A]">Build</h1>.
                <h1 class="text-[#D06139]">Align</h1>
            </div>

            <div class="z-40 max-w-2xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg ">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
