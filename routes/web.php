<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| AUTH CONTROLLERS
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
| ADMIN CONTROLLERS
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\ProfilSekolahController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\PrestasiController;
use App\Http\Controllers\Admin\EkstrakurikulerController;
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
use App\Http\Controllers\Admin\SearchController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\SoalController;
use App\Http\Controllers\Admin\StatistikController;
use App\Http\Controllers\Admin\TestimoniController;
use App\Http\Controllers\Admin\TugasController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GaleriEskulController;

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
    Route::post('/login', 'store');
    Route::post('/logout', 'destroy')->name('logout');
});

/*
|--------------------------------------------------------------------------
| GLOBAL PROFILE (BUKAN ADMIN)
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
    return match (Auth::user()->role->name ?? '') {
        'admin' => redirect()->route('admin.dashboard'),
        'guru'  => redirect()->route('guru.dashboard'),
        'ortu'  => redirect()->route('ortu.dashboard'),
        default => redirect()->route('landing'),
    };
})->middleware('auth')->name('dashboard');

/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->as('admin.')
    ->group(function () {

        Route::get('/', [AdminDashboard::class, 'index'])->name('index');
        Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');

        // Admin Profile
        Route::get('/profil',        [ProfilController::class, 'show'])->name('profil.show');
        Route::get('/profil/edit',   [ProfilController::class, 'edit'])->name('profil.edit');
        Route::post('/profil/update',[ProfilController::class, 'update'])->name('profil.update');

        Route::get('/search', [SearchController::class, 'index'])->name('search');

        Route::resource('profilsekolah', ProfilSekolahController::class);

        Route::resources([
            'berita'           => BeritaController::class,
            'galeri'           => GaleriController::class,
            'prestasi'         => PrestasiController::class,
            'ekstrakurikuler'  => EkstrakurikulerController::class,
            'galerieskul'      => GaleriEskulController::class,
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
            'settings'         => SettingController::class,
            'siswa'            => SiswaController::class,
            'soal'             => SoalController::class,
            'statistik'        => StatistikController::class,
            'testimoni'        => TestimoniController::class,
            'tugas'            => TugasController::class,
            'users'            => UserController::class,
        ]);
    });

/*
|--------------------------------------------------------------------------
| GURU AREA
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:guru'])
    ->prefix('guru')
    ->as('guru.')
    ->group(function () {

        Route::get('/', [GuruDashboard::class, 'index'])->name('index');
        Route::get('/dashboard', [GuruDashboard::class, 'index'])->name('dashboard');

        Route::get('/notifikasi', [GuruNotifikasi::class, 'index'])->name('notifikasi');
        Route::get('/profil', [GuruProfil::class, 'edit'])->name('profil.edit');
        Route::put('/profil', [GuruProfil::class, 'update'])->name('profil.update');

        Route::resources([
            'materi'      => GuruMateri::class,
            'soal'        => GuruSoal::class,
            'nilai'       => GuruNilai::class,
            'tugas'       => GuruTugas::class,
            'pengumuman'  => GuruPengumuman::class,
            'absensi'     => GuruAbsensi::class,
            'jadwal'      => GuruJadwal::class,
        ]);
    });

/*
|--------------------------------------------------------------------------
| ORTU AREA
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
| PUBLIC AREA
|--------------------------------------------------------------------------
*/
Route::get('/', [PublicController::class, 'index'])->name('landing');
Route::get('/profil', [ProfilPublikController::class, 'index'])->name('profil.publik.index');
Route::get('/ekstrakurikuler', [EkstrakurikulerPublikController::class, 'index'])->name('ekstra.publik.index');

// BERITA
Route::prefix('berita')->as('berita.publik.')->group(function () {
    Route::get('/', [BeritaPublikController::class, 'index'])->name('index');
    Route::get('/{slug}', [BeritaPublikController::class, 'show'])->name('show');
});

// GALERI
Route::prefix('galeri')->as('galeri.publik.')->group(function () {
    Route::get('/', [GaleriPublikController::class, 'index'])->name('index');
    Route::get('/{slug}', [GaleriPublikController::class, 'show'])->name('show');
});

// GURU PUBLIK
Route::get('/guru', [GuruPublikController::class, 'index'])->name('guru.publik.index');
Route::get('/guru/{id}', [GuruPublikController::class, 'show'])->name('guru.publik.show');

// PRESTASI PUBLIK
Route::prefix('prestasi')->as('prestasi.publik.')->group(function () {
    Route::get('/', [PrestasiPublikController::class, 'index'])->name('index');
    Route::get('/{slug}', [PrestasiPublikController::class, 'show'])->name('show');
});

// PENGUMUMAN PUBLIK
Route::get('/pengumuman', [PengumumanPublikController::class, 'index'])->name('pengumuman.publik.index');

// KONTAK PUBLIK
Route::get('/kontak', [KontakPublikController::class, 'index'])->name('kontak.publik.index');
Route::post('/kontak', [KontakPublikController::class, 'send'])->name('kontak.publik.send');

// PENDAFTARAN PUBLIK
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

Route::get('/tentang', [PublicController::class, 'tentang'])->name('tentang');

/*
|--------------------------------------------------------------------------
| FALLBACK
|--------------------------------------------------------------------------
*/
Route::fallback(fn() => redirect()->route('landing'));
