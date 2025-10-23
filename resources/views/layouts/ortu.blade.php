<!DOCTYPE html>
<html lang="en" :class="{ 'dark': dark }" x-data="darkMode()" x-init="init()">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Ortu')</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="h-full antialiased bg-gray-100 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300">

<!-- NAVBAR -->
<header class="w-full sticky top-0 z-40 shadow-sm bg-white dark:bg-gray-900/90 backdrop-blur-sm transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            <!-- Logo & Nama Sekolah -->
            <a href="{{ route('ortu.dashboard') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo SDIT Citra" onerror="this.src='https://placehold.co/40x40/ffffff/000000?text=LOGO';" class="w-10 h-10 rounded-md object-cover shadow-sm">
                <div class="leading-tight">
                    <div class="text-sm font-extrabold text-primary-light dark:text-white">SDIT Citra Islamic School</div>
                    <div class="text-xs text-gray-600 dark:text-gray-300">Ortu Panel</div>
                </div>
            </a>

            <!-- Right -->
            <div class="flex items-center gap-3">

                <!-- Dark Mode -->
                <button @click="toggle()" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition" title="Mode Gelap/Terang">
                    <svg x-show="!dark" class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m8.66-8.66l-.71.71M4.05 4.05l-.71.71M21 12h-1M4 12H3m16.66 4.95l-.71-.71M4.05 19.95l-.71-.71"/>
                    </svg>
                    <svg x-show="dark" class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z"/>
                    </svg>
                </button>

                <!-- Profil -->
                <div class="relative">
                    <button class="flex items-center gap-2 p-1 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                        <img src="{{ auth()->user()->foto ?? 'https://placehold.co/32x32/1e40af/ffffff?text=O' }}" class="w-8 h-8 rounded-full object-cover" alt="Avatar">
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-200">{{ auth()->user()->name }}</span>
                    </button>
                </div>

            </div>
        </div>
    </div>
</header>

<!-- MAIN CONTENT -->
<main class="p-4">
    @yield('content')
</main>

<script>
function darkMode() {
    return {
        dark: localStorage.getItem('dark') === 'true' || false,
        init() { this.dark = localStorage.getItem('dark') === 'true'; },
        toggle() { this.dark = !this.dark; localStorage.setItem('dark', this.dark); }
    }
}
</script>

</body>
</html>
