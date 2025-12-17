<section class="relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-emerald-600/90 to-sky-600/80"></div>
    <img src="{{ $image }}" class="absolute inset-0 w-full h-full object-cover opacity-20">

    <div class="relative max-w-7xl mx-auto px-6 py-28 text-center text-white">
        <h1 class="text-4xl md:text-6xl font-bold mb-6">SDIT Citra Islamic School</h1>
        <p class="max-w-3xl mx-auto text-lg md:text-xl opacity-95 mb-10">
            Membentuk Generasi Qurani, Cerdas, Berakhlak Mulia, dan Siap Menghadapi Masa Depan
        </p>
        <div class="flex justify-center gap-4 flex-wrap">
            <a href="{{ route('public.pendaftaran.index') }}" class="bg-white text-emerald-600 px-8 py-3 rounded-xl font-semibold shadow hover:bg-slate-100 transition">
                PPDB Online
            </a>
            <a href="{{ route('public.profil.index') }}" class="border border-white/70 px-8 py-3 rounded-xl hover:bg-white/10 transition">
                Profil Sekolah
            </a>
        </div>
    </div>
</section>
