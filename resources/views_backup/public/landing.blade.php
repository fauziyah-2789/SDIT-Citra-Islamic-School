@extends('components.layouts.guest')

@section('content')

    {{-- ******************************************************************* --}}
    {{-- 1. HERO SECTION (Sudah termasuk Notifikasi Pengumuman) --}}
    {{-- ******************************************************************* --}}
    <section id="hero" class="relative bg-gray-900 h-screen flex items-center justify-center overflow-hidden">
        
        {{-- Background Image Natural dengan Dark Overlay Soft --}}
        <img src="{{ $hero_image ?? asset('images/sekolah.jpg') }}" 
              alt="Gedung Sekolah SDIT Citra Islamic School" 
              class="absolute inset-0 h-full w-full object-cover opacity-100" 
              style="filter: brightness(0.5);">

        {{-- Notifikasi Pengumuman --}}
        @if (isset($pengumuman) && $pengumuman->isNotEmpty())
        <div class="absolute top-0 w-full bg-red-600/90 text-white p-2 text-center z-30 shadow-lg animate-pulse">
            <a href="{{ route('public.pengumuman.show', $pengumuman->first()->slug) }}" class="inline-flex items-center space-x-2">
                <x-heroicon-o-megaphone class="w-5 h-5"/>
                <span class="font-semibold uppercase text-sm">PENGUMUMAN TERBARU:</span>
                <span class="text-sm font-normal truncate">{{ $pengumuman->first()->judul }}</span>
            </a>
        </div>
        @endif
        
        {{-- Isi Hero (Menggunakan $hero_title dan $hero_sub dari Controller) --}}
        <div class="relative z-20 text-center text-white px-6 py-20">
            
            <h1 class="text-4xl sm:text-6xl font-bold tracking-tight mb-4 drop-shadow-xl leading-snug max-w-5xl mx-auto">
                {{ $hero_title }}
            </h1>
            
            <p class="text-lg sm:text-xl font-normal mb-10 max-w-3xl mx-auto text-gray-200 drop-shadow-lg">
                {{ $hero_sub }}
            </p>
            
            {{-- DUAL CTA BUTTONS --}}
            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6 justify-center">
                <a href="{{ route('pendaftaran') }}" 
                   class="bg-green-500 text-white hover:bg-green-600 font-semibold py-3 px-8 rounded-lg text-lg transition duration-300 shadow-lg shadow-green-500/50 inline-flex items-center space-x-3">
                    PPDB Online
                </a>
                
                <a href="{{ route('public.tentang') }}" 
                   class="bg-transparent border-2 border-white text-white hover:bg-white/10 font-semibold py-3 px-8 rounded-lg text-lg transition duration-300 shadow-lg inline-flex items-center space-x-3">
                    Profil Sekolah
                </a>
            </div>
        </div>
    </section>

    {{-- ******************************************************************* --}}
    {{-- 2. STATISTIC CARDS --}}
    {{-- ******************************************************************* --}}
    {{-- Kode sudah OK, menggunakan $siswaCount, $guruCount, $kelasCount, $ekskulCount --}}
    <section id="stats" class="py-16 bg-white border-t border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
             <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                 <x-statistic-item title="Siswa Aktif" count="{{ $siswaCount }}" icon="user-group" color="text-indigo-600" bg="bg-indigo-50" class="font-semibold"/> 
                 <x-statistic-item title="Guru Profesional" count="{{ $guruCount }}" icon="academic-cap" color="text-green-600" bg="bg-green-50" class="font-semibold"/>
                 <x-statistic-item title="Kelas Tersedia" count="{{ $kelasCount }}" icon="building-library" color="text-yellow-600" bg="bg-yellow-50" class="font-semibold"/>
                 <x-statistic-item title="Ekstrakurikuler" count="{{ $ekskulCount }}" icon="trophy" color="text-pink-600" bg="bg-pink-50" class="font-semibold"/>
             </div>
        </div>
    </section>

    {{-- ******************************************************************* --}}
    {{-- 3. TENTANG SEKOLAH --}}
    {{-- ******************************************************************* --}}
    {{-- Kode sudah OK, menggunakan $about_text --}}
    <section id="about" class="py-24 bg-gray-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-16 items-center">
            
            <div class="order-2 md:order-1 relative">
                <div class="absolute -top-10 -left-10 w-32 h-32 bg-green-300 rounded-full mix-blend-multiply opacity-50 filter blur-xl animate-blob"></div>
                <div class="absolute -bottom-10 -right-10 w-48 h-48 bg-indigo-300 rounded-full mix-blend-multiply opacity-50 filter blur-xl animate-blob animation-delay-4000"></div>
                <img src="{{ asset('images/sekolah.jpg') }}" alt="Gedung Sekolah SDIT" class="relative rounded-3xl shadow-2xl transform rotate-[-2deg] hover:rotate-0 transition duration-500" />
            </div>

            <div class="order-1 md:order-2">
                <span class="text-sm font-semibold text-green-600 uppercase tracking-widest">Sekilas Pandang</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2 mb-6">
                    Mencetak Generasi Unggul Dunia Akhirat
                </h2>
                <p class="mt-4 text-lg text-gray-700 leading-relaxed">
                    {{ $about_text ?? 'Sekolah kami berkomitmen untuk menciptakan lingkungan belajar yang inspiratif, menggabungkan kurikulum akademik unggulan dengan pendidikan karakter Islami yang kuat. Kami menyiapkan siswa agar tidak hanya cerdas secara intelektual, tetapi juga berakhlak mulia.' }}
                </p>
                <div class="mt-8 space-y-3">
                    <p class="flex items-start text-gray-800"><x-heroicon-o-check-circle class="w-6 h-6 text-green-500 flex-shrink-0 mr-3 mt-1"/> Kurikulum Terpadu (Dinas & Agama)</p>
                    <p class="flex items-start text-gray-800"><x-heroicon-o-check-circle class="w-6 h-6 text-green-500 flex-shrink-0 mr-3 mt-1"/> Program Hafalan Quran Intensif</p>
                    <p class="flex items-start text-gray-800"><x-heroicon-o-check-circle class="w-6 h-6 text-green-500 flex-shrink-0 mr-3 mt-1"/> Pembiasaan Adab & Akhlak Mulia</p>
                </div>

                <a href="{{ route('public.tentang') }}" class="mt-8 inline-flex items-center space-x-2 text-indigo-600 hover:text-indigo-800 font-semibold transition duration-150 py-2 px-4 rounded-lg bg-indigo-100 hover:bg-indigo-200">
                    <span>Visi, Misi & Filosofi Selengkapnya</span> 
                    <x-heroicon-o-arrow-right class="w-4 h-4"/>
                </a>
            </div>
        </div>
    </section>

    {{-- ******************************************************************* --}}
    {{-- 4. PROGRAM INTI (Dari Database) --}}
    {{-- ******************************************************************* --}}
    {{-- Kode sudah OK, menggunakan $programs --}}
    <section id="programs" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-gray-900 text-center mb-4">
                Program Inti & Keunggulan Kami
            </h2>
            <p class="text-center text-lg text-gray-600 mb-16 max-w-2xl mx-auto">Kami merancang setiap program untuk memaksimalkan potensi akademik, spiritual, dan karakter setiap siswa.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($programs->take(3) as $program)
                    {{-- Asumsi: x-program-card adalah custom component --}}
                    <x-program-card 
                        title="{{ $program->nama }}" 
                        description="{{ $program->deskripsi }}" 
                        icon="{{ $program->icon }}" 
                        class="p-8 border border-gray-100 rounded-2xl shadow-lg hover:shadow-xl transition duration-500 transform hover:-translate-y-2 bg-white"
                    />
                @endforeach
            </div>
        </div>
    </section>
    
    {{-- ******************************************************************* --}}
    {{-- 5. INTERAKTIF SECTION (Alasan Memilih) --}}
    {{-- ******************************************************************* --}}
    {{-- Kode sudah OK --}}
    <section id="interactive-feature" class="py-24 bg-gradient-to-r from-green-50/70 to-indigo-50/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-sm font-semibold text-green-600 uppercase tracking-widest">Pengembangan Holistik</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2">
                    Kenapa Memilih SDIT Citra Islamic School?
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                {{-- Card 1: Fokus Karakter (Aksen Green) --}}
                <div class="p-8 bg-white rounded-3xl shadow-2xl border-t-8 border-green-500 transition duration-500 transform hover:scale-[1.03]">
                    <x-heroicon-o-hand-raised class="w-12 h-12 text-green-500 mb-4"/>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Pendidikan Karakter Islami</h3>
                    <p class="text-gray-600">Fokus pada pembentukan akhlak mulia dan adab sehari-hari sesuai tuntunan Al-Qur'an dan Sunnah.</p>
                </div>

                {{-- Card 2: Fokus Literasi (Aksen Indigo) --}}
                <div class="p-8 bg-white rounded-3xl shadow-2xl border-t-8 border-indigo-500 transition duration-500 transform hover:scale-[1.03]">
                    <x-heroicon-o-book-open class="w-12 h-12 text-indigo-500 mb-4"/>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Literasi Sains & Teknologi</h3>
                    <p class="text-gray-600">Pembelajaran yang inspiratif dan berpusat pada siswa, membangun kemampuan berpikir kritis dan kreatif.</p>
                </div>

                {{-- Card 3: Fokus Komunitas (Aksen Sky/Blue) --}}
                <div class="p-8 bg-white rounded-3xl shadow-2xl border-t-8 border-sky-500 transition duration-500 transform hover:scale-[1.03]">
                    <x-heroicon-o-home-modern class="w-12 h-12 text-sky-500 mb-4"/>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Lingkungan Sekolah Kekeluargaan</h3>
                    <p class="text-gray-600">Kerja sama erat antara guru, siswa, dan orang tua menciptakan ekosistem belajar yang suportif.</p>
                </div>
            </div>
        </div>
    </section>

 {{-- ******************************************************************* --}}
{{-- 5.5 PROGRAM UNGGULAN & BUDAYA (REVISI MENGGUNAKAN TABS) --}}
{{-- ******************************************************************* --}}
<section id="detail-programs" class="py-24 bg-white" x-data="{ activeTab: 'unggulan' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-gray-900 text-center mb-4">
            Struktur Program: Fokus & Pembiasaan Siswa
        </h2>
        <p class="text-center text-lg text-gray-600 mb-16 max-w-2xl mx-auto">Informasi program kami disusun secara komprehensif, mencakup aspek harian, unggulan, dan agenda tahunan.</p>
        
        {{-- TAB BUTTONS --}}
        <div class="flex flex-wrap justify-center border-b border-gray-200 mb-10 space-x-2 md:space-x-4">
            
            <button @click="activeTab = 'unggulan'" :class="{'border-indigo-600 text-indigo-600 bg-indigo-50/50': activeTab === 'unggulan', 'border-transparent text-gray-500 hover:text-gray-700': activeTab !== 'unggulan'}"
                class="py-3 px-4 sm:px-6 text-base font-semibold border-b-2 transition duration-300 rounded-t-lg">
                <x-heroicon-o-sparkles class="w-5 h-5 mr-1 inline-block"/> Program Unggulan
            </button>
            
            <button @click="activeTab = 'budaya'" :class="{'border-indigo-600 text-indigo-600 bg-indigo-50/50': activeTab === 'budaya', 'border-transparent text-gray-500 hover:text-gray-700': activeTab !== 'budaya'}"
                class="py-3 px-4 sm:px-6 text-base font-semibold border-b-2 transition duration-300 rounded-t-lg">
                <x-heroicon-o-calendar-days class="w-5 h-5 mr-1 inline-block"/> Budaya & Pembiasaan
            </button>
            
            <button @click="activeTab = 'agenda_tw'" :class="{'border-indigo-600 text-indigo-600 bg-indigo-50/50': activeTab === 'agenda_tw', 'border-transparent text-gray-500 hover:text-gray-700': activeTab !== 'agenda_tw'}"
                class="py-3 px-4 sm:px-6 text-base font-semibold border-b-2 transition duration-300 rounded-t-lg">
                <x-heroicon-o-clock class="w-5 h-5 mr-1 inline-block"/> Program Triwulan
            </button>

             <button @click="activeTab = 'agenda_thn'" :class="{'border-indigo-600 text-indigo-600 bg-indigo-50/50': activeTab === 'agenda_thn', 'border-transparent text-gray-500 hover:text-gray-700': activeTab !== 'agenda_thn'}"
                class="py-3 px-4 sm:px-6 text-base font-semibold border-b-2 transition duration-300 rounded-t-lg">
                <x-heroicon-o-globe-alt class="w-5 h-5 mr-1 inline-block"/> Program Tahunan
            </button>
        </div>

        {{-- TAB CONTENT CONTAINER --}}
        <div class="bg-gray-50 p-6 sm:p-10 rounded-xl shadow-inner border border-gray-100">
            
            {{-- Content: Program Unggulan --}}
            <div x-show="activeTab === 'unggulan'" x-transition:enter.duration.500ms class="grid md:grid-cols-2 gap-x-12 gap-y-6">
                <h3 class="md:col-span-2 text-3xl font-bold text-gray-800 mb-4 border-b pb-2">Program Unggulan Sekolah</h3>
                @foreach ($programUnggulan as $item)
                    <p class="flex items-start text-lg text-gray-700">
                        <x-heroicon-o-check-circle class="w-6 h-6 text-green-500 flex-shrink-0 mr-3 mt-1"/>
                        <span>{{ $item }}</span>
                    </p>
                @endforeach
            </div>

            {{-- Content: Budaya & Pembiasaan Sekolah --}}
            <div x-show="activeTab === 'budaya'" x-transition:enter.duration.500ms class="grid md:grid-cols-2 gap-x-12 gap-y-6">
                 <h3 class="md:col-span-2 text-3xl font-bold text-gray-800 mb-4 border-b pb-2">Budaya & Pembiasaan Harian</h3>
                @foreach ($budayaSekolah as $item)
                    <p class="flex items-start text-lg text-gray-700">
                        <x-heroicon-o-arrow-path-rounded-square class="w-6 h-6 text-indigo-500 flex-shrink-0 mr-3 mt-1"/>
                        <span>{{ $item }}</span>
                    </p>
                @endforeach
            </div>

            {{-- Content: Program Triwulan --}}
            <div x-show="activeTab === 'agenda_tw'" x-transition:enter.duration.500ms class="grid md:grid-cols-2 gap-x-12 gap-y-6">
                <h3 class="md:col-span-2 text-3xl font-bold text-gray-800 mb-4 border-b pb-2">Agenda Kegiatan Triwulan</h3>
                @foreach ($programTriwulan as $item)
                    <p class="flex items-start text-lg text-gray-700">
                        <x-heroicon-o-calendar-days class="w-6 h-6 text-yellow-500 flex-shrink-0 mr-3 mt-1"/>
                        <span>{{ $item }}</span>
                    </p>
                @endforeach
            </div>
            
            {{-- Content: Program Tahunan --}}
            <div x-show="activeTab === 'agenda_thn'" x-transition:enter.duration.500ms class="grid md:grid-cols-2 gap-x-12 gap-y-6">
                <h3 class="md:col-span-2 text-3xl font-bold text-gray-800 mb-4 border-b pb-2">Agenda Kegiatan Tahunan</h3>
                @foreach ($programTahunan as $item)
                    <p class="flex items-start text-lg text-gray-700">
                        <x-heroicon-o-building-office-2 class="w-6 h-6 text-red-500 flex-shrink-0 mr-3 mt-1"/>
                        <span>{{ $item }}</span>
                    </p>
                @endforeach
            </div>

        </div> {{-- END TAB CONTENT CONTAINER --}}
    </div>
</section>

    {{-- ******************************************************************* --}}
    {{-- 6. FASILITAS (Menggunakan list statis $fasilitasList) --}}
    {{-- ******************************************************************* --}}
    {{-- Kode sudah OK, menggunakan $fasilitasList --}}
    <section id="fasilitas" class="py-24 bg-gray-50/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
             <h2 class="text-4xl font-bold text-gray-900 text-center mb-4">
                Sarana & Prasarana Unggulan
             </h2>
             <p class="text-center text-lg text-gray-600 mb-16 max-w-2xl mx-auto">Kami menyediakan lingkungan belajar yang aman, nyaman, dan modern untuk mendukung perkembangan optimal siswa.</p>

             <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                 @foreach ($fasilitasList as $fasilitas_item)
                     <div class="p-6 bg-white rounded-xl shadow-lg border border-gray-100 text-center transition duration-300 transform hover:bg-green-50 hover:shadow-xl">
                         <x-heroicon-o-map-pin class="w-10 h-10 text-green-500 mx-auto mb-3"/>
                         <p class="font-semibold text-gray-800">{{ $fasilitas_item }}</p>
                     </div>
                 @endforeach
             </div>
        </div>
    </section>

@php
    if (isset($ekstrakurikuler) && $ekstrakurikuler->isNotEmpty()) {
        $dataEkskul = $ekstrakurikuler->take(6);
        $sumber = 'db';
    } elseif (isset($ekstrakulikulerList) && count($ekstrakulikulerList)) {
        $dataEkskul = collect(array_slice($ekstrakulikulerList, 0, 6));
        $sumber = 'statis';
    } else {
        $dataEkskul = collect();
        $sumber = null;
    }
@endphp



@if ($dataEkskul->isNotEmpty())
<section id="ekskul" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <h2 class="text-4xl font-bold text-gray-900 text-center mb-4">
            Ekstrakurikuler Pilihan & Pembinaan Bakat
        </h2>
        <p class="text-center text-lg text-gray-600 mb-16 max-w-2xl mx-auto">
            Kembangkan minat dan bakat anak melalui kegiatan ekstrakurikuler yang menarik dan edukatif.
        </p>

        @if ($sumber === 'statis')
        <div class="max-w-4xl mx-auto mb-8 p-4 bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 rounded-lg text-center">
            ⚠️ Data ekstrakurikuler masih menggunakan data statis.  
            Silakan lengkapi melalui menu Admin.
        </div>
        @endif

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            @foreach ($dataEkskul as $ekskul)

                @php
                    // nama
                    $nama = is_object($ekskul) ? $ekskul->nama : $ekskul;

                    // gambar prioritas:
                    // 1. galeri eskul
                    // 2. foto_cover
                    // 3. default
                    if (is_object($ekskul) && $ekskul->galeriEskul->isNotEmpty()) {
                        $gambar = asset('storage/' . $ekskul->galeriEskul->first()->gambar);
                    } elseif (is_object($ekskul) && $ekskul->foto_cover) {
                        $gambar = asset('storage/' . $ekskul->foto_cover);
                    } else {
                        $gambar = asset('images/ekskul-default.jpg');
                    }
                @endphp

                <div class="group bg-gray-100 rounded-xl shadow-lg overflow-hidden transition hover:scale-[1.03] hover:shadow-xl">
                    <img src="{{ $gambar }}"
                         alt="{{ $nama }}"
                         class="w-full h-32 object-cover group-hover:opacity-80 transition">

                    <div class="p-3 text-center">
                        <h4 class="text-sm font-bold text-gray-800 truncate">
                            {{ $nama }}
                        </h4>
                        <p class="text-xs font-semibold mt-1
                            {{ $sumber === 'db' ? 'text-green-600' : 'text-gray-400' }}">
                            {{ $sumber === 'db' ? 'Aktif' : 'Statis' }}
                        </p>
                    </div>
                </div>

            @endforeach
        </div>

        @if ($sumber === 'db' && $ekskulCount > 6)
        <div class="text-center mt-12">
            <a href="{{ route('public.ekskul.index') }}"
               class="inline-flex items-center gap-2 text-green-600 hover:text-green-800 font-semibold">
                <span>Lihat Semua Ekstrakurikuler</span>
                <x-heroicon-o-arrow-right class="w-4 h-4"/>
            </a>
        </div>
        @endif

    </div>
</section>
@endif



    {{-- ******************************************************************* --}}
    {{-- 8. BERITA TERBARU & PRESTASI --}}
    {{-- ******************************************************************* --}}
    {{-- Kode sudah OK, menggunakan $beritas dan $prestasies --}}
    <section id="news-and-prestas" class="py-24 bg-gray-50/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                 <h2 class="text-4xl font-bold text-gray-900">
                    Aktivitas & Penghargaan Terbaru
                 </h2>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                {{-- Sub-section Berita (Aksen Indigo) --}}
                <div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-8 border-l-4 border-indigo-500 pl-4">Berita Terbaru</h3>
                    <div class="space-y-8">
                        @foreach ($beritas->take(3) as $berita)
                            <x-public.news-preview :berita="$berita" class="bg-white p-4 rounded-xl border border-gray-100 hover:shadow-md transition duration-300"/> 
                        @endforeach
                    </div>
                    <div class="mt-8 text-left">
                        <a href="{{ route('public.berita.index') }}" class="text-lg text-indigo-600 hover:text-indigo-800 font-semibold inline-flex items-center space-x-2">
                            <span>Lihat Semua Berita</span> 
                            <x-heroicon-o-arrow-right class="w-4 h-4"/>
                        </a>
                    </div>
                </div>

                {{-- Sub-section Prestasi (Aksen Green) --}}
                <div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-8 border-l-4 border-green-500 pl-4">Prestasi Siswa</h3>
                    <div class="space-y-6">
                        @foreach ($prestasies->take(4) as $prestasi)
                            <x-public.prestasi-item :prestasi="$prestasi" class="bg-green-50/50 p-4 rounded-xl border border-green-100 hover:bg-green-100 transition duration-300"/> 
                        @endforeach
                    </div>
                    <div class="mt-8 text-left">
                        <a href="{{ route('public.prestasi.index') }}" class="text-lg text-green-600 hover:text-green-800 font-semibold inline-flex items-center space-x-2">
                            <span>Lihat Semua Prestasi</span> 
                            <x-heroicon-o-arrow-right class="w-4 h-4"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ******************************************************************* --}}
    {{-- 9. GURU / STAFF PENGAJAR --}}
    {{-- ******************************************************************* --}}
    {{-- Kode sudah OK, menggunakan $gurus --}}
    @if ($gurus->isNotEmpty())
    <section id="gurus" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-gray-900 text-center mb-4">
                Guru & Tenaga Pendidik Terbaik
            </h2>
             <p class="text-center text-lg text-gray-600 mb-16 max-w-2xl mx-auto">Tim pengajar kami berdedikasi dengan pemahaman mendalam tentang kurikulum Islami dan akademis.</p>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6">
                @foreach ($gurus->take(6) as $guru)
                    <x-public.guru-card :guru="$guru" class="rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition duration-300 transform hover:-translate-y-1"/>
                @endforeach
            </div>
            <div class="text-center mt-12">
                <a href="{{ route('public.guru.index') }}" class="text-lg text-indigo-600 hover:text-indigo-800 font-semibold inline-flex items-center space-x-2">
                    <span>Lihat Profil Semua Staff Pengajar</span> 
                    <x-heroicon-o-arrow-right class="w-4 h-4"/>
                </a>
            </div>
        </div>
    </section>
    @endif

    {{-- ******************************************************************* --}}
    {{-- 10. GALERI --}}
    {{-- ******************************************************************* --}}
    {{-- Kode sudah OK, menggunakan $galeris --}}
    @if ($galeris->isNotEmpty())
    <section id="galeri" class="py-24 bg-gradient-to-br from-green-50/70 to-indigo-50/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-gray-900 text-center mb-4">
                Momen Kegiatan & Fasilitas
            </h2>
            <p class="text-center text-lg text-gray-600 mb-16 max-w-2xl mx-auto">Lihat langsung suasana belajar mengajar dan kegiatan siswa di SDIT Citra Islamic School.</p>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach ($galeris->take(8) as $galeri)
                    <img src="{{ $galeri->url_gambar }}" alt="{{ $galeri->keterangan }}" 
                         class="w-full h-48 object-cover rounded-xl shadow-lg border-2 border-white 
                               transform hover:scale-[1.03] transition duration-500 cursor-zoom-in" />
                @endforeach
            </div>
            <div class="text-center mt-12">
                <a href="{{ route('public.galeri.index') }}" class="text-lg text-indigo-600 hover:text-indigo-800 font-semibold inline-flex items-center space-x-2">
                    <span>Lihat Semua Galeri Foto</span> 
                    <x-heroicon-o-arrow-right class="w-4 h-4"/>
                </a>
            </div>  
        </div>
    </section>
    @endif

    {{-- ******************************************************************* --}}
    {{-- 11. CALL TO ACTION (CTA) FINAL --}}
    {{-- ******************************************************************* --}}
    {{-- Kode sudah OK --}}
    <section id="cta" class="py-20 bg-indigo-700">
        <div class="max-w-6xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-white sm:text-5xl mb-4">
                Jangan Tunda, Kuota Terbatas!
            </h2>
            <p class="text-indigo-200 text-xl mb-10 font-normal">
                Waktu pendaftaran segera berakhir. Amankan tempat untuk masa depan pendidikan anak Anda sekarang juga.
            </p>
            <a href="{{ route('pendaftaran') }}" 
               class="bg-green-400 text-indigo-900 hover:bg-green-500 font-bold py-4 px-12 rounded-full 
                      text-xl shadow-2xl transition duration-300 transform hover:scale-105 inline-flex items-center space-x-2">
                <x-heroicon-o-paper-airplane class="w-6 h-6 mr-2"/> <span>Ajukan Pendaftaran Siswa Baru</span>
            </a>
        </div>
    </section>

@endsection