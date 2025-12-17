<section class="relative overflow-hidden h-screen">
    <!-- Background foto sekolah / role -->
    <img src="{{ $hero_image ?? asset('images/sekolah.jpg') }}"
         class="absolute inset-0 w-full h-full object-cover brightness-90">

    <!-- Overlay gradasi tipis -->
    <div class="absolute inset-0 bg-gradient-to-r from-emerald-600/20 to-sky-600/20"></div>

    <!-- Konten teks -->
    <div class="relative max-w-7xl mx-auto px-6 py-28 text-center text-white">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">{{ $hero_title ?? 'Selamat Datang di SDIT Citra' }}</h1>
        <p class="max-w-3xl mx-auto text-lg md:text-xl opacity-95 mb-10 animate-fade-in delay-200">{{ $hero_sub ?? 'Mendidik generasi unggul berkarakter Islami.' }}</p>

        <div class="flex justify-center gap-4 flex-wrap animate-fade-in delay-400">
            <a href="#pendaftaran"
               class="bg-white text-emerald-600 px-8 py-3 rounded-xl font-semibold shadow hover:bg-slate-100 transition">
                PPDB Online
            </a>
            <a href="#profil"
               class="border border-white/70 px-8 py-3 rounded-xl hover:bg-white/10 transition">
                Profil Sekolah
            </a>
        </div>

        <!-- Karakter Islami + Alat Tulis Animasi -->
        <div class="absolute bottom-0 right-0 p-6 hidden md:block animate-bounce-slow">
            <img src="{{ asset('images/karakter-muslim.png') }}" alt="Karakter Muslim" class="h-40">
        </div>
    </div>
</section>
