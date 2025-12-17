<x-layouts.guest><!-- Hero -->
<section class="bg-gradient-to-r from-emerald-300 to-blue-400 py-20 text-white text-center">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-bold mb-3">{{ $berita->judul }}</h1>
        <p class="text-white/90">{{ $berita->created_at->format('d F Y') }}</p>
    </div>
</section>

<!-- Detail Berita -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="bg-white shadow-xl rounded-2xl overflow-hidden p-6 md:p-10">
            @if ($berita->gambar)
                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="rounded-xl mb-8 w-full max-h-[500px] object-cover">
            @endif

            <div class="prose max-w-none text-gray-800 leading-relaxed">
                {!! $berita->isi !!}
            </div>

            <div class="mt-10">
                <a href="{{ url('/berita') }}" class="inline-block bg-gradient-to-r from-emerald-400 to-blue-400 text-white px-6 py-3 rounded-xl font-semibold hover:opacity-90 transition">
                    ← Kembali ke Daftar Berita
                </a>
            </div>
        </div>
    </div>
</section></x-layouts.guest>



