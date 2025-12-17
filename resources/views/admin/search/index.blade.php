<x-admin-layout title="Hasil Pencarian">

    <x-admin.breadcrumb 
        :title="'Pencarian'" 
        :subtitle="'Hasil pencarian untuk: ' . $q" 
    />

    {{-- BERITA --}}
    <div class="mt-6">
        <h2 class="text-lg font-semibold mb-3">Berita</h2>
        @forelse($berita as $b)
            <div class="border-b py-2">
                <a href="{{ route('admin.berita.edit', $b->id) }}" class="text-emerald-600 hover:underline">
                    {{ $b->judul }}
                </a>
            </div>
        @empty
            <p class="text-gray-500">Tidak ditemukan.</p>
        @endforelse
    </div>

    {{-- GALERI --}}
    <div class="mt-6">
        <h2 class="text-lg font-semibold mb-3">Galeri</h2>
        @forelse($galeri as $g)
            <div class="border-b py-2">
                <a href="{{ route('admin.galeri.edit', $g->id) }}" class="text-emerald-600 hover:underline">
                    {{ $g->judul }}
                </a>
            </div>
        @empty
            <p class="text-gray-500">Tidak ditemukan.</p>
        @endforelse
    </div>

    {{-- USERS --}}
    <div class="mt-6">
        <h2 class="text-lg font-semibold mb-3">Users</h2>
        @forelse($users as $u)
            <div class="border-b py-2">
                {{ $u->name }} — {{ $u->email }}
            </div>
        @empty
            <p class="text-gray-500">Tidak ditemukan.</p>
        @endforelse
    </div>



