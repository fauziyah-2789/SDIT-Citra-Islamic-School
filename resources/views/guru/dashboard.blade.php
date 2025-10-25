<x-layouts.guru title="dashboard.blade">
<x-layouts.guru title="dashboard.blade">







@php
    // Quick Stats Guru
    $quickStats = [
        ['title' => 'Materi Diberikan', 'count' => $totalMateri ?? 12, 'color' => 'blue'],
        ['title' => 'Tugas Diberikan', 'count' => $totalTugas ?? 8, 'color' => 'yellow'],
        ['title' => 'Nilai Masuk', 'count' => $nilaiMasuk ?? '90%', 'color' => 'indigo'],
        ['title' => 'Pengumuman Aktif', 'count' => $pengumumanAktif ?? 3, 'color' => 'green'],
    ];

    // Menu Cepat Guru
    $menuCards = [
        ['name' => 'Kelola Materi', 'route' => '#', 'icon' => '📚', 'color' => 'blue', 'notif' => 0],
        ['name' => 'Kelola Tugas', 'route' => '#', 'icon' => '📄', 'color' => 'yellow', 'notif' => 0],
        ['name' => 'Input Nilai', 'route' => '#', 'icon' => '📝', 'color' => 'red', 'notif' => 0],
        ['name' => 'Kelola Soal', 'route' => '#', 'icon' => '📋', 'color' => 'orange', 'notif' => 0],
        ['name' => 'Pengumuman', 'route' => '#', 'icon' => '📢', 'color' => 'pink', 'notif' => $pengumumanAktif ?? 0],
        ['name' => 'Jadwal Mengajar', 'route' => '#', 'icon' => '📅', 'color' => 'lime', 'notif' => 0],
        ['name' => 'Absensi Siswa', 'route' => '#', 'icon' => '👥', 'color' => 'gray', 'notif' => 0],
        ['name' => 'Edit Profil', 'route' => route('guru.profil.edit'), 'icon' => '👤', 'color' => 'cyan', 'notif' => 0],
    ];
@endphp

{{-- QUICK STATS --}}
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mb-8">
    @foreach($quickStats as $stat)
        <div class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow-lg border-l-4 border-{{ $stat['color'] }}-500 flex flex-col justify-center transition transform hover:scale-105 hover:shadow-2xl">
            <p class="text-xs font-semibold uppercase text-gray-700 dark:text-gray-400">{{ $stat['title'] }}</p>
            <p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">{{ $stat['count'] }}</p>
        </div>
    @endforeach
</div>

{{-- MENU CEPAT --}}
<h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-gray-200">Menu Utama Guru</h3>
<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
    @foreach($menuCards as $card)
        <a href="{{ $card['route'] }}"
           class="relative bg-{{ $card['color'] }}-600 text-white rounded-xl shadow-lg p-5 flex flex-col items-center justify-center transform hover:scale-105 hover:shadow-2xl transition duration-300 ease-in-out min-h-[120px] text-center">
            {{-- Icon --}}
            <div class="mb-2 text-3xl">{{ $card['icon'] }}</div>
            {{-- Nama --}}
            <span class="font-extrabold text-sm sm:text-md leading-snug">{{ $card['name'] }}</span>
            {{-- Badge Notifikasi --}}
            @if($card['notif'] > 0)
                <span class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-0.5 rounded-full">{{ $card['notif'] }}</span>
            @endif
        </a>
    @endforeach
</div>









</x-layouts.guru>
</x-layouts.guru>
