@props(['title' => null])
@vite(['resources/css/app.css','resources/js/app.js'])

{{-- Navbar --}}
<nav class="w-full sticky top-0 z-40 shadow-sm bg-white dark:bg-gray-900/90 backdrop-blur-sm transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            <!-- Logo & Nama Sekolah -->
            <a href="{{ route('guru.dashboard') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo SDIT Citra" class="w-10 h-10 rounded-md object-cover shadow-sm">
                <div class="leading-tight">
                    <div class="text-sm font-extrabold text-primary-light dark:text-white">SDIT Citra Islamic School</div>
                    <div class="text-xs text-gray-600 dark:text-gray-300">Guru Panel</div>
                </div>
            </a>

            <!-- Right Side -->
            <div class="flex items-center gap-3">

                <!-- Search -->
                <div x-data="{ open:false }" class="relative">
                    <input x-show="open || screen.width >= 768" type="text" placeholder="Search..." class="rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 p-2 pl-10 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 w-0 md:w-64" @click.outside="open=false" x-transition>
                    <svg class="w-4 h-4 absolute left-3 top-2.5 text-gray-400 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z"/>
                    </svg>
                </div>

                <!-- Dark Mode -->
                <button @click="toggle()" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                    <svg x-show="!dark" class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m8.66-8.66l-.71.71M4.05 4.05l-.71.71M21 12h-1M4 12H3m16.66 4.95l-.71-.71M4.05 19.95l-.71-.71"/>
                    </svg>
                    <svg x-show="dark" class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z"/>
                    </svg>
                </button>

                <!-- Notifikasi -->
                <div x-data="{ open:false }" class="relative">
                    <button @click="open=!open" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition" title="Notifikasi">
                        🔔
                    </button>
                    <div x-show="open" @click.outside="open=false" x-cloak class="absolute right-0 mt-2 w-64 bg-white dark:bg-gray-800 rounded-xl shadow-lg p-4 z-50">
                        <p class="font-semibold mb-2">Notifikasi</p>
                        <ul class="space-y-2 text-sm">
                            <li>🔔 Contoh Notifikasi 1</li>
                            <li>🔔 Contoh Notifikasi 2</li>
                        </ul>
                    </div>
                </div>

                <!-- Profil -->
                <div x-data="{ open:false }" class="relative">
                    <button @click="open=!open" class="flex items-center gap-2 p-1 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                        <img src="{{ Auth::user()->avatar ?? 'https://placehold.co/32x32/ffffff/000000?text=G' }}" class="w-8 h-8 rounded-full object-cover">
                        <span class="hidden md:block text-sm font-medium">{{ Auth::user()->name }}</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open" @click.outside="open=false" x-cloak class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-xl shadow-lg py-2 z-50">
                        <a href="{{ route('guru.profil.edit') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Edit Profil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Logout</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</nav>
