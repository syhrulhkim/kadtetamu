<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Kad Tetamu') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Poppins:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite('resources/css/app.css')
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Style -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />  
        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }
        </style>
        
    </head>
    <body class="antialiased">
        <div class="h-auto bg-white-100">
            {{-- @include('layouts.navigation') --}}

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @yield('home')
            </main>
        </div>
    </body>
</html>
