@props(['title' => 'Dashboard Ortu'])

<!DOCTYPE html>
<html lang="id" :class="{ 'dark': dark }" x-data="darkMode()" x-init="init()">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ? $title . ' | Ortu Panel' : 'Ortu Panel' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>[x-cloak]{display:none!important;}</style>
</head>
<body class="h-full antialiased bg-gray-100 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300">

    {{-- Navbar Ortu --}}
    @include('components.ortu-navbar')

    {{-- Main Content --}}
    <main class="flex-1 w-full p-6 max-w-7xl mx-auto">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="bg-white dark:bg-gray-800 text-center py-4 shadow-inner mt-6">
        &copy; {{ date('Y') }} Sekolah | Ortu Panel
    </footer>

    <script>
    function darkMode() {
        return {
            dark: localStorage.getItem('dark') === 'true' || false,
            init() { this.dark = localStorage.getItem('dark') === 'true'; },
            toggle() { this.dark = !this.dark; localStorage.setItem('dark', this.dark); }
        }
    }
    </script>
    @stack('scripts')
</body>
</html>
