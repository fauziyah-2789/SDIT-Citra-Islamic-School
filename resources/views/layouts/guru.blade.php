<!DOCTYPE html>
<html lang="en" :class="{ 'dark': dark }" x-data="darkMode()" x-init="init()">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Guru')</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>[x-cloak]{display:none!important;}</style>
</head>
<body class="h-full antialiased bg-gray-100 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300">

<!-- NAVBAR -->
<header class="w-full sticky top-0 z-40 shadow-sm bg-white dark:bg-gray-900/90 backdrop-blur-sm transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            <!-- Logo & Nama Sekolah -->
            <a href="{{ route('guru.dashboard') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo SDIT Citra" onerror="this.src='https://placehold.co/40x40/ffffff/000000?text=LOGO';" class="w-10 h-10 rounded-md object-cover shadow-sm">
                <div class="leading-tight">
                    <div class="text-sm font-extrabold text-primary-light dark:text-white">SDIT Citra Islamic School</div>
                    <div class="text-xs text-gray-600 dark:text-gray-300">Guru Panel</div>
                </div>
            </a>

            <!-- Right: Search + Dark Mode + Notif + Profil -->
            <div class="flex items-center gap-2 md:gap-3">

                <!-- Mobile Hamburger Search Toggle -->
                <div class="md:hidden">
                    <button @click="searchOpen = !searchOpen" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                        <svg class="w-5 h-5 text-gray-700 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z"/>
                        </svg>
                    </button>
                </div>

                <!-- Search Bar -->
                <div x-data="{ searchOpen: false }" class="relative">
                    <input x-show="searchOpen || screen.width >= 768" type="text" placeholder="Search..." class="rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 p-2 pl-10 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all w-0 md:w-64" @click.outside="searchOpen = false" x-transition>
                    <svg class="w-4 h-4 absolute left-3 top-2.5 text-gray-400 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z"/>
                    </svg>
                </div>

                <!-- Dark Mode Toggle -->
                <button @click="toggle()" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition" title="Mode Gelap/Terang">
                    <svg x-show="!dark" class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 3v1m0 16v1m8.66-8.66l-.71.71M4.05 4.05l-.71.71M21 12h-1M4 12H3m16.66 4.95l-.71-.71M4.05 19.95l-.71-.71"/>
                    </svg>
                    <svg x-show="dark" class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z"/>
                    </svg>
                </button>

                <!-- Notifikasi -->
                <div x-data="{ openNotif: false }" class="relative">
                    <button @click="openNotif = !openNotif" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition" title="Notifikasi">
                        <svg class="w-5 h-5 text-gray-700 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                    </button>
                    <div x-show="openNotif" @click.outside="openNotif=false" x-cloak
                         class="absolute right-0 mt-2 w-64 bg-white dark:bg-gray-800 rounded-xl shadow-lg p-4 z-50">
                        <p class="text-gray-700 dark:text-gray-200 font-semibold mb-2">Notifikasi</p>
                        <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-300">
                            <li>🔔 Tugas baru untuk kelas 5</li>
                            <li>🔔 Pengumuman baru tersedia</li>
                            <li>🔔 Jadwal mengajar diperbarui</li>
                        </ul>
                    </div>
                </div>

                <!-- Profil + Dropdown -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="flex items-center gap-2 p-1 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                        <img src="{{ Auth::user()->avatar ?? 'https://placehold.co/32x32/ffffff/000000?text=A' }}" class="w-8 h-8 rounded-full object-cover" alt="Avatar">
                        <span class="hidden md:block text-sm font-medium text-gray-700 dark:text-gray-200">{{ Auth::user()->name }}</span>
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" @click.outside="open=false" x-cloak
                         class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-xl shadow-lg py-2 z-50">
                        <a href="{{ route('guru.profil.edit') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Edit Profil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Logout</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<!-- MAIN CONTENT -->
<main class="flex-1 w-full overflow-y-auto py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Card Profil Guru di atas dashboard -->
        <div class="mb-6">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg flex flex-col sm:flex-row items-center gap-4">
                <img src="{{ Auth::user()->avatar ?? 'https://placehold.co/80x80/ffffff/000000?text=U' }}" class="w-20 h-20 rounded-full object-cover border-2 border-gray-300 dark:border-gray-600" alt="Avatar">
                <div class="text-center sm:text-left">
                    <p class="font-semibold text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ Auth::user()->email }}</p>
                    <a href="{{ route('guru.profil.edit') }}" class="mt-2 inline-block text-sm font-semibold text-blue-600 dark:text-blue-400 hover:underline">Edit Profil</a>
                </div>
            </div>
        </div>

        @yield('content')

    </div>
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
