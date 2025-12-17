<header class="w-full sticky top-0 z-40 shadow-sm bg-white backdrop-blur-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <a href="{{ route('ortu.dashboard') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10 h-10 rounded-md">
                <div class="leading-tight">
                    <div class="text-sm font-extrabold text-emerald-700">SDIT Citra Islamic School</div>
                    <div class="text-xs text-gray-600">Ortu Panel</div>
                </div>
            </a>

            <!-- Right -->
            <div class="flex items-center gap-2">
                <!-- Dark Mode Toggle -->
                <button @click="toggle()" class="p-2 rounded-full hover:bg-gray-200">
                    <svg x-show="!dark" class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1"/></svg>
                    <svg x-show="dark" class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12.79A9 9 0 1111.21 3"/></svg>
                </button>

                <!-- Profil -->
                <div class="relative" x-data="{ open:false }">
                    <button @click="open=!open" class="flex items-center gap-2 p-1 rounded-full hover:bg-gray-200">
                        <img src="{{ Auth::user()->avatar ?? 'https://placehold.co/32x32/ffffff/000000?text=O' }}" class="w-8 h-8 rounded-full">
                        <span class="text-sm font-medium">{{ Auth::user()->name }}</span>
                    </button>
                    <div x-show="open" @click.outside="open=false" x-cloak class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg py-2 z-50">
                        <a href="{{ route('ortu.profil.edit') }}" class="block px-4 py-2 hover:bg-gray-100">Edit Profil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
