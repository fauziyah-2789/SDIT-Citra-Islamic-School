<section id="galeri" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold mb-8 text-center">Galeri Kegiatan</h2>
        <div class="grid md:grid-cols-4 gap-4">
            @foreach($galeris as $galeri)
                <div class="overflow-hidden rounded-lg hover:scale-105 transform transition">
                    <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}" class="w-full h-48 object-cover">
                </div>
            @endforeach
        </div>
    </div>
</section>
