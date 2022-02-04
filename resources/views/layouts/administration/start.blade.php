<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ecommerce-@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    {{-- <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}" /> --}}
    {{-- <script src="{{ asset('alpinejs/dist/alpine.min.js') }}" defer></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script> --}}

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles
    @stack('css')
    {{-- cdn Font awesome --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Scripts -->

    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">

        @include('layouts.administration.sidebar')
        <div class="flex flex-col flex-1 w-full">
            {{-- NavBar --}}
            @include('layouts.administration.navbar')
            <main class="h-full overflow-y-auto">
                <div class="container px-6 py-4 mx-auto grid">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    @stack('js')
    @stack('modals')
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    @livewireScripts

</body>

</html>
