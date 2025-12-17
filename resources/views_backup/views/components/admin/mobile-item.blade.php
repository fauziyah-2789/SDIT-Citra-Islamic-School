<div {{ $attributes->merge(['class' => 'md:hidden bg-white border-t shadow-inner']) }}>
    <div class="px-4 py-4">

        {{-- MENU UTAMA --}}
        <div class="flex flex-col gap-3">

            <a href="/admin/dashboard"
               class="py-2 text-gray-700 font-medium border-b">Dashboard</a>

            <details class="border-b">
                <summary class="py-2 cursor-pointer font-medium text-gray-700">Manajemen</summary>
                <div class="pl-4 flex flex-col">
                    <a href="/admin/berita" class="py-2 text-sm text-gray-600">Berita</a>
                    <a href="/admin/galeri" class="py-2 text-sm text-gray-600">Galeri</a>
                    <a href="/admin/siswa" class="py-2 text-sm text-gray-600">Siswa</a>
                </div>
            </details>

            <details class="border-b">
                <summary class="py-2 cursor-pointer font-medium text-gray-700">Akademik</summary>
                <div class="pl-4 flex flex-col">
                    <a href="/admin/jadwal" class="py-2 text-sm text-gray-600">Jadwal</a>
                    <a href="/admin/mapel" class="py-2 text-sm text-gray-600">Mapel</a>
                </div>
            </details>

            {{-- AKUN --}}
            <details>
                <summary class="py-2 cursor-pointer font-medium text-gray-700">Akun</summary>
                <div class="pl-4 flex flex-col">
                    <a href="/admin/profil" class="py-2 text-sm text-gray-600">Profil</a>
                    <a href="/logout" class="py-2 text-sm text-gray-600">Logout</a>
                </div>
            </details>

        </div>

    </div>
</div>
