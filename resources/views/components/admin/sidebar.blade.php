<div class="w-64 bg-white shadow flex flex-col">
    <div class="p-5 font-bold text-xl text-emerald-600">Citra Islamic</div>
    <nav class="flex-1 p-2 space-y-1">
        <x-admin.navitem title="Dashboard" route="{{ route('admin.dashboard') }}" icon="home" />
        <x-admin.navitem title="Guru" route="{{ route('admin.guru.index') }}" icon="users" />
        <x-admin.navitem title="Siswa" route="{{ route('admin.siswa.index') }}" icon="academic-cap" />
        <x-admin.navitem title="Berita" route="{{ route('admin.berita.index') }}" icon="newspaper" />
        <x-admin.navitem title="Galeri" route="{{ route('admin.galeri.index') }}" icon="photo" />
        <x-admin.navitem title="Ekstrakurikuler" route="{{ route('admin.ekstrakurikuler.index') }}" icon="puzzle" />
        <x-admin.navitem title="Mapel" route="{{ route('admin.mapel.index') }}" icon="book-open" />
        <x-admin.navitem title="Kelas" route="{{ route('admin.kelas.index') }}" icon="home-modern" />
        <x-admin.navitem title="Prestasi" route="{{ route('admin.prestasi.index') }}" icon="star" />
        <x-admin.navitem title="Tugas" route="{{ route('admin.tugas.index') }}" icon="clipboard-list" />
        <x-admin.navitem title="Soal" route="{{ route('admin.soal.index') }}" icon="question-mark-circle" />
        <x-admin.navitem title="Profil Sekolah" route="{{ route('admin.profilsekolah.index') }}" icon="building-library" />
        <x-admin.navitem title="Users" route="{{ route('admin.users.index') }}" icon="user-group" />
    </nav>
</div>

