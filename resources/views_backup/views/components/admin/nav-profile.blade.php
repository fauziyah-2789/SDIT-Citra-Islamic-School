@props(['isMobile' => false])

@auth
    @php
        // Asumsi data user di-load via Auth::user()
        $user = Auth::user(); 
        $roleName = $user->role->name ?? 'Admin';
    @endphp

    @if ($isMobile)
        {{-- Tampilan Mobile --}}
        <div class="flex items-center gap-4">
            <img class="h-12 w-12 rounded-full object-cover border-2 border-white" src="{{ asset($user->foto_path ?? 'images/default-avatar.png') }}" alt="{{ $user->name }}">
            <div>
                <div class="font-bold text-lg text-white">{{ $user->name }}</div>
                <div class="text-sm text-white/80">{{ ucfirst($roleName) }}</div>
            </div>
        </div>
        <div class="mt-4 flex flex-col items-center gap-4 w-full">
            {{-- KOREKSI ROUTE: Mengarahkan ke form edit user yang sedang login --}}
            <a href="{{ route('admin.users.edit', ['user' => $user->id]) }}" class="w-full text-center py-2 rounded-lg bg-white/10 hover:bg-white/20 text-white transition">Edit Profil</a>
            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <button type="submit" class="w-full text-center py-2 rounded-lg bg-red-600 hover:bg-red-700 text-white transition">Logout</button>
            </form>
        </div>

    @else
        {{-- Tampilan Desktop --}}
        <div x-data="{ open: false }" class="relative">
            {{-- Profile Button --}}
            <button @click="open = ! open" class="flex items-center focus:outline-none">
                <img class="h-10 w-10 rounded-full object-cover border-2 border-white/80 hover:border-emerald-300 transition" src="{{ asset($user->foto_path ?? 'images/default-avatar.png') }}" alt="{{ $user->name }}">
            </button>

            {{-- Dropdown Profile Menu --}}
            <div x-show="open" @click.outside="open = false" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-75"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="absolute right-0 mt-3 w-48 rounded-lg shadow-xl py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" 
                 style="display: none;">
                
                <div class="px-4 py-2 text-sm text-slate-700 border-b">
                    <p class="font-bold">{{ $user->name }}</p>
                    <p class="text-xs text-slate-500">{{ ucfirst($roleName) }}</p>
                </div>
                
                {{-- KOREKSI ROUTE: Mengarahkan ke form edit user yang sedang login --}}
                <a href="{{ route('admin.users.edit', ['user' => $user->id]) }}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-gray-100">
                    <x-heroicon-o-user class="w-4 h-4 inline mr-2"/> Profil
                </a>
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left block px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                        <x-heroicon-o-arrow-left-on-rectangle class="w-4 h-4 inline mr-2"/> Logout
                    </button>
                </form>
            </div>
        </div>
    @endif
@endauth