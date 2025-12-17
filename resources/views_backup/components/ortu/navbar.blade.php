@php
    // --- Konfigurasi Menu Orang Tua ---
    
    // KELOMPOK UTAMA: Pemantauan Anak
    $menuItemsMain = [
        ['name' => 'Dashboard', 'route' => 'ortu.dashboard', 'icon' => 'home'],
        ['name' => 'Data Anak', 'route' => 'ortu.anak.index', 'icon' => 'user-group'],
        ['name' => 'Laporan Nilai', 'route' => 'ortu.nilai.index', 'icon' => 'star'],
        ['name' => 'Laporan Absensi', 'route' => 'ortu.absensi.index', 'icon' => 'finger-print'], 
        ['name' => 'Daftar Tugas', 'route' => 'ortu.tugas.index', 'icon' => 'document-check'], 
    ];

    // KELOMPOK KANAN: Informasi & Akun
    $menuItemsRight = [
        'Informasi Sekolah' => [
            ['name' => 'Pengumuman', 'route' => 'ortu.pengumuman.index', 'icon' => 'megaphone'], 
            ['name' => 'Kalender Akademik', 'route' => 'ortu.jadwal.index', 'icon' => 'calendar-days'],
        ],
        
        'Akun' => [
            ['name' => 'Profil Saya', 'route' => 'ortu.profil.index', 'icon' => 'user'],
            ['name' => 'Pesan Masuk (Sekolah)', 'route' => 'ortu.pesan.index', 'icon' => 'envelope'],
        ],
    ];


    // --- Shortcut Icons (Disesuaikan untuk Ortu) ---
    $shortcuts = [
        // Asumsi: Ortu bisa melihat tugas baru yang harus dikerjakan anak
        ['name' => 'Tugas Anak Mendekati Batas', 'route' => 'ortu.tugas.index', 'icon' => 'clipboard-document-list', 'badge' => 1], 
        ['name' => 'Pesan Sekolah', 'route' => 'ortu.pesan.index', 'icon' => 'envelope', 'badge' => 1],
        ['name' => 'Profil', 'route' => 'ortu.profil.index', 'icon' => 'cog'],
    ];
@endphp

{{-- KODE HTML NAVBAR (Sama persis dengan Admin, hanya berbeda variabel menu di atas) --}}
@include('components.shared.navbar_base', [
    'role' => 'Orang Tua', // Label Role
    'dashboardRoute' => 'ortu.dashboard',
    'menuItemsLeft' => $menuItemsMain,
    'menuItemsRight' => $menuItemsRight,
    'shortcuts' => $shortcuts,
    'profileComponent' => 'ortu.nav-profile', // Ganti component profile
])