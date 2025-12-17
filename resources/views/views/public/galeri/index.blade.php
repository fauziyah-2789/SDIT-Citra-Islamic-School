<x-guest.layouts><!-- Hero -->
<section class="bg-gradient-to-r from-emerald-300 to-blue-400 py-20 text-white text-center">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-bold mb-3">Galeri Sekolah</h1>
        <p class="text-white/90">Dokumentasi kegiatan, prestasi, dan momen terbaik di SDIT Citra Islamic School</p>
    </div>
</section>

<!-- Galeri Grid -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 md:px-12">
        @if ($galeris->count() > 0)
            <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($galeris as $item)
                    <div class="relative group overflow-hidden rounded-2xl shadow-lg bg-white hover:shadow-2xl transition">
                        @if ($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                        @else
                            <img src="{{ asset('images/no-image.jpg') }}" alt="No Image" class="w-full h-56 object-cover">
                        @endif

                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition">
                            <div class="absolute bottom-3 left-3 text-white">
                                <h3 class="font-semibold text-lg">{{ $item->judul }}</h3>
                                <p class="text-sm opacity-90">{{ $item->created_at->format('d M Y') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-10">
                {{ $galeris->links('pagination::tailwind') }}
            </div>
        @else
            <div class="text-center text-gray-500 py-20">
                <h2 class="text-2xl font-semibold mb-2">Belum ada foto galeri.</h2>
                <p>Tunggu update dokumentasi terbaru sekolah kami.</p>
            </div>
        @endif
    </div>
</section></x-guest.layouts>



