<section id="berita" class="py-24">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-14">{{ $title ?? 'Berita & Informasi Terbaru' }}</h2>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach($beritas as $berita)
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 hover:scale-105">
                <h3 class="font-semibold text-lg mb-2">{{ $berita->title }}</h3>
                <p class="text-slate-600 text-sm">{{ Str::limit($berita->content, 100) }}</p>
                <a href="{{ route('berita.show', $berita->slug) }}" class="text-emerald-600 mt-2 inline-block font-semibold">Baca Selengkapnya</a>
            </div>
            @endforeach
        </div>
    </div>
</section>
