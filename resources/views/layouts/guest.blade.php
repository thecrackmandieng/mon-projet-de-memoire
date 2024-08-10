<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GDM-TIC</title>
    <!-- Exemple d'inclusion de jQuery et de Bootstrap JavaScript via CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- CSS pour l'image d'arrière-plan -->
    <style>
        body {
            background-image: url('https://uadb.edu.sn/images/img-slide/SLID-SATIC.jpg');
            background-size: cover; /* Ajuste l'image pour qu'elle couvre tout l'arrière-plan */
            background-position: center; /* Centre l'image de fond */
            background-repeat: no-repeat; /* Empêche la répétition de l'image */
        }
    </style>
</head>
<body class="font-sans text-gray-900 antialiased">
    <!-- Barre de recherche -->
<div class="bg-gray-800 py-2" style="background-color: #0067A3; color: white;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"> <!-- Modification de la classe max-w-7xl à max-w-5xl -->
        <div class="flex justify-between items-center h-10">
            <div class="flex-shrink-0">
                <img class="h-8 w-auto" src="https://uadb.edu.sn/images/img-logo-uadb/nouveau-logo-uadb.png"/>
            </div>
            <div class="flex flex-1 justify-center sm:justify-end">
                <div class="w-full sm:max-w-xs">
                    <label for="search" class="sr-only">Search</label>
                    <div class="relative text-gray-400 focus-within:text-gray-600">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <!-- Heroicon name: search -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M9 17a8 8 0 100-16 8 8 0 000 16zM18.707 17.293a1 1 0 01-1.414 1.414l-5.3-5.3a7 7 0 111.414-1.414l5.3 5.3z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input id="search" name="search" class="block w-full bg-gray-900 border border-transparent rounded-md py-2 pl-10 pr-3 text-gray-100 placeholder-gray-400 focus:outline-none focus:bg-white focus:text-gray-900 sm:text-sm" placeholder="Search" type="search" style="background-color: #0067A3; color: white;">
                    </div>
                </div>
                <!-- Les instructions suivantes concernent la navigation -->
                @if (Route::has('login'))
                    <nav class="ml-4 flex items-center">
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="ml-4 px-3 py-2 text-white rounded-md text-sm font-medium"
                            >
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="ml-4 px-3 py-2 text-white rounded-md text-sm font-medium"
                            >
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="ml-4 px-3 py-2 text-white rounded-md text-sm font-medium"
                                >
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </div>
</div>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <a href="/">
                <img src="https://uadb.edu.sn/images/img-logo-uadb/nouveau-logo-uadb.png" class="block h-9 w-auto" alt="Votre Logo" />
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
