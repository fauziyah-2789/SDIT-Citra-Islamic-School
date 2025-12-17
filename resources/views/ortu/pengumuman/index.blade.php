<x-ortu.layouts title="Pengumuman Sekolah">
    <div class="mb-10">
        <h1 class="text-4xl font-extrabold text-slate-800 border-l-4 border-sky-500 pl-4">Pengumuman Sekolah</h1>
        <p class="text-slate-600 mt-2">Semua informasi dan pemberitahuan resmi dari sekolah dapat Anda lihat di sini.</p>
    </div>

    <section class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        {{-- Kolom 1-2: Daftar Pengumuman --}}
        <div class="lg:col-span-2 space-y-6">
            @forelse ($pengumuman as $item)
                <div class="bg-white rounded-2xl shadow-lg p-6 border-l-8 border-sky-500 hover:shadow-xl transition duration-300">
                    <div class="flex justify-between items-start mb-2">
                        <h2 class="text-xl font-bold text-slate-900">{{ $item->judul }}</h2>
                        <span class="text-sm font-semibold text-sky-600 flex-shrink-0">
                            {{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }}
                        </span>
                    </div>
                    <p class="text-slate-700 line-clamp-2">{{ $item->isi }}</p>
                    <a href="#" class="mt-3 inline-flex items-center text-sm font-semibold text-sky-600 hover:text-sky-800 transition">
                        Baca Selengkapnya <x-heroicon-o-arrow-small-right class="w-4 h-4 ml-1"/>
                    </a>
                </div>
            @empty
                <div class="bg-blue-100 p-8 rounded-xl border-l-4 border-blue-500">
                    <p class="text-blue-700 font-semibold">Saat ini belum ada pengumuman terbaru dari pihak sekolah.</p>
                </div>
            @endforelse
        </div>

        {{-- Kolom 3: Sidebar Info --}}
        <div class="lg:col-span-1">
            <div class="bg-sky-50 rounded-2xl p-6 shadow-xl sticky top-4">
                <h3 class="text-xl font-bold text-sky-800 mb-4 flex items-center">
                    <x-heroicon-o-information-circle class="w-6 h-6 mr-3"/> Kategori Informasi
                </h3>
                <ul class="space-y-2">
                    <li class="text-slate-700 hover:text-sky-600 transition cursor-pointer">Informasi Akademik (3)</li>
                    <li class="text-slate-700 hover:text-sky-600 transition cursor-pointer">Administrasi & Keuangan (1)</li>
                    <li class="text-slate-700 hover:text-sky-600 transition cursor-pointer">Kegiatan Sekolah (0)</li>
                </ul>
            </div>
        </div>
    </section>
</x-ortu.layouts>