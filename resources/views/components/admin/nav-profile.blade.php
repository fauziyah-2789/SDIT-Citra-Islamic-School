@props(['name' => 'Admin'])

<div class="relative group">
    <button class="flex items-center space-x-2">
        <img 
            src="https://ui-avatars.com/api/?name={{ urlencode($name) }}&background=10B981&color=fff" 
            class="h-9 w-9 rounded-full object-cover shadow"
        >
        <span class="hidden md:inline text-gray-700 font-medium">{{ $name }}</span>
        <i class="fa fa-chevron-down text-xs text-gray-500"></i>
    </button>

    <!-- DROPDOWN -->
    <div class="absolute right-0 mt-2 bg-white shadow-lg border border-gray-100 rounded-lg w-48 py-2
                opacity-0 group-hover:opacity-100 group-hover:translate-y-1 pointer-events-none 
                group-hover:pointer-events-auto transition-all">
        
        <a href="/admin/profile" 
           class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-emerald-700 text-sm transition">
            Profil Saya
        </a>

        <a href="/admin/settings" 
           class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-emerald-700 text-sm transition">
            Pengaturan
        </a>

        <hr class="my-1">

        <form action="/logout" method="POST">
            @csrf
            <button class="w-full text-left px-4 py-2 text-red-600 hover:bg-red-50 text-sm transition">
                Logout
            </button>
        </form>
    </div>
</div>
