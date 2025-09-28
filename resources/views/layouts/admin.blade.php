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
        @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/global.js','resources/js/modal.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-[#F3F3F3] flex max-w-screen">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main class="w-full">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
