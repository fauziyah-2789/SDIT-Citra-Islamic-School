<x-admin.layout title="Dashboard Admin">

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <x-admin.card-link title="Guru" :count="$guruCount ?? 0" :route="route('admin.guru.index')" icon="users" />
    <x-admin.card-link title="Siswa" :count="$siswaCount ?? 0" :route="route('admin.siswa.index')" icon="academic-cap" />
    <x-admin.card-link title="Berita" :count="$beritaCount ?? 0" :route="route('admin.berita.index')" icon="newspaper" />
</div>

<div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
    <x-admin.card-link title="Laporan" :count="'—'" :route="route('admin.laporan.index')" icon="document-text" />
    <x-admin.card-link title="Profil Sekolah" :count="'—'" :route="route('admin.profilsekolah.index')" icon="building-library" />
    <x-admin.card-link title="Users & Hak Akses" :count="$usersCount ?? 0" :route="route('admin.users.index')" icon="user-group" />
</div>

</x-admin.layout>
