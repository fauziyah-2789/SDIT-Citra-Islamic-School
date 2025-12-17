<x-guru.layouts title="Dashboard Guru">

    {{-- Data Placeholder/Testing (Sesuaikan dengan data dari Controller Guru Anda) --}}
    @php
        $heroImage = asset('images/sekolah.jpg'); // Gunakan gambar latar belakang yang sama atau relevan
        $user = Auth::user(); // Asumsi user sudah login
        
        // Statistik Cepat yang Relevan untuk Guru
        $jumlahKelasDiajar = $jumlahKelasDiajar ?? 3; // Placeholder
        $tugasBelumDinilai = $tugasBelumDinilai ?? 7; // Placeholder
        $materiDiunggah = $materiDiunggah ?? 12; // Placeholder
        $siswaBermasalah = $siswaBermasalah ?? 1; // Placeholder
        
        // Daftar Lengkap Fitur Guru (Berdasarkan Controller/View yang Anda berikan)
        $quickAccessFeatures = [
            // AKADEMIK UTAMA
            ['name' => 'Jadwal Mengajar', 'route' => 'guru.jadwal.index', 'icon' => 'calendar-days', 'color' => 'indigo', 'desc' => 'Lihat dan kelola jadwal mengajar Anda.'],
            ['name' => 'Input Nilai', 'route' => 'guru.nilai.index', 'icon' => 'star', 'color' => 'yellow', 'desc' => 'Masukkan nilai hasil ujian dan tugas siswa.'],
            ['name' => 'Kelola Tugas Siswa', 'route' => 'guru.tugas.index', 'icon' => 'document-check', 'color' => 'amber', 'desc' => 'Buat, distribusikan, dan nilai tugas.'],
            ['name' => 'Kelola Materi', 'route' => 'guru.materi.index', 'icon' => 'book-open', 'color' => 'red', 'desc' => 'Unggah dan atur materi pembelajaran.'],
            ['name' => 'Absensi Kelas', 'route' => 'guru.absensi.index', 'icon' => 'finger-print', 'color' => 'emerald', 'desc' => 'Input kehadiran siswa per pertemuan.'],
            ['name' => 'Kelola Soal Ujian', 'route' => 'guru.soal.index', 'icon' => 'clipboard-document-list', 'color' => 'orange', 'desc' => 'Buat dan kelola bank soal ujian.'], 
            
            // OPERASIONAL & AKUN
            ['name' => 'Pengumuman Sekolah', 'route' => 'guru.pengumuman.index', 'icon' => 'megaphone', 'color' => 'sky', 'desc' => 'Lihat semua pengumuman resmi sekolah.'],
            ['name' => 'Profil Saya', 'route' => 'guru.profil.index', 'icon' => 'user', 'color' => 'pink', 'desc' => 'Perbarui data pribadi dan akun Anda.'],
        ];
        
    @endphp

    {{-- HERO DENGAN BACKGROUND (Desain Mirip Admin) --}}
    <section class="relative overflow-hidden rounded-[2.5rem] mb-12 shadow-2xl" 
        style="background-image: url('{{ $heroImage }}'); background-size: cover; background-position: center;">
        
        {{-- Emerald-Sky Overlay (Dapat disesuaikan warnanya, misal: Blue-Indigo) --}}
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-700/80 via-sky-700/80 to-teal-700/80"></div>

        <div class="relative z-10 px-6 sm:px-10 py-16 md:py-24 text-white">
            <div class="flex items-center mb-4">
                <x-heroicon-o-academic-cap class="w-10 h-10 mr-4 text-emerald-300"/>
                <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight">
                    Dashboard Guru
                </h1>
            </div>
            <p class="max-w-3xl text-white/90 text-lg mt-2">
                Selamat datang, **{{ $user->name ?? 'Bapak/Ibu Guru' }}**. Pantau kelas, kelola materi, dan input penilaian siswa.
            </p>
        </div>
    </section>

    {{-- QUICK STATS (Card yang sudah ada) --}}
    <h2 class="text-3xl font-extrabold mb-8 text-slate-800 border-l-4 border-indigo-500 pl-4">Ringkasan Tugas Anda</h2>
    <section class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
        
        {{-- Card 1: Kelas Diajar --}}
        <a href="{{ route('guru.jadwal.index') }}" class="flex flex-col justify-between rounded-2xl p-6 bg-white shadow-lg border-b-4 border-indigo-500 hover:shadow-xl hover:scale-[1.02] transition duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <p class="text-base font-semibold text-slate-500">Kelas Diajar</p>
                <x-heroicon-o-user-group class="w-7 h-7 text-indigo-500 group-hover:scale-110 transition"/>
            </div>
            <p class="text-5xl font-extrabold text-indigo-600">{{ $jumlahKelasDiajar }}</p>
            <p class="text-sm text-slate-400 mt-2">Kelas total</p>
        </a>

        {{-- Card 2: Tugas Belum Dinilai --}}
        <a href="{{ route('guru.tugas.index') }}" class="flex flex-col justify-between rounded-2xl p-6 bg-white shadow-lg border-b-4 border-red-500 hover:shadow-xl hover:scale-[1.02] transition duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <p class="text-base font-semibold text-slate-500">Tugas Belum Dinilai</p>
                <x-heroicon-o-clipboard-document-check class="w-7 h-7 text-red-500 group-hover:scale-110 transition"/>
            </div>
            <p class="text-5xl font-extrabold text-red-600">{{ $tugasBelumDinilai }}</p>
            <p class="text-sm text-slate-400 mt-2">Menunggu koreksi</p>
        </a>

        {{-- Card 3: Materi Diunggah --}}
        <a href="{{ route('guru.materi.index') }}" class="flex flex-col justify-between rounded-2xl p-6 bg-white shadow-lg border-b-4 border-green-500 hover:shadow-xl hover:scale-[1.02] transition duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <p class="text-base font-semibold text-slate-500">Materi Aktif</p>
                <x-heroicon-o-book-open class="w-7 h-7 text-green-500 group-hover:scale-110 transition"/>
            </div>
            <p class="text-5xl font-extrabold text-green-600">{{ $materiDiunggah }}</p>
            <p class="text-sm text-slate-400 mt-2">Total materi yang aktif</p>
        </a>

        {{-- Card 4: Siswa Bermasalah (Perlu Diperhatikan) --}}
        <a href="{{ route('guru.absensi.index') }}" class="flex flex-col justify-between rounded-2xl p-6 bg-white shadow-lg border-b-4 border-yellow-500 hover:shadow-xl hover:scale-[1.02] transition duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <p class="text-base font-semibold text-slate-500">Siswa Absen/Bermasalah</p>
                <x-heroicon-o-exclamation-triangle class="w-7 h-7 text-yellow-500 group-hover:scale-110 transition"/>
            </div>
            <p class="text-5xl font-extrabold text-yellow-600">{{ $siswaBermasalah }}</p>
            <p class="text-sm text-slate-400 mt-2">Perlu tindak lanjut</p>
        </a>
    </section>

    {{-- QUICK ACCESS FITUR LENGKAP (Grid 3 Kolom Responsif) --}}
    <h2 class="text-3xl font-extrabold mb-8 text-slate-800 border-l-4 border-sky-500 pl-4">Akses Cepat Semua Fitur</h2>
    
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
        
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

    {{-- JADWAL HARI INI & PEMBERITAHUAN --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        {{-- Kolom 1-2: Jadwal Mengajar Hari Ini --}}
        <div class="lg:col-span-2">
            <h2 class="text-3xl font-extrabold mb-8 text-slate-800 border-l-4 border-teal-500 pl-4">Jadwal Mengajar Anda Hari Ini</h2>
            <div class="bg-white rounded-2xl shadow-xl p-6">
                {{-- Placeholder Jadwal --}}
                <ul class="space-y-4">
                    <li class="p-4 border-l-4 border-teal-500 bg-teal-50 rounded-lg flex justify-between items-center">
                        <div>
                            <p class="font-bold text-lg text-teal-800">Matematika (Kelas 7B)</p>
                            <p class="text-sm text-teal-600">Bab 3: Fungsi Kuadrat</p>
                        </div>
                        <span class="text-xl font-extrabold text-teal-600">08:00 - 09:30</span>
                    </li>
                    <li class="p-4 border-l-4 border-indigo-500 bg-indigo-50 rounded-lg flex justify-between items-center">
                        <div>
                            <p class="font-bold text-lg text-indigo-800">IPA (Kelas 8A)</p>
                            <p class="text-sm text-indigo-600">Mengoreksi tugas Bab 5</p>
                        </div>
                        <span class="text-xl font-extrabold text-indigo-600">10:00 - 11:30</span>
                    </li>
                </ul>
                <a href="{{ route('guru.jadwal.index') }}" class="mt-4 block text-center text-sm text-teal-600 hover:text-teal-800 transition">Lihat semua jadwal mingguan &rarr;</a>
            </div>
        </div>
        
        {{-- Kolom 3: Notifikasi Tugas --}}
        <div class="lg:col-span-1">
            <h2 class="text-3xl font-extrabold mb-8 text-slate-800 border-l-4 border-red-500 pl-4">Tugas Menunggu Nilai</h2>
            <div class="bg-white rounded-2xl shadow-xl p-6 h-[400px] flex flex-col justify-between">
                <div class="space-y-4">
                    {{-- Loop Notifikasi Tugas (Placeholder) --}}
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="flex items-start border-b pb-3 last:border-b-0">
                            <x-heroicon-o-arrow-path class="w-5 h-5 mr-3 text-red-500 flex-shrink-0"/>
                            <div>
                                <h4 class="font-semibold text-slate-800 line-clamp-1">3 Siswa mengumpulkan tugas MTK</h4>
                                <p class="text-xs text-slate-500">Kelas 7A | Batas: Besok, 10:00 WIB</p>
                            </div>
                        </div>
                    @endfor
                </div>
                
                <a href="{{ route('guru.tugas.index') }}" class="mt-auto block text-center text-red-600 font-semibold hover:text-red-800 transition py-3 rounded-lg border border-red-200 bg-red-50">Koreksi Tugas Sekarang &rarr;</a>
            </div>
        </div>
        
    </div>
    
</x-guru.layouts>