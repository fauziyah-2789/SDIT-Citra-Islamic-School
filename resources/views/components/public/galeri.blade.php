<section class="py-24">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-14">
            Galeri Kegiatan Sekolah
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach($galeris ?? [] as $galeri)
            <img src="{{ asset('storage/'.$galeri->foto) }}"
                 class="rounded-2xl object-cover aspect-square hover:scale-105 transition">
            @endforeach
        </div>
    </div>
</section>
