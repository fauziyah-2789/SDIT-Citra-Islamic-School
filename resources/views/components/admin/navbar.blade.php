<div 
    x-data="{ 
        mobile:false, 
        scrolled:false 
    }"
    x-init="
        window.addEventListener('scroll', () => {
            scrolled = window.scrollY > 10;
        })
    "
    :class="scrolled 
        ? 'backdrop-blur-md bg-white/70 shadow-sm' 
        : 'bg-transparent'"
    class="w-full fixed top-0 left-0 z-50 transition-all duration-300"
>

    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center justify-between h-16">

            {{-- LOGO --}}
            <div class="flex items-center gap-3">
                <img src="/logo.png" class="w-9 h-9">
                <span class="text-lg font-bold text-emerald-700">Citra Islamic School</span>
            </div>

            {{-- MENU DESKTOP --}}
            <div class="hidden md:flex items-center gap-6">

                <x-admin.navbar.nav-item href="/admin/dashboard">Dashboard</x-admin.navbar.nav-item>

                <x-admin.navbar.nav-dropdown title="Manajemen">
                    <x-admin.navbar.nav-dropdown-item href="/admin/berita">Berita</x-admin.navbar.nav-dropdown-item>
                    <x-admin.navbar.nav-dropdown-item href="/admin/galeri">Galeri</x-admin.navbar.nav-dropdown-item>
                    <x-admin.navbar.nav-dropdown-item href="/admin/siswa">Siswa</x-admin.navbar.nav-dropdown-item>
                </x-admin.navbar.nav-dropdown>

                <x-admin.navbar.nav-dropdown title="Akademik">
                    <x-admin.navbar.nav-dropdown-item href="/admin/jadwal">Jadwal</x-admin.navbar.nav-dropdown-item>
                    <x-admin.navbar.nav-dropdown-item href="/admin/mapel">Mapel</x-admin.navbar.nav-dropdown-item>
                </x-admin.navbar.nav-dropdown>

            </div>

            {{-- PROFILE --}}
            <div class="hidden md:flex items-center">
                <x-admin.navbar.nav-dropdown title="Akun">
                    <x-admin.navbar.nav-dropdown-item href="/admin/profil">Profil Saya</x-admin.navbar.nav-dropdown-item>
                    <x-admin.navbar.nav-dropdown-item href="/logout">Logout</x-admin.navbar.nav-dropdown-item>
                </x-admin.navbar.nav-dropdown>
            </div>

            {{-- MOBILE BUTTON --}}
            <button @click="mobile = !mobile" class="md:hidden focus:outline-none">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- MOBILE MENU --}}
    <x-admin.navbar.mobile-menu x-show="mobile"/>
</div>
