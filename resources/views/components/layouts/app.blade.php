<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 text-gray-800">

    <!-- Navbar -->
    @include('layouts.navigation')

    <!-- Header -->
    @yield('header')

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto mt-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow rounded-lg p-6">
            @yield('content')
        </div>
    </main>

</body>
</html>
