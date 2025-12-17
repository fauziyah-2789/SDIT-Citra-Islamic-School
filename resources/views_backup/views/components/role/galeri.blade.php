<section id="galeri" class="{{ $bg ?? 'bg-sky-50' }} py-24">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-14">{{ $title ?? 'Galeri Kegiatan Sekolah' }}</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach($galeris as $galeri)
            <div class="overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:scale-105">
                <img src="{{ asset($galeri->image) }}" alt="Galeri"
                     class="object-cover w-full h-48 md:h-56">
            </div>
            @endforeach
        </div>
    </div>
</section>
