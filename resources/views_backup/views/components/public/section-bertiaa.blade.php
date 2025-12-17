<section id="berita" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold mb-8 text-center">Berita Terbaru</h2>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach($beritas as $berita)
                <div class="border rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">{{ $berita->judul }}</h3>
                        <p class="text-gray-600 mt-2">{{ Str::limit($berita->deskripsi, 100) }}</p>
                        <a href="{{ route('berita.show', $berita->id) }}" class="text-blue-600 mt-2 inline-block">Selengkapnya</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
