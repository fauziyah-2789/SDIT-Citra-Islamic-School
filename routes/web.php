<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// ==========================
// AUTHENTICATION CONTROLLERS
// ==========================
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// ==========================
// PROFILE CONTROLLERS
// ==========================
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\ProfilSekolahController;
use App\Http\Controllers\ProfilPublikController;

// ==========================
// DASHBOARD CONTROLLERS
// ==========================
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Guru\DashboardController as GuruDashboard;
use App\Http\Controllers\Ortu\DashboardController as OrtuDashboard;

// ==========================
// PUBLIC CONTROLLERS
// ==========================
use App\Http\Controllers\PublicController;
use App\Http\Controllers\BeritaPublikController;
use App\Http\Controllers\GaleriPublikController;
use App\Http\Controllers\GuruPublikController;
use App\Http\Controllers\KontakPublikController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PrestasiPublikController;
use App\Http\Controllers\EkstrakurikulerPublikController;
use App\Http\Controllers\PengumumanPublikController;

// ==========================
// ADMIN CONTROLLERS
// ==========================
use App\Http\Controllers\Admin\{
    AbsensiController,
    BeritaController,
    EkstrakurikulerController,
    ForumController,
    GaleriController,
    GuruController,
    JadwalController,
    KelasController,
    KontakController,
    LandingHeroController,
    LaporanController,
    MapelController,
    MateriController,
    NilaiController,
    OrtuController,
    PengumumanController,
    PesanController,
    PrestasiController,
    SearchController,
    SettingController,
    SiswaController,
    SoalController,
    StatistikController,
    TestimoniController,
    TugasController,
    UserController
};

// ==========================
// AUTH ROUTES
// ==========================
Route::controller(AuthenticatedSessionController::class)->group(function () {
    Route::get('/login', 'create')->name('login');
    Route::post('/login', 'store');
    Route::post('/logout', 'destroy')->name('logout');
});

// ==========================
// PROFILE (GLOBAL USER)
// ==========================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ==========================
// DASHBOARD REDIRECTOR
// ==========================
Route::get('/dashboard', function () {
    $user = Auth::user();
    return match ($user->role->nama ?? '') {
        'admin' => redirect()->route('admin.dashboard'),
        'guru'  => redirect()->route('guru.dashboard'),
        'ortu'  => redirect()->route('ortu.dashboard'),
        default => redirect()->route('landing'),
    };
})->middleware('auth')->name('dashboard');

// ==========================
// ADMIN AREA
// ==========================
Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->as('admin.')
    ->group(function () {
        Route::get('/', [AdminDashboard::class, 'index'])->name('index');
        Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');

        // ✅ Profil admin & profil sekolah
        Route::get('/profil', [ProfilController::class, 'show'])->name('profil.show');
        Route::get('/profil/edit', [ProfilController::class, 'edit'])->name('profil.edit');
        Route::post('/profil/update', [ProfilController::class, 'update'])->name('profil.update');
        Route::resource('profilsekolah', ProfilSekolahController::class);

        // ✅ Semua CRUD utama
        Route::resources([
            'berita'           => BeritaController::class,
            'galeri'           => GaleriController::class,
            'prestasi'         => PrestasiController::class,
            'ekstrakurikuler'  => EkstrakurikulerController::class,
            'forum'            => ForumController::class,
            'guru'             => GuruController::class,
            'jadwal'           => JadwalController::class,
            'kelas'            => KelasController::class,
            'kontak'           => KontakController::class,
            'landinghero'      => LandingHeroController::class,
            'laporan'          => LaporanController::class,
            'mapel'            => MapelController::class,
            'materi'           => MateriController::class,
            'nilai'            => NilaiController::class,
            'ortu'             => OrtuController::class,
            'pengumuman'       => PengumumanController::class,
            'pesan'            => PesanController::class,
            'search'           => SearchController::class,
            'settings'         => SettingController::class,
            'siswa'            => SiswaController::class,
            'soal'             => SoalController::class,
            'statistik'        => StatistikController::class,
            'testimoni'        => TestimoniController::class,
            'tugas'            => TugasController::class,
            'users'            => UserController::class,
        ]);
    });

// ==========================
// GURU AREA
// ==========================
Route::middleware(['auth', 'role:guru'])
    ->prefix('guru')
    ->as('guru.')
    ->group(function () {
        Route::get('/dashboard', [GuruDashboard::class, 'index'])->name('dashboard');
        Route::resources([
            'materi'      => App\Http\Controllers\Guru\MateriController::class,
            'soal'        => App\Http\Controllers\Guru\SoalController::class,
            'nilai'       => App\Http\Controllers\Guru\NilaiController::class,
            'tugas'       => App\Http\Controllers\Guru\TugasController::class,
            'pengumuman'  => App\Http\Controllers\Guru\PengumumanController::class,
            'absensi'     => App\Http\Controllers\Guru\AbsensiController::class,
            'jadwal'      => App\Http\Controllers\Guru\JadwalController::class,
            'profil'      => App\Http\Controllers\Guru\ProfilController::class,
        ]);
    });

// ==========================
// ORANG TUA AREA
// ==========================
Route::middleware(['auth', 'role:ortu'])
    ->prefix('ortu')
    ->as('ortu.')
    ->group(function () {
        Route::get('/dashboard', [OrtuDashboard::class, 'index'])->name('dashboard');
        Route::get('/nilai-anak', [App\Http\Controllers\Ortu\NilaiController::class, 'index'])->name('nilai.index');
        Route::get('/jadwal-anak', [App\Http\Controllers\Ortu\JadwalController::class, 'index'])->name('jadwal.index');
        Route::get('/absensi-anak', [App\Http\Controllers\Ortu\AbsensiController::class, 'index'])->name('absensi.index');
    });

// ==========================
// PUBLIC AREA
// ==========================

// Landing utama
Route::get('/', [PublicController::class, 'index'])->name('landing');

// Profil Sekolah Publik
Route::get('/profil', [ProfilPublikController::class, 'index'])->name('profil.publik.index');

// Ekstrakurikuler Publik
Route::get('/ekstrakurikuler', [EkstrakurikulerPublikController::class, 'index'])->name('ekstra.publik.index');

// Berita Publik
Route::prefix('berita')->as('berita.publik.')->group(function () {
    Route::get('/', [BeritaPublikController::class, 'index'])->name('index');
    Route::get('/{slug}', [BeritaPublikController::class, 'show'])->name('show');
});

// Galeri Publik
Route::prefix('galeri')->as('galeri.publik.')->group(function () {
    Route::get('/', [GaleriPublikController::class, 'index'])->name('index');
    Route::get('/{slug}', [GaleriPublikController::class, 'show'])->name('show');
});


// Guru publik
Route::get('/guru', [GuruPublikController::class, 'index'])->name('guru.publik.index');
Route::get('/guru/{id}', [GuruPublikController::class, 'show'])->name('guru.publik.show');


// Prestasi Publik
Route::prefix('prestasi')->as('prestasi.publik.')->group(function () {
    Route::get('/', [PrestasiPublikController::class, 'index'])->name('index');
    Route::get('/{slug}', [PrestasiPublikController::class, 'show'])->name('show');
});

// Pengumuman Publik
Route::get('/pengumuman', [PengumumanPublikController::class, 'index'])->name('pengumuman.publik.index');

// Kontak
Route::get('/kontak', [KontakPublikController::class, 'index'])->name('kontak.publik.index');
Route::post('/kontak', [KontakPublikController::class, 'send'])->name('kontak.publik.send');

// Pendaftaran
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

// ==========================
// FALLBACK
// ==========================
Route::fallback(fn() => redirect()->route('landing'));
