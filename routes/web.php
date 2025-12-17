<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| AUTH CONTROLLER
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| GLOBAL PROFILE
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\ProfileController;



/*
|--------------------------------------------------------------------------
| GURU CONTROLLERS
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Guru\DashboardController as GuruDashboard;
use App\Http\Controllers\Guru\NotifikasiController as GuruNotifikasi;
use App\Http\Controllers\Guru\ProfilController as GuruProfil;
use App\Http\Controllers\Guru\MateriController as GuruMateri;
use App\Http\Controllers\Guru\SoalController as GuruSoal;
use App\Http\Controllers\Guru\NilaiController as GuruNilai;
use App\Http\Controllers\Guru\TugasController as GuruTugas;
use App\Http\Controllers\Guru\PengumumanController as GuruPengumuman;
use App\Http\Controllers\Guru\AbsensiController as GuruAbsensi;
use App\Http\Controllers\Guru\JadwalController as GuruJadwal;

/*
|--------------------------------------------------------------------------
| ORTU CONTROLLERS
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Ortu\DashboardController as OrtuDashboard;
use App\Http\Controllers\Ortu\ProfilController as OrtuProfil;
use App\Http\Controllers\Ortu\NilaiController as OrtuNilai;
use App\Http\Controllers\Ortu\JadwalController as OrtuJadwal;
use App\Http\Controllers\Ortu\AbsensiController as OrtuAbsensi;

/*
|--------------------------------------------------------------------------
| PUBLIC CONTROLLERS
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProfilPublikController;
use App\Http\Controllers\BeritaPublikController;
use App\Http\Controllers\GaleriPublikController;
use App\Http\Controllers\GuruPublikController;
use App\Http\Controllers\KontakPublikController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PrestasiPublikController;
use App\Http\Controllers\EkstrakurikulerPublikController;
use App\Http\Controllers\PengumumanPublikController;

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/
Route::controller(AuthenticatedSessionController::class)->group(function () {
    Route::get('/login', 'create')->name('login');
    Route::post('/login', 'store')->name('login.store');   // <-- FIX
    Route::post('/logout', 'destroy')->name('logout');
});

/*
|--------------------------------------------------------------------------
| GLOBAL PROFILE
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| DASHBOARD REDIRECT BY ROLE
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {

    $role = Auth::user()->role ?? null;

    return match ($role) {
        'admin' => redirect()->route('admin.dashboard'),
        'guru'  => redirect()->route('guru.dashboard'),
        'ortu'  => redirect()->route('ortu.dashboard'),
        default => redirect()->route('public.landing'),
    };
})->middleware('auth')->name('dashboard');

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/
/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/
// PASTIKAN SEMUA CONTROLLER DI-IMPORT DENGAN BENAR DI BAGIAN ATAS FILE routes/web.php

use App\Http\Controllers\Admin\AbsensiController; 
use App\Http\Controllers\Admin\DashboardController as AdminDashboard; 
use App\Http\Controllers\Admin\SearchController;
use App\Http\Controllers\Admin\ProfileAdminController; // DUKUNGAN UNTUK ProfileAdminController.php
use App\Http\Controllers\Admin\ProfilSekolahController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\PrestasiController;
use App\Http\Controllers\Admin\EkstrakurikulerController;
use App\Http\Controllers\Admin\GaleriEskulController; // Galeri Eskul tidak ada di daftar Controller, diasumsikan ada.
use App\Http\Controllers\Admin\ForumController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\LandingHeroController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\MapelController;
use App\Http\Controllers\Admin\MateriController;
use App\Http\Controllers\Admin\NilaiController;
use App\Http\Controllers\Admin\OrtuController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\PesanController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\SoalController;
use App\Http\Controllers\Admin\StatistikController;
use App\Http\Controllers\Admin\TestimoniController;
use App\Http\Controllers\Admin\TugasController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\FasilitasController;
use App\Http\Controllers\Admin\ProgramController; 
use App\Http\Controllers\Admin\LandingSettingController; 
use App\Http\Controllers\Admin\RoleController;

Route::middleware(['auth', 'role:admin'])
    ->prefix('admin') // URL prefix: /admin
    ->as('admin.') // Route name prefix: admin.
    ->group(function () {
        
        Route::resource('roles', RoleController::class);

         Route::get('/tahun-akademik', function () {
            return view('admin.tahun_akademik.index');
        })->name('tahun_akademik.index');

          // Route Pengaturan Umum
        Route::get('/settings/general', [App\Http\Controllers\Admin\SettingController::class, 'index'])
            ->name('settings.general');

        Route::post('/settings/general', [App\Http\Controllers\Admin\SettingController::class, 'update'])
            ->name('settings.update');

        // 1. DASHBOARD & REDIRECT
        Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');
        Route::get('/', fn() => redirect()->route('admin.dashboard'));
        
        // 2. SEARCH
        Route::get('/search', [SearchController::class, 'index'])->name('search');

        // 3. PROFIL ADMIN (Akun yang sedang login)
        // MENGGUNAKAN ProfileAdminController.php
        Route::controller(ProfileAdminController::class)->prefix('profil')->group(function () {
            Route::get('/', 'show')->name('profil.show');      
            Route::get('/edit', 'edit')->name('profil.edit');  
            Route::post('/update', 'update')->name('profil.update');
            // Catatan: Jika Anda ingin menggunakan ProfileAdminController untuk View 'profile_admin', 
            // pastikan nama View di Controller-nya sudah benar: view('admin.profile_admin.index')
        });

        // 4. RESOURCE ROUTES LENGKAP
        // SEMUA DIDEFINISIKAN SEBAGAI RESOURCE UNTUK KEMUDAHAN
        Route::resources([
            'absensi'           => AbsensiController::class,        // DITEMUKAN: absensi
            'berita'            => BeritaController::class,         // DITEMUKAN: berita
            'ekstrakurikuler'   => EkstrakurikulerController::class, // DITEMUKAN: ekstrakurikuler
            'fasilitas'         => FasilitasController::class,      // DITEMUKAN: fasilitas
            'forum'             => ForumController::class,          // DITEMUKAN: forum
            'galeri'            => GaleriController::class,         // DITEMUKAN: galeri
            'guru'              => GuruController::class,           // DITEMUKAN: guru
            'jadwal'            => JadwalController::class,         // DITEMUKAN: jadwal
            'kelas'             => KelasController::class,          // DITEMUKAN: kelas
            'kontak'            => KontakController::class,         // DITEMUKAN: kontak
            // 'landinghero' tidak dimasukkan ke resource
            'laporan'           => LaporanController::class,        // DITEMUKAN: laporan
            'mapel'             => MapelController::class,          // DITEMUKAN: mapel
            'materi'            => MateriController::class,         // DITEMUKAN: materi
            'nilai'             => NilaiController::class,          // DITEMUKAN: nilai
            'ortu'              => OrtuController::class,           // DITEMUKAN: ortu
            'pengumuman'        => PengumumanController::class,     // DITEMUKAN: pengumuman
            'pesan'             => PesanController::class,          // DITEMUKAN: pesan
            'prestasi'          => PrestasiController::class,       // DITEMUKAN: prestasi
            'profilsekolah'     => ProfilSekolahController::class,  // DITEMUKAN: profil_sekolah
            'program'           => ProgramController::class,        // DITEMUKAN: programs (View) & ProgramController
            'settings'          => SettingController::class,        // DITEMUKAN: settings
            'siswa'             => SiswaController::class,          // DITEMUKAN: siswa
            'soal'              => SoalController::class,           // DITEMUKAN: soal
            'testimoni'         => TestimoniController::class,      // DITEMUKAN: testimoni
            'tugas'             => TugasController::class,          // DITEMUKAN: tugas
            'users'             => UserController::class,           // DITEMUKAN: users

            // Catatan Tambahan:
            // - GaleriEskulController tidak ada di daftar Controllers, tetapi view-nya ada.
            // - StatistikController ada di Controller, tetapi folder view-nya tidak terlihat.
            // Asumsikan StatistikController digunakan untuk Laporan atau Dashboard, jadi tidak perlu resource.
            // - LandingHeroController tidak dipakai sebagai resource, jadi tidak ada di sini.
        ]);
        
        // 5. PENDAFTARAN SISWA BARU (PPDB - Custom Route) - TIDAK SEBAGAI RESOURCE
        Route::controller(PendaftaranController::class)->prefix('pendaftaran')->name('pendaftaran.')->group(function () {
             Route::get('/', 'index')->name('index'); // admin.pendaftaran.index
             Route::get('/{pendaftaran}', 'show')->name('show');
             Route::put('/{pendaftaran}/status', 'updateStatus')->name('updateStatus');
             Route::delete('/{pendaftaran}', 'destroy')->name('destroy');
        });

        // 6. PENGATURAN LANDING PAGE (Custom Route) - MENGGANTIKAN LANDING HERO
        // MENGGUNAKAN LandingSettingController
        Route::controller(LandingSettingController::class)->prefix('landing')->name('landing.')->group(function () {
             Route::get('/hero', 'editHero')->name('hero'); // admin.landing.hero
             Route::put('/hero', 'updateHero')->name('update.hero');
             Route::get('/program', 'editProgram')->name('program'); 
             // Catatan: Jika Anda membagi Program ke Resource dan Setting, pastikan ProgramController dan LandingSettingController tidak tumpang tindih.
        });

        // 7. ROUTE KHUSUS (Jika dibutuhkan, misalnya Statistik)
        // StatistikController biasanya tidak full resource (CRUD)
        Route::get('/statistik', [StatistikController::class, 'index'])->name('statistik.index');

        // 8. LANDING HERO (Jika Anda masih ingin menggunakan LandingHeroController)
        Route::controller(LandingHeroController::class)->prefix('hero')->name('hero.')->group(function () {
            Route::get('/', 'edit')->name('edit'); // admin.hero.edit
            Route::post('/', 'update')->name('update');
        });
        
    });

/*
|--------------------------------------------------------------------------
| GURU
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:guru'])
    ->prefix('guru')
    ->as('guru.')
    ->group(function () {

        Route::get('/dashboard', [GuruDashboard::class, 'index'])->name('dashboard');

        Route::resources([
            'materi' => GuruMateri::class,
            'soal' => GuruSoal::class,
            'nilai' => GuruNilai::class,
            'tugas' => GuruTugas::class,
            'pengumuman' => GuruPengumuman::class,
            'absensi' => GuruAbsensi::class,
            'jadwal' => GuruJadwal::class,
        ]);
    });

/*
|--------------------------------------------------------------------------
| ORTU
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:ortu'])
    ->prefix('ortu')
    ->as('ortu.')
    ->group(function () {

        Route::get('/dashboard', [OrtuDashboard::class, 'index'])->name('dashboard');

        Route::get('/profil/edit', [OrtuProfil::class, 'edit'])->name('profil.edit');
        Route::post('/profil/update', [OrtuProfil::class, 'update'])->name('profil.update');

        Route::get('/nilai-anak', [OrtuNilai::class, 'index'])->name('nilai.index');
        Route::get('/jadwal-anak', [OrtuJadwal::class, 'index'])->name('jadwal.index');
        Route::get('/absensi-anak', [OrtuAbsensi::class, 'index'])->name('absensi.index');
    });

/*
|--------------------------------------------------------------------------
| PUBLIC
|--------------------------------------------------------------------------
*/

// LANDING PAGE FINAL
Route::get('/', [PublicController::class, 'index'])->name('public.landing');

// PROFIL (TENTANG)
Route::prefix('profil')->as('public.profil.')->group(function () {
    Route::get('/', [ProfilPublikController::class, 'index'])->name('index');
});

// EKSTRAKURIKULER
Route::prefix('ekstrakurikuler')->as('public.ekstrakurikuler.')->group(function () {
    Route::get('/', [EkstrakurikulerPublikController::class, 'index'])->name('index');
});

// BERITA
Route::prefix('berita')->as('public.berita.')->group(function () {
    Route::get('/', [BeritaPublikController::class, 'index'])->name('index');
    Route::get('/{slug}', [BeritaPublikController::class, 'show'])->name('show');
});

// GALERI
Route::prefix('galeri')->as('public.galeri.')->group(function () {
    Route::get('/', [GaleriPublikController::class, 'index'])->name('index');
    Route::get('/{slug}', [GaleriPublikController::class, 'show'])->name('show');
});

// GURU
Route::prefix('guru')->as('public.guru.')->group(function () {
    Route::get('/', [GuruPublikController::class, 'index'])->name('index');
    Route::get('/{id}', [GuruPublikController::class, 'show'])->name('show');
});

// PRESTASI
Route::prefix('prestasi')->as('public.prestasi.')->group(function () {
    Route::get('/', [PrestasiPublikController::class, 'index'])->name('index');
    Route::get('/{slug}', [PrestasiPublikController::class, 'show'])->name('show');
});

// PENGUMUMAN
Route::prefix('pengumuman')->as('public.pengumuman.')->group(function () {
    Route::get('/', [PengumumanPublikController::class, 'index'])->name('index');
});

// KONTAK
Route::prefix('kontak')->as('public.kontak.')->group(function () {
    Route::get('/', [KontakPublikController::class, 'index'])->name('index');
    Route::post('/', [KontakPublikController::class, 'send'])->name('send');
});

// PENDAFTARAN (Route Asli)
Route::prefix('pendaftaran')->as('public.pendaftaran.')->group(function () {
    Route::get('/', [PendaftaranController::class, 'index'])->name('index');
    Route::post('/', [PendaftaranController::class, 'store'])->name('store');
});

// ALIAS PENDAFTARAN (Solusi untuk route('pendaftaran')) <-- PERUBAHAN DI SINI
Route::get('pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');

// TENTANG
Route::get('/tentang', [ProfilPublikController::class, 'index'])->name('public.tentang');

/*
|--------------------------------------------------------------------------
| FALLBACK
|--------------------------------------------------------------------------
*/
Route::fallback(fn() => redirect()->route('public.landing'));