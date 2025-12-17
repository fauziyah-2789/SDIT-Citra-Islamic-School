@php
    // Data Placeholder (Ambil dari $detailAnak yang dilempar oleh Controller)
    $siswa = $detailAnak ?? (object)[
        'nama' => 'Fajar Nugraha',
        'nisn' => '0012345678',
        'kelas' => '7B',
        'tahun_akademik' => '2025/2026',
        'wali_kelas' => 'Bpk. Budi Santoso',
        'tanggal_lahir' => '2013-05-15',
        'rata_nilai' => 87.5,
        'kehadiran_persen' => 95,
        'foto' => asset('images/default_siswa.png'),
    ];
    
    // Asumsi data nilai terbaru
    $nilaiTerbaru = [
        (object)['mapel' => 'Matematika', 'jenis' => 'Ulangan Harian', 'nilai' => 92, 'tanggal' => '2025-12-10'],
        (object)['mapel' => 'IPA', 'jenis' => 'Tugas Proyek', 'nilai' => 78, 'tanggal' => '2025-12-08'],
        (object)['mapel' => 'Bhs. Inggris', 'jenis' => 'Ulangan Harian', 'nilai' => 88, 'tanggal' => '2025-12-05'],
    ];

    // Asumsi data absensi bulan ini
    $absensiBulanIni = [
        (object)['tipe' => 'Hadir', 'jumlah' => 18, 'color' => 'green'],
        (object)['tipe' => 'Izin', 'jumlah' => 1, 'color' => 'yellow'],
        (object)['tipe' => 'Sakit', 'jumlah' => 0, 'color' => 'orange'],
        (object)['tipe' => 'Alpha', 'jumlah' => 1, 'color' => 'red'],
    ];
@endphp

<x-ortu.layouts title="Detail Siswa: {{ $siswa->nama }}">
    
    {{-- Tombol Kembali --}}
    <div class="mb-6">
        <a href="{{ route('ortu.anak.index') }}" class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-semibold transition">
            <x-heroicon-o-arrow-left class="w-5 h-5 mr-2"/> Kembali ke Daftar Anak
        </a>
    </div>

    {{-- HEADER PROFIL ANAK --}}
    <div class="bg-white rounded-2xl shadow-xl p-8 mb-10 border-t-8 border-indigo-600">
        <div class="flex flex-col md:flex-row items-start md:items-center">
            {{-- Foto Profil --}}
            <img src="{{ $siswa->foto }}" alt="Foto {{ $siswa->nama }}" class="w-28 h-28 rounded-full object-cover ring-4 ring-indigo-100 mr-8 mb-4 md:mb-0">
            
            {{-- Info Dasar --}}
            <div>
                <span class="text-sm font-medium text-slate-500">{{ $siswa->kelas }} | NISN: {{ $siswa->nisn }}</span>
                <h1 class="text-4xl font-extrabold text-slate-900 mt-1">{{ $siswa->nama }}</h1>
                <p class="text-lg text-slate-700">Wali Kelas: <span class="font-semibold text-indigo-600">{{ $siswa->wali_kelas }}</span></p>
            </div>
            
            {{-- Shortcut Laporan --}}
            <div class="md:ml-auto flex gap-3 mt-4 md:mt-0">
                <a href="{{ route('ortu.nilai.index') }}" class="flex flex-col items-center p-3 rounded-xl bg-yellow-50 hover:bg-yellow-100 transition text-yellow-800">
                    <x-heroicon-o-star class="w-6 h-6"/>
                    <span class="text-xs font-semibold mt-1">Laporan Nilai</span>
                </a>
                <a href="{{ route('ortu.absensi.index') }}" class="flex flex-col items-center p-3 rounded-xl bg-teal-50 hover:bg-teal-100 transition text-teal-800">
                    <x-heroicon-o-finger-print class="w-6 h-6"/>
                    <span class="text-xs font-semibold mt-1">Riwayat Absensi</span>
                </a>
            </div>
        </div>
    </div>

    {{-- KONTEN AKADEMIK & RINGKASAN --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        {{-- Kolom 1-2: Ringkasan Akademik & Nilai Terbaru --}}
        <div class="lg:col-span-2">
            <h2 class="text-3xl font-extrabold text-slate-800 mb-6 border-l-4 border-yellow-500 pl-4">Ringkasan Akademik</h2>

            {{-- QUICK STATS NILAI & KEHADIRAN --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                {{-- Card Rata-rata Nilai --}}
                <div class="p-6 bg-white rounded-xl shadow-md border-b-4 border-yellow-500">
                    <p class="text-sm font-medium text-slate-500">Rata-rata Nilai Semester Ini</p>
                    <p class="text-5xl font-extrabold text-yellow-600 mt-1">{{ $siswa->rata_nilai }}</p>
                    <p class="text-sm text-slate-400 mt-2">Per tanggal {{ now()->format('d M Y') }}</p>
                </div>
                
                {{-- Card Kehadiran --}}
                <div class="p-6 bg-white rounded-xl shadow-md border-b-4 border-teal-500">
                    <p class="text-sm font-medium text-slate-500">Persentase Kehadiran Total</p>
                    <p class="text-5xl font-extrabold text-teal-600 mt-1">{{ $siswa->kehadiran_persen }}%</p>
                    <p class="text-sm text-slate-400 mt-2">Dihitung dari awal tahun akademik</p>
                </div>
            </div>

            {{-- NILAI TERBARU --}}
            <h3 class="text-2xl font-bold text-slate-800 mb-4 border-b pb-2">3 Nilai Terbaru</h3>
            <div class="bg-white rounded-xl shadow-md p-6">
                <ul class="divide-y divide-gray-100">
                    @foreach ($nilaiTerbaru as $nilai)
                        <li class="flex justify-between items-center py-3">
                            <div>
                                <p class="font-semibold text-slate-800">{{ $nilai->mapel }}</p>
                                <p class="text-sm text-slate-500">{{ $nilai->jenis }} | {{ \Carbon\Carbon::parse($nilai->tanggal)->format('d M Y') }}</p>
                            </div>
                            <span class="text-3xl font-extrabold {{ $nilai->nilai >= 80 ? 'text-green-600' : ($nilai->nilai >= 70 ? 'text-yellow-600' : 'text-red-600') }}">
                                {{ $nilai->nilai }}
                            </span>
                        </li>
                    @endforeach
                </ul>
                <a href="{{ route('ortu.nilai.index') }}" class="mt-4 block text-center text-sm text-yellow-600 hover:text-yellow-800 transition">Lihat detail nilai per mata pelajaran &rarr;</a>
            </div>
            
        </div>
        
        {{-- Kolom 3: Detail Absensi --}}
        <div class="lg:col-span-1">
            <h2 class="text-3xl font-extrabold text-slate-800 mb-6 border-l-4 border-teal-500 pl-4">Absensi Bulan Ini</h2>
            <div class="bg-white rounded-2xl shadow-xl p-6">
                <ul class="space-y-4">
                    @foreach ($absensiBulanIni as $item)
                        @php
                            $bgColor = "bg-{$item->color}-50";
                            $textColor = "text-{$item->color}-700";
                            $borderColor = "border-{$item->color}-500";
                        @endphp
                        <li class="p-4 rounded-lg border-l-4 {{ $bgColor }} {{ $borderColor }} flex justify-between items-center">
                            <span class="font-semibold {{ $textColor }}">{{ $item->tipe }}</span>
                            <span class="text-2xl font-extrabold {{ $textColor }}">{{ $item->jumlah }} Hari</span>
                        </li>
                    @endforeach
                </ul>
                
                <h3 class="text-sm font-semibold text-slate-600 mt-6 mb-2">Total Hari Sekolah: 20 Hari</h3>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-green-600 h-2.5 rounded-full" style="width: {{ $siswa->kehadiran_persen }}%"></div>
                </div>

                <a href="{{ route('ortu.absensi.index') }}" class="mt-4 block text-center text-sm text-teal-600 hover:text-teal-800 transition">Lihat kalender absensi &rarr;</a>
            </div>
        </div>
        
    </div>
    
</x-ortu.layouts>