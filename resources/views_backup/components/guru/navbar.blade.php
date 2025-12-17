@php
    // --- Konfigurasi Menu Guru ---
    
    // KELOMPOK UTAMA: Akademik
    $menuItemsMain = [
        ['name' => 'Dashboard', 'route' => 'guru.dashboard', 'icon' => 'home'],
        ['name' => 'Jadwal Mengajar', 'route' => 'guru.jadwal.index', 'icon' => 'calendar-days'],
        ['name' => 'Materi Pembelajaran', 'route' => 'guru.materi.index', 'icon' => 'book-open'],
        ['name' => 'Soal Ujian', 'route' => 'guru.soal.index', 'icon' => 'clipboard-document-list'], 
        ['name' => 'Tugas Siswa', 'route' => 'guru.tugas.index', 'icon' => 'document-check'], 
    ];

    // KELOMPOK KANAN: Operasional & Akun
    $menuItemsRight = [
        'Operasional Kelas' => [
            ['name' => 'Input Nilai', 'route' => 'guru.nilai.index', 'icon' => 'star'], 
            ['name' => 'Absensi Kelas', 'route' => 'guru.absensi.index', 'icon' => 'finger-print'],
            ['name' => 'Pengumuman', 'route' => 'guru.pengumuman.index', 'icon' => 'megaphone'],
        ],
        
        'Laporan & Akun' => [
            ['name' => 'Laporan Data', 'route' => 'guru.laporan.index', 'icon' => 'document-text'],
            ['name' => 'Profil Saya', 'route' => 'guru.profil.index', 'icon' => 'user'],
            // Jika ada forum khusus guru
            ['name' => 'Forum Diskusi', 'route' => 'guru.forum.index', 'icon' => 'chat-bubble-left-right'], 
        ],
    ];


    // --- Shortcut Icons (Disesuaikan untuk Guru) ---
    $shortcuts = [
        // Asumsi: Guru bisa melihat tugas baru yang masuk / notifikasi dari admin
        ['name' => 'Tugas Masuk Baru', 'route' => 'guru.tugas.index', 'icon' => 'document-check', 'badge' => 7], 
        ['name' => 'Notifikasi Admin', 'route' => 'guru.notifikasi.index', 'icon' => 'bell', 'badge' => 2],
        ['name' => 'Profil', 'route' => 'guru.profil.index', 'icon' => 'cog'],
    ];
@endphp

{{-- KODE HTML NAVBAR (Sama persis dengan Admin, hanya berbeda variabel menu di atas) --}}
@include('components.shared.navbar_base', [
    'role' => 'Guru', // Label Role
    'dashboardRoute' => 'guru.dashboard',
    'menuItemsLeft' => $menuItemsMain,
    'menuItemsRight' => $menuItemsRight,
    'shortcuts' => $shortcuts,
    'profileComponent' => 'guru.nav-profile', // Ganti component profile
])