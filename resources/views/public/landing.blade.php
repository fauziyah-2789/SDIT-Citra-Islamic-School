<x-layouts.guest><!-- HERO -->
<section id="hero" class="relative bg-gradient-to-r from-green-100 via-blue-50 to-green-50 min-h-[80vh] flex items-center">
    <div class="max-w-7xl mx-auto px-6 md:px-12 text-center md:text-left">
        <h1 class="text-4xl md:text-6xl font-bold text-emerald-700 mb-4" data-aos="fade-right">SDIT Citra Islamic School</h1>
        <p class="text-gray-700 md:text-lg mb-6" data-aos="fade-right" data-aos-delay="100">
            Pendidikan Islami berkualitas, karakter & prestasi — siapkan generasi masa depan.
        </p>
        <a href="{{ route('pendaftaran') }}" class="inline-block px-6 py-3 bg-gradient-to-r from-green-500 to-blue-400 text-white font-semibold rounded-lg shadow hover:opacity-90 transition" data-aos="fade-up" data-aos-delay="200">
            Daftar Sekarang
        </a>
    </div>
</section>

<!-- TENTANG SEKOLAH -->
<section id="tentang" class="py-16 bg-gradient-to-r from-green-50 via-blue-50 to-white">
    <div class="max-w-7xl mx-auto px-6 md:px-12 text-center" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold text-emerald-700 mb-4">Tentang Sekolah</h2>
        <p class="text-gray-700 md:text-lg mb-6">SDIT Citra menyediakan pendidikan Islami terpadu dengan pendekatan karakter dan prestasi. Kami menyiapkan generasi masa depan yang cerdas, kreatif, dan berbudi pekerti luhur.</p>
        <a href="{{ route('tentang') }}" class="inline-block px-5 py-2 bg-gradient-to-r from-green-500 to-blue-400 text-white rounded-lg shadow hover:opacity-90 transition">Selengkapnya</a>
    </div>
</section>

<!-- VISI MISI -->
<section id="visi" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6 md:px-12 text-center" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold text-emerald-700 mb-8">Visi & Misi</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-green-50 rounded-lg shadow-soft p-6" data-aos="fade-right">
                <h3 class="font-semibold text-xl text-emerald-700 mb-2">Visi</h3>
                <p>Mencetak generasi berakhlak mulia, cerdas, dan kreatif dalam ilmu pengetahuan dan teknologi.</p>
            </div>
            <div class="bg-blue-50 rounded-lg shadow-soft p-6" data-aos="fade-left">
                <h3 class="font-semibold text-xl text-emerald-700 mb-2">Misi</h3>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Menyelenggarakan pendidikan Islami berkualitas.</li>
                    <li>Mengembangkan karakter dan kreativitas siswa.</li>
                    <li>Meningkatkan prestasi akademik dan non-akademik.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- GURU -->
<section id="guru" class="py-16 bg-gradient-to-r from-green-50 via-blue-50 to-white">
    <div class="max-w-7xl mx-auto px-6 md:px-12 text-center mb-10" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold text-emerald-700 mb-2">Guru Kami</h2>
        <p class="text-gray-700 md:text-lg">Pengajar profesional & berpengalaman di bidangnya</p>
    </div>
    <div class="max-w-7xl mx-auto px-6 md:px-12 grid md:grid-cols-4 gap-6">
        @foreach($gurus as $guru)
        <div class="bg-white rounded-lg shadow-soft p-4 text-center" data-aos="fade-up">
            <img src="{{ asset('images/guru/'.$guru->foto) }}" alt="{{ $guru->nama }}" class="w-32 h-32 mx-auto rounded-full mb-3 object-cover">
            <h4 class="font-semibold text-emerald-700">{{ $guru->nama }}</h4>
            <p class="text-gray-600">{{ $guru->mata_pelajaran }}</p>
            <a href="{{ route('guru.publik.show', $guru->id) }}" class="mt-2 inline-block text-blue-500 hover:underline">Profil Guru</a>
        </div>
        @endforeach
    </div>
</section>

<!-- PROGRAM -->
<section id="program" class="py-16 bg-gradient-to-r from-green-50 via-white to-blue-50">
    <div class="max-w-7xl mx-auto px-6 md:px-12 text-center mb-10" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold text-emerald-700">Program Sekolah</h2>
    </div>
    <div class="max-w-7xl mx-auto px-6 md:px-12 grid md:grid-cols-3 gap-6">
        @foreach($programs as $program)
        <div class="bg-white rounded-lg shadow-soft p-6 text-center" data-aos="fade-up">
            <h4 class="font-semibold text-emerald-700 mb-2">{{ $program->nama }}</h4>
            <p class="text-gray-600">{{ $program->deskripsi }}</p>
            <a href="{{ route('program.publik.show', $program->id) }}" class="mt-3 inline-block px-4 py-2 bg-gradient-to-r from-green-500 to-blue-400 text-white rounded-lg shadow hover:opacity-90 transition">Selengkapnya</a>
        </div>
        @endforeach
    </div>
</section>

<!-- EKSTRAKURIKULER -->
<section id="ekstra" class="py-16 bg-gradient-to-r from-blue-50 via-green-50 to-white">
    <div class="max-w-7xl mx-auto px-6 md:px-12 text-center mb-10" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold text-emerald-700">Ekstrakurikuler</h2>
    </div>
    <div class="max-w-7xl mx-auto px-6 md:px-12 grid md:grid-cols-3 gap-6">
        @foreach($ekstras as $ekstra)
        <div class="bg-white rounded-lg shadow-soft p-6 text-center" data-aos="fade-up">
            <h4 class="font-semibold text-emerald-700 mb-2">{{ $ekstra->nama }}</h4>
            <p class="text-gray-600">{{ $ekstra->deskripsi }}</p>
            <a href="{{ route('ekstra.publik.show', $ekstra->id) }}" class="mt-3 inline-block px-4 py-2 bg-gradient-to-r from-green-500 to-blue-400 text-white rounded-lg shadow hover:opacity-90 transition">Selengkapnya</a>
        </div>
        @endforeach
    </div>
</section>

<!-- BERITA -->
<section id="berita" class="py-16 bg-gradient-to-r from-green-50 via-blue-50 to-white">
    <div class="max-w-7xl mx-auto px-6 md:px-12 text-center mb-10" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold text-emerald-700">Berita Terbaru</h2>
    </div>
    <div class="max-w-7xl mx-auto px-6 md:px-12 grid md:grid-cols-3 gap-6">
        @foreach($beritas as $berita)
        <div class="bg-white rounded-lg shadow-soft p-6 text-center" data-aos="fade-up">
            <img src="{{ asset('images/berita/'.$berita->thumbnail) }}" alt="{{ $berita->judul }}" class="w-full h-40 object-cover rounded mb-3">
            <h4 class="font-semibold text-emerald-700 mb-2">{{ $berita->judul }}</h4>
            <p class="text-gray-600 mb-3">{{ Str::limit($berita->excerpt, 100) }}</p>
            <a href="{{ route('berita.publik.show', $berita->slug) }}" class="inline-block px-4 py-2 bg-gradient-to-r from-green-500 to-blue-400 text-white rounded-lg shadow hover:opacity-90 transition">Selengkapnya</a>
        </div>
        @endforeach
    </div>
    <div class="text-center mt-8">
        <a href="{{ route('berita.publik.index') }}" class="px-6 py-2 bg-gradient-to-r from-green-500 to-blue-400 text-white rounded-lg shadow hover:opacity-90 transition">Lihat Semua Berita</a>
    </div>
</section>

<!-- GALERI -->
<section id="galeri" class="py-16 bg-gradient-to-r from-blue-50 via-green-50 to-white">
    <div class="max-w-7xl mx-auto px-6 md:px-12 text-center mb-10" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold text-emerald-700">Galeri Kegiatan</h2>
    </div>
    <div class="max-w-7xl mx-auto px-6 md:px-12 grid md:grid-cols-3 gap-6">
        @foreach($galeris as $galeri)
        <div class="bg-white rounded-lg shadow-soft p-4 text-center" data-aos="fade-up">
            <img src="{{ asset('images/galeri/'.$galeri->gambar) }}" alt="{{ $galeri->judul }}" class="w-full h-40 object-cover rounded mb-3">
            <h4 class="font-semibold text-emerald-700">{{ $galeri->judul }}</h4>
            <a href="{{ route('galeri.publik.show', $galeri->id) }}" class="mt-2 inline-block px-4 py-2 bg-gradient-to-r from-green-500 to-blue-400 text-white rounded-lg shadow hover:opacity-90 transition">Lihat Kegiatan</a>
        </div>
        @endforeach
    </div>
</section>

<!-- PRESTASI -->
<section id="prestasi" class="py-16 bg-gradient-to-r from-green-50 via-blue-50 to-white">
    <div class="max-w-7xl mx-auto px-6 md:px-12 text-center mb-10" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold text-emerald-700">Prestasi Siswa</h2>
    </div>
    <div class="max-w-7xl mx-auto px-6 md:px-12 grid md:grid-cols-3 gap-6">
        @foreach($prestasies as $prestasi)
        <div class="bg-white rounded-lg shadow-soft p-6 text-center" data-aos="fade-up">
            <h4 class="font-semibold text-emerald-700 mb-2">{{ $prestasi->judul }}</h4>
            <p class="text-gray-600">{{ $prestasi->deskripsi }}</p>
        </div>
        @endforeach
    </div>
</section>

<!-- KONTAK -->
<section id="kontak" class="py-16 bg-gradient-to-r from-blue-50 via-green-50 to-white">
    <div class="max-w-7xl mx-auto px-6 md:px-12 text-center mb-10" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold text-emerald-700">Kontak Kami</h2>
    </div>
    <div class="max-w-3xl mx-auto px-6 md:px-12 text-center">
        <p class="text-gray-700 mb-4">Jl. Pendidikan No.123, Kota Citra</p>
        <p class="text-gray-700 mb-4">Telp: 0812-3456-7890 • Email: info@sditcitra.sch.id</p>
        <a href="mailto:info@sditcitra.sch.id" class="px-6 py-2 bg-gradient-to-r from-green-500 to-blue-400 text-white rounded-lg shadow hover:opacity-90 transition">Kirim Email</a>
    </div>
</section>

<!-- BACK TO TOP -->
<button x-data x-show="window.scrollY > 300" 
        @click="window.scrollTo({top:0,behavior:'smooth'})"
        class="fixed bottom-6 right-6 md:bottom-8 md:left-8 bg-gradient-to-r from-green-500 to-blue-400 text-white p-3 rounded-full shadow-lg hover:opacity-90 transition z-50">
    ⬆️
</button></x-layouts.guest>




