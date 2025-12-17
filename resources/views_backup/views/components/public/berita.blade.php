<section class="py-24 bg-white/70">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-14">
            Berita & Informasi Terbaru
        </h2>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($beritas ?? [] as $berita)
            <div class="bg-white rounded-2xl p-6 shadow hover:shadow-lg transition">
                <h3 class="font-semibold text-lg mb-2">
                    {{ Str::limit($berita->judul, 60) }}
                </h3>
                <p class="text-sm text-slate-600">
                    {{ Str::limit($berita->isi, 90) }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>
