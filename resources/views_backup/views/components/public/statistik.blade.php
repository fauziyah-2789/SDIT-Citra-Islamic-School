<section class="py-20 bg-white/60 backdrop-blur">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-6">
        @foreach($statistiks ?? [] as $stat)
        <div class="bg-white rounded-2xl p-6 text-center shadow hover:shadow-lg transition">
            <h3 class="text-4xl font-bold text-emerald-600">{{ $stat->jumlah }}</h3>
            <p class="mt-2 text-slate-600">{{ $stat->label }}</p>
        </div>
        @endforeach
    </div>
</section>
