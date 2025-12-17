<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'SDIT Citra Islamic School') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { 
            font-family: 'Inter', sans-serif; 
            scroll-behavior: smooth; 
        }
    </style>
</head>

<body class="bg-gradient-to-br from-emerald-50 via-sky-50 to-white text-slate-800 antialiased">

    {{-- NAVBAR --}}
    @include('components.public.navbar')

    {{-- PAGE CONTENT: DIGANTI MENJADI @yield('content') --}}
    <main class="min-h-screen">
        @yield('content') {{-- <-- PERBAIKAN FATAL ERROR DI SINI --}}
    </main>

    {{-- FOOTER HANYA SATU — JANGAN TARUH FOOTER DI LANDING --}}
    @include('components.public.footer')

</body>
</html>