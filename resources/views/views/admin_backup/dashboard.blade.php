<x-admin.layout title="Dashboard Admin">

    {{-- Data Placeholder/Testing (Sesuaikan dengan data dari Controller Anda) --}}
    @php
        $heroImage = asset('images/sekolah.jpg'); 
        $user = Auth::user(); // Asumsi user sudah login
        
        // Statistik Cepat (Gunakan data aktual dari Controller)
        $jumlahPendaftaranBaru = $jumlahPendaftaranBaru ?? 3; // Placeholder
        $jumlahPesanBelumDibaca = $jumlahPesanBelumDibaca ?? 5; // Placeholder
        $jumlahGuru = $jumlahGuru ?? 12; // Placeholder
        $jumlahSiswa = $jumlahSiswa ?? 150; // Placeholder

        // Daftar Lengkap Fitur Admin (Berdasarkan Controller/View yang Anda berikan)
        $quickAccessFeatures = [
            // KELOMPOK AKADEMIK
            ['name' => 'Data Siswa', 'route' => 'admin.siswa.index', 'icon' => 'user-group', 'color' => 'blue'],
            ['name' => 'Data Guru', 'route' => 'admin.guru.index', 'icon' => 'academic-cap', 'color' => 'indigo'],
            ['name' => 'Data Ortu', 'route' => 'admin.ortu.index', 'icon' => 'users', 'color' => 'purple'],
            ['name' => 'Kelas & Mapel', 'route' => 'admin.kelas.index', 'icon' => 'building-library', 'color' => 'pink'],
            ['name' => 'Materi Pembelajaran', 'route' => 'admin.materi.index', 'icon' => 'book-open', 'color' => 'red'],
            
            // ROUTE KOREKSI: Mengarahkan ke Soal jika ada, jika tidak, arahkan ke Materi. Asumsi ada resource 'soal'.
            ['name' => 'Soal Ujian', 'route' => 'admin.soal.index', 'icon' => 'clipboard-document-list', 'color' => 'orange'], 
            
            ['name' => 'Tugas Siswa', 'route' => 'admin.tugas.index', 'icon' => 'document-check', 'color' => 'amber'],
            ['name' => 'Nilai Siswa', 'route' => 'admin.nilai.index', 'icon' => 'star', 'color' => 'yellow'],
            ['name' => 'Jadwal Pelajaran', 'route' => 'admin.jadwal.index', 'icon' => 'calendar-days', 'color' => 'lime'],
            ['name' => 'Absensi', 'route' => 'admin.absensi.index', 'icon' => 'finger-print', 'color' => 'emerald'],

            // KELOMPOK PUBLIKASI & WEBSITE
            ['name' => 'Pendaftaran Siswa', 'route' => 'admin.pendaftaran.index', 'icon' => 'paper-airplane', 'color' => 'teal'],
            ['name' => 'Berita & Artikel', 'route' => 'admin.berita.index', 'icon' => 'newspaper', 'color' => 'cyan'],
            ['name' => 'Pengumuman', 'route' => 'admin.pengumuman.index', 'icon' => 'megaphone', 'color' => 'sky'],
            ['name' => 'Galeri Foto & Video', 'route' => 'admin.galeri.index', 'icon' => 'photo', 'color' => 'blue'],
            ['name' => 'Fasilitas Sekolah', 'route' => 'admin.fasilitas.index', 'icon' => 'wrench-screwdriver', 'color' => 'indigo'],
            ['name' => 'Prestasi Sekolah', 'route' => 'admin.prestasi.index', 'icon' => 'trophy', 'color' => 'purple'],
            
            // ROUTE KOREKSI: profil_sekolah -> profilsekolah (Konsisten)
            ['name' => 'Profil Sekolah', 'route' => 'admin.profilsekolah.index', 'icon' => 'building-office-2', 'color' => 'pink'], 
            
            // ROUTE KOREKSI: Menggunakan ekstrakurikuler (asumsi resource name)
            ['name' => 'Ekstrakurikuler', 'route' => 'admin.ekstrakurikuler.index', 'icon' => 'puzzle-piece', 'color' => 'red'],
            
            // ROUTE KOREKSI: Custom route 'admin.landing.hero'
            ['name' => 'Setting Landing Page', 'route' => 'admin.landing.hero', 'icon' => 'globe-alt', 'color' => 'orange'], 
            
            ['name' => 'Pesan Masuk (Kontak)', 'route' => 'admin.pesan.index', 'icon' => 'envelope', 'color' => 'amber'],
            
            // KELOMPOK MANAJEMEN SISTEM
            ['name' => 'Manajemen User', 'route' => 'admin.users.index', 'icon' => 'cog-8-tooth', 'color' => 'slate'],
            ['name' => 'Laporan & Statistik', 'route' => 'admin.laporan.index', 'icon' => 'chart-bar-square', 'color' => 'gray'], // Asumsi LaporanController
            ['name' => 'Forum Diskusi', 'route' => 'admin.forum.index', 'icon' => 'chat-bubble-left-right', 'color' => 'zinc'],
        ];
        
        // Mengelompokkan Fitur untuk Tampilan Grid yang Lebih Baik
        $chunkedFeatures = array_chunk($quickAccessFeatures, ceil(count($quickAccessFeatures) / 3));

    @endphp

    {{-- HERO DENGAN BACKGROUND (MIRIP LANDING) --}}
    <section class="relative overflow-hidden rounded-[2.5rem] mb-12 shadow-2xl" 
        style="background-image: url('{{ $heroImage }}'); background-size: cover; background-position: center;">
        
        {{-- Emerald-Sky Overlay --}}
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-700/80 via-sky-700/80 to-indigo-700/80"></div>

        <div class="relative z-10 px-6 sm:px-10 py-16 md:py-24 text-white">
            <div class="flex items-center mb-4">
                <x-heroicon-o-chart-bar class="w-10 h-10 mr-4 text-emerald-300"/>
                <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight">
                    Dashboard Administrasi
                </h1>
            </div>
            <p class="max-w-3xl text-white/90 text-lg mt-2">
                Selamat datang, **{{ $user->name ?? 'Admin Sekolah' }}**. Kelola data akademik dan publikasi sekolah dengan mudah.
            </p>
        </div>
    </section>

    {{-- QUICK STATS (Card yang sudah ada, diperkuat) --}}
    <h2 class="text-3xl font-extrabold mb-8 text-slate-800 border-l-4 border-emerald-500 pl-4">Ringkasan Utama</h2>
    <section class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
        {{-- Card 1: Pendaftar Baru --}}
        <a href="{{ route('admin.pendaftaran.index') }}" class="flex flex-col justify-between rounded-2xl p-6 bg-white shadow-lg border-b-4 border-emerald-500 hover:shadow-xl hover:scale-[1.02] transition duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <p class="text-base font-semibold text-slate-500">Pendaftar Baru</p>
                <x-heroicon-o-paper-airplane class="w-7 h-7 text-emerald-500 group-hover:scale-110 transition"/>
            </div>
            <p class="text-5xl font-extrabold text-emerald-600">{{ $jumlahPendaftaranBaru }}</p>
            <p class="text-sm text-slate-400 mt-2">Belum diproses</p>
        </a>

        {{-- Card 2: Pesan Belum Dibaca --}}
        <a href="{{ route('admin.pesan.index') }}" class="flex flex-col justify-between rounded-2xl p-6 bg-white shadow-lg border-b-4 border-sky-500 hover:shadow-xl hover:scale-[1.02] transition duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <p class="text-base font-semibold text-slate-500">Pesan Belum Dibaca</p>
                <x-heroicon-o-envelope class="w-7 h-7 text-sky-500 group-hover:scale-110 transition"/>
            </div>
            <p class="text-5xl font-extrabold text-sky-600">{{ $jumlahPesanBelumDibaca }}</p>
            <p class="text-sm text-slate-400 mt-2">Perlu ditindaklanjuti</p>
        </a>

        {{-- Card 3: Jumlah Guru --}}
        <a href="{{ route('admin.guru.index') }}" class="flex flex-col justify-between rounded-2xl p-6 bg-white shadow-lg border-b-4 border-indigo-500 hover:shadow-xl hover:scale-[1.02] transition duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <p class="text-base font-semibold text-slate-500">Total Guru</p>
                <x-heroicon-o-academic-cap class="w-7 h-7 text-indigo-500 group-hover:scale-110 transition"/>
            </div>
            <p class="text-5xl font-extrabold text-indigo-600">{{ $jumlahGuru }}</p>
            <p class="text-sm text-slate-400 mt-2">Staf akademik aktif</p>
        </a>

        {{-- Card 4: Total Siswa --}}
        <a href="{{ route('admin.siswa.index') }}" class="flex flex-col justify-between rounded-2xl p-6 bg-white shadow-lg border-b-4 border-pink-500 hover:shadow-xl hover:scale-[1.02] transition duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <p class="text-base font-semibold text-slate-500">Total Siswa</p>
                <x-heroicon-o-user-group class="w-7 h-7 text-pink-500 group-hover:scale-110 transition"/>
            </div>
            <p class="text-5xl font-extrabold text-pink-600">{{ $jumlahSiswa }}</p>
            <p class="text-sm text-slate-400 mt-2">Tahun ajaran ini</p>
        </a>
    </section>

    {{-- QUICK ACCESS FITUR LENGKAP (Grid 3 Kolom Responsif) --}}
    <h2 class="text-3xl font-extrabold mb-8 text-slate-800 border-l-4 border-sky-500 pl-4">Akses Cepat Semua Fitur ({{ count($quickAccessFeatures) }})</h2>
    
    {{-- Container Grid Utama (3 Kolom di Layar Besar, 1 di Mobile) --}}
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-12">
        
        @foreach ($quickAccessFeatures as $feature)
            @php
                $iconName = 'heroicon-o-' . $feature['icon'];
                $color = $feature['color'];
                $bgColor = "bg-{$color}-50";
                $borderColor = "border-{$color}-500";
                $textColor = "text-{$color}-600";
            @endphp
            
            <a href="{{ route($feature['route']) }}" class="flex items-center rounded-xl p-4 shadow-md {{ $bgColor }} border-l-4 {{ $borderColor }} hover:shadow-lg transition duration-300 group">
                {{-- Ikon --}}
                <div class="flex-shrink-0 w-10 h-10 rounded-full {{ $bgColor }} flex items-center justify-center mr-4">
                    <x-dynamic-component :component="$iconName" class="w-6 h-6 {{ $textColor }} group-hover:scale-110 transition"/>
                </div>
                
                {{-- Nama Fitur --}}
                <div>
                    <h3 class="font-semibold text-lg text-slate-800">{{ $feature['name'] }}</h3>
                    {{-- <p class="text-xs text-slate-500">Deskripsi singkat fungsi.</p> --}}
                </div>
                
                {{-- Arrow --}}
                <x-heroicon-o-arrow-small-right class="w-5 h-5 ml-auto {{ $textColor }} opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition"/>
            </a>
        @endforeach

    </section>

    {{-- Pengumuman Terakhir & Aktivitas Lain (2 Kolom) --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        {{-- Kolom 1-2: Pengumuman Terakhir (List) --}}
        <div class="lg:col-span-2">
            <h2 class="text-3xl font-extrabold mb-8 text-slate-800 border-l-4 border-indigo-500 pl-4">Aktivitas & Pemberitahuan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                {{-- Blok Pengumuman --}}
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-xl font-bold mb-5 text-indigo-600 flex items-center">
                        <x-heroicon-o-megaphone class="w-6 h-6 mr-2"/> Pengumuman Terbaru
                    </h3>
                    {{-- Loop Pengumuman (Placeholder) --}}
                    @for ($i = 1; $i <= 3; $i++)
                        <div class="flex border-b pb-4 mb-4 last:border-b-0 last:pb-0 last:mb-0">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center font-bold text-lg">
                                <x-heroicon-o-bell class="w-5 h-5"/>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold text-slate-800 line-clamp-1">Kegiatan Class Meeting Tahunan</h4>
                                <p class="text-sm text-slate-500 line-clamp-2">Harap semua guru dan siswa mempersiapkan diri untuk acara Class Meeting. Detail jadwal terlampir.</p>
                                <span class="text-xs text-indigo-400 mt-1 block">{{ 13-$i }} Desember 2025</span>
                            </div>
                        </div>
                    @endfor
                    <a href="{{ route('admin.pengumuman.index') }}" class="mt-4 block text-center text-indigo-600 font-semibold hover:text-indigo-800 transition">Lihat Semua Pengumuman &rarr;</a>
                </div>

                {{-- Blok Materi Terakhir --}}
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-xl font-bold mb-5 text-sky-600 flex items-center">
                        <x-heroicon-o-book-open class="w-6 h-6 mr-2"/> Materi Terakhir diunggah
                    </h3>
                    {{-- Loop Materi (Placeholder) --}}
                    @for ($i = 1; $i <= 3; $i++)
                        <div class="flex border-b pb-4 mb-4 last:border-b-0 last:pb-0 last:mb-0">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-sky-100 text-sky-600 flex items-center justify-center font-bold text-lg">
                                <x-heroicon-o-document-text class="w-5 h-5"/>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold text-slate-800 line-clamp-1">Materi {{ $i }}: Perubahan Iklim</h4>
                                <p class="text-sm text-slate-500 line-clamp-2">Diunggah oleh **[Nama Guru Placeholder]** untuk kelas 5A.</p>
                                <span class="text-xs text-sky-400 mt-1 block">{{ 13-$i }} Desember 2025</span>
                            </div>
                        </div>
                    @endfor
                    <a href="{{ route('admin.materi.index') }}" class="mt-4 block text-center text-sky-600 font-semibold hover:text-sky-800 transition">Kelola Materi &rarr;</a>
                </div>
            </div>
        </div>
        
        {{-- Kolom 3: Status Website Publik --}}
        <div class="lg:col-span-1">
            <h2 class="text-3xl font-extrabold mb-8 text-slate-800 border-l-4 border-teal-500 pl-4">Status Publikasi Web</h2>
            <div class="bg-white rounded-2xl shadow-xl p-6 h-[400px] flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex items-center justify-between border-b pb-3">
                        <p class="font-semibold text-slate-700 flex items-center"><x-heroicon-o-globe-alt class="w-5 h-5 mr-2 text-teal-500"/> Landing Hero</p>
                        <span class="text-sm font-bold text-green-600 bg-green-100 px-3 py-1 rounded-full">Aktif</span>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3">
                        <p class="font-semibold text-slate-700 flex items-center"><x-heroicon-o-newspaper class="w-5 h-5 mr-2 text-teal-500"/> Berita Terbit</p>
                        <span class="text-sm font-bold text-slate-600">14 Artikel</span>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3">
                        <p class="font-semibold text-slate-700 flex items-center"><x-heroicon-o-photo class="w-5 h-5 mr-2 text-teal-500"/> Galeri Foto</p>
                        <span class="text-sm font-bold text-slate-600">25 Album</span>
                    </div>
                    <div class="flex items-center justify-between pb-3">
                        <p class="font-semibold text-slate-700 flex items-center"><x-heroicon-o-paper-airplane class="w-5 h-5 mr-2 text-teal-500"/> Pendaftar Pending</p>
                        <span class="text-lg font-extrabold text-red-600">{{ $jumlahPendaftaranBaru }}</span>
                    </div>
                </div>
                
                {{-- ROUTE KOREKSI: Custom route 'admin.landing.hero' --}}
                <a href="{{ route('admin.landing.hero') }}" class="mt-auto block text-center text-teal-600 font-semibold hover:text-teal-800 transition py-3 rounded-lg border border-teal-200 bg-teal-50">Kelola Website Publik &rarr;</a>
            </div>
        </div>
        
    </div>
    

</x-admin.layout>