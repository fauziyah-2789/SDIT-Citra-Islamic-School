<x-layouts.guest><!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-400 text-white py-16 text-center">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-bold mb-3">Berita Sekolah</h1>
            <p class="text-lg opacity-90">Informasi dan kegiatan terbaru dari SDIT Citra Islamic School</p>
        </div>
    </section>

    <!-- Berita List -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-8">
            @if ($beritas->count() > 0)
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($beritas as $berita)
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden">
                            @if ($berita->gambar)
                                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full h-52 object-cover">
                            @else
                                <img src="{{ asset('images/no-image.jpg') }}" alt="No Image" class="w-full h-52 object-cover">
                            @endif
                            <div class="p-5">
                                <h3 class="text-xl font-semibold mb-2 text-gray-800 line-clamp-2">{{ $berita->judul }}</h3>
                                <p class="text-gray-500 text-sm mb-4">{{ $berita->created_at->format('d M Y') }}</p>
                                <p class="text-gray-700 line-clamp-3 mb-4">{{ Str::limit(strip_tags($berita->isi), 100) }}</p>
                                <a href="{{ url('/berita/' . $berita->slug) }}" class="text-blue-600 font-semibold hover:text-blue-800 transition">
                                    Baca Selengkapnya →
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-10">
                    {{ $beritas->links('pagination::tailwind') }}
                </div>
            @else
                <div class="text-center text-gray-500 py-20">
                    <h2 class="text-2xl font-semibold mb-2">Belum ada berita.</h2>
                    <p>Tunggu update terbaru dari sekolah kami.</p>
                </div>
            @endif
        </div>
    </section></x-layouts.guest>



