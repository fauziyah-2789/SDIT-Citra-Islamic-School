<section class="py-24 bg-sky-50">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">
            Tenaga Pendidik Profesional
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            @foreach($guruPublik ?? [] as $guru)
            <div class="text-center bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <img src="{{ asset('storage/'.$guru->foto) }}"
                     class="w-28 h-28 mx-auto rounded-full object-cover mb-4">
                <h4 class="font-semibold">{{ $guru->nama }}</h4>
                <p class="text-sm text-slate-500">{{ $guru->jabatan }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
