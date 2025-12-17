<section class="py-24">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-14">Program Unggulan Sekolah</h2>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($programs ?? [] as $program)
            <div class="bg-white rounded-3xl p-7 shadow hover:scale-105 transition">
                <h3 class="font-semibold text-xl mb-3">{{ $program->nama }}</h3>
                <p class="text-slate-600 text-sm leading-relaxed">{{ Str::limit($program->deskripsi, 120) }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
