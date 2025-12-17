<x-ortu.layouts title="Dashboard Orang Tua">

    {{-- Data Placeholder/Testing (Sesuaikan dengan data dari Controller Ortu Anda) --}}
    @php
        $heroImage = asset('images/sekolah.jpg'); 
        $user = Auth::user(); 
        
        // Data Anak (Asumsi Ortu punya 1 anak, atau kita ambil anak pertama)
        $namaAnak = 'Fajar Nugraha'; // Placeholder dari data siswa
        $kelasAnak = 'Kelas 7B';
        
        // Statistik Cepat yang Relevan untuk Ortu
        $rataRataNilai = $rataRataNilai ?? 87.5; // Placeholder
        $tugasBelumKumpul = $tugasBelumKumpul ?? 1; // Placeholder
        $persentaseKehadiran = $persentaseKehadiran ?? 95; // Placeholder
        
        // Daftar Lengkap Fitur Orang Tua
        $quickAccessFeatures = [
            // PEMANTAUAN ANAK
            ['name' => 'Data Anak', 'route' => 'ortu.anak.index', 'icon' => 'user-group', 'color' => 'indigo', 'desc' => 'Lihat profil dan data siswa (anak) Anda.'],
            ['name' => 'Laporan Nilai', 'route' => 'ortu.nilai.index', 'icon' => 'star', 'color' => 'yellow', 'desc' => 'Lihat dan unduh laporan nilai lengkap.'],
            ['name' => 'Laporan Absensi', 'route' => 'ortu.absensi.index', 'icon' => 'finger-print', 'color' => 'teal', 'desc' => 'Cek riwayat kehadiran harian dan bulanan.'],
            ['name' => 'Daftar Tugas', 'route' => 'ortu.tugas.index', 'icon' => 'document-check', 'color' => 'red', 'desc' => 'Pantau tugas yang diberikan dan batas waktu kumpul.'],
            
            // INFORMASI SEKOLAH
            ['name' => 'Pengumuman Sekolah', 'route' => 'ortu.pengumuman.index', 'icon' => 'megaphone', 'color' => 'sky', 'desc' => 'Informasi penting dari pihak sekolah.'],
            ['name' => 'Kalender Akademik', 'route' => 'ortu.jadwal.index', 'icon' => 'calendar-days', 'color' => 'lime', 'desc' => 'Lihat jadwal ujian, libur, dan kegiatan.'],
        ];
        
    @endphp

    {{-- HERO DENGAN BACKGROUND (Desain Mirip Admin) --}}
    <section class="relative overflow-hidden rounded-[2.5rem] mb-12 shadow-2xl" 
        style="background-image: url('{{ $heroImage }}'); background-size: cover; background-position: center;">
        
        {{-- Overlay Ortu: Indigo-Purple --}}
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-700/80 via-purple-700/80 to-pink-700/80"></div>

        <div class="relative z-10 px-6 sm:px-10 py-16 md:py-24 text-white">
            <div class="flex items-center mb-4">
                <x-heroicon-o-users class="w-10 h-10 mr-4 text-purple-300"/>
                <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight">
                    Dashboard Orang Tua
                </h1>
            </div>
            <p class="max-w-3xl text-white/90 text-lg mt-2">
                Selamat datang, **{{ $user->name ?? 'Bapak/Ibu' }}**. Pantau perkembangan akademis dan kehadiran {{ $namaAnak }}.
            </p>
        </div>
    </section>

    {{-- QUICK INFO ANAK --}}
    <h2 class="text-3xl font-extrabold mb-8 text-slate-800 border-l-4 border-indigo-500 pl-4">Informasi Anak</h2>
    <div class="bg-white p-6 rounded-2xl shadow-xl border-t-8 border-indigo-600 mb-12">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between">
            <div class="mb-4 md:mb-0">
                <p class="text-sm font-medium text-slate-500">Siswa yang Anda pantau:</p>
                <h3 class="text-4xl font-extrabold text-gray-900">{{ $namaAnak }}</h3>
                <p class="text-xl text-indigo-600">{{ $kelasAnak }}</p>
            </div>
            <a href="{{ route('ortu.profil.index') }}" class="bg-indigo-500 text-white px-6 py-3 rounded-xl font-semibold hover:bg-indigo-600 transition shadow-md">
                Lihat Data Lengkap Anak &rarr;
            </a>
        </div>
    </div>
    
    {{-- QUICK STATS (Card yang sudah ada) --}}
    <h2 class="text-3xl font-extrabold mb-8 text-slate-800 border-l-4 border-teal-500 pl-4">Ringkasan Akademik</h2>
    <section class="grid grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
        
        {{-- Card 1: Rata-Rata Nilai --}}
        <a href="{{ route('ortu.nilai.index') }}" class="flex flex-col justify-between rounded-2xl p-6 bg-white shadow-lg border-b-4 border-yellow-500 hover:shadow-xl hover:scale-[1.02] transition duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <p class="text-base font-semibold text-slate-500">Rata-rata Nilai</p>
                <x-heroicon-o-star class="w-7 h-7 text-yellow-500 group-hover:scale-110 transition"/>
            </div>
            <p class="text-5xl font-extrabold text-yellow-600">{{ $rataRataNilai }}</p>
            <p class="text-sm text-slate-400 mt-2">Seluruh mata pelajaran</p>
        </a>

        {{-- Card 2: Tugas Belum Kumpul --}}
        <a href="{{ route('ortu.tugas.index') }}" class="flex flex-col justify-between rounded-2xl p-6 bg-white shadow-lg border-b-4 border-red-500 hover:shadow-xl hover:scale-[1.02] transition duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <p class="text-base font-semibold text-slate-500">Tugas Belum Kumpul</p>
                <x-heroicon-o-clipboard-document-check class="w-7 h-7 text-red-500 group-hover:scale-110 transition"/>
            </div>
            <p class="text-5xl font-extrabold text-red-600">{{ $tugasBelumKumpul }}</p>
            <p class="text-sm text-slate-400 mt-2">Mendekati tenggat waktu</p>
        </a>

        {{-- Card 3: Persentase Kehadiran --}}
        <a href="{{ route('ortu.absensi.index') }}" class="flex flex-col justify-between rounded-2xl p-6 bg-white shadow-lg border-b-4 border-teal-500 hover:shadow-xl hover:scale-[1.02] transition duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <p class="text-base font-semibold text-slate-500">Kehadiran (Bulan Ini)</p>
                <x-heroicon-o-chart-bar class="w-7 h-7 text-teal-500 group-hover:scale-110 transition"/>
            </div>
            <p class="text-5xl font-extrabold text-teal-600">{{ $persentaseKehadiran }}%</p>
            <p class="text-sm text-slate-400 mt-2">Tepat waktu dan hadir</p>
        </a>
    </section>

    {{-- QUICK ACCESS FITUR LENGKAP (Grid 2 Kolom Responsif) --}}
    <h2 class="text-3xl font-extrabold mb-8 text-slate-800 border-l-4 border-purple-500 pl-4">Akses Cepat Fitur</h2>
    
    <section class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
        
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
                <div class="flex-shrink-0 w-12 h-12 rounded-full {{ $bgColor }} flex items-center justify-center mr-4 border {{ $borderColor }}">
                    <x-dynamic-component :component="$iconName" class="w-7 h-7 {{ $textColor }} group-hover:scale-110 transition"/>
                </div>
                
                {{-- Nama Fitur --}}
                <div>
                    <h3 class="font-semibold text-lg text-slate-800">{{ $feature['name'] }}</h3>
                    <p class="text-xs text-slate-500 mt-1">{{ $feature['desc'] }}</p> 
                </div>
                
                {{-- Arrow --}}
                <x-heroicon-o-arrow-small-right class="w-5 h-5 ml-auto {{ $textColor }} opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition"/>
            </a>
        @endforeach

    </section>

    {{-- NILAI TERBARU & PENGUMUMAN --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        
        {{-- Kolom 1: 5 Nilai Terbaru --}}
        <div>
            <h2 class="text-3xl font-extrabold mb-8 text-slate-800 border-l-4 border-yellow-500 pl-4">5 Nilai Terakhir {{ $namaAnak }}</h2>
            <div class="bg-white rounded-2xl shadow-xl p-6">
                {{-- Placeholder Nilai --}}
                <ul class="space-y-4 divide-y divide-gray-100">
                    <li class="pt-2 flex justify-between items-center">
                        <div>
                            <p class="font-semibold text-slate-800">Matematika (UH Bab 3)</p>
                            <p class="text-sm text-slate-500">Guru: Bpk. Andi | 10 Des 2025</p>
                        </div>
                        <span class="text-2xl font-extrabold text-green-600">92</span>
                    </li>
                    <li class="pt-2 flex justify-between items-center">
                        <div>
                            <p class="font-semibold text-slate-800">IPA (Tugas Proyek)</p>
                            <p class="text-sm text-slate-500">Guru: Ibu Budi | 08 Des 2025</p>
                        </div>
                        <span class="text-2xl font-extrabold text-amber-600">78</span>
                    </li>
                    <li class="pt-2 flex justify-between items-center">
                        <div>
                            <p class="font-semibold text-slate-800">Bahasa Inggris (Ulangan Harian)</p>
                            <p class="text-sm text-slate-500">Guru: Mrs. Wati | 05 Des 2025</p>
                        </div>
                        <span class="text-2xl font-extrabold text-green-600">88</span>
                    </li>
                </ul>
                <a href="{{ route('ortu.nilai.index') }}" class="mt-4 block text-center text-sm text-yellow-600 hover:text-yellow-800 transition">Lihat semua laporan nilai &rarr;</a>
            </div>
        </div>
        
        {{-- Kolom 2: Pengumuman Sekolah --}}
        <div>
            <h2 class="text-3xl font-extrabold mb-8 text-slate-800 border-l-4 border-sky-500 pl-4">Pengumuman Terbaru</h2>
            <div class="bg-white rounded-2xl shadow-xl p-6 h-full">
                {{-- Placeholder Pengumuman --}}
                <ul class="space-y-4">
                    <li class="p-4 border-l-4 border-sky-500 bg-sky-50 rounded-lg">
                        <h4 class="font-bold text-sky-800">Pemberitahuan Pembayaran SPP Bulan Januari</h4>
                        <p class="text-sm text-sky-600 mt-1">Batas waktu pembayaran SPP adalah tanggal 10. Mohon diperhatikan.</p>
                        <span class="text-xs text-sky-400 mt-2 block">16 Desember 2025</span>
                    </li>
                    <li class="p-4 border-l-4 border-purple-500 bg-purple-50 rounded-lg">
                        <h4 class="font-bold text-purple-800">Rapat Komite Sekolah Akhir Semester</h4>
                        <p class="text-sm text-purple-600 mt-1">Diadakan pada tanggal 20 Desember 2025, pukul 09:00.</p>
                        <span class="text-xs text-purple-400 mt-2 block">14 Desember 2025</span>
                    </li>
                </ul>
                <a href="{{ route('ortu.pengumuman.index') }}" class="mt-4 block text-center text-sm text-sky-600 hover:text-sky-800 transition">Lihat semua pengumuman &rarr;</a>
            </div>
        </div>
        
    </div>
    
</x-ortu.layouts>