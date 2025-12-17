<x-admin.layouts title="show.blade">
<x-admin.layouts title="show.blade">





<div class="container">
    <h1>Detail Profil Guru</h1>
    <ul class="list-group">
        <li class="list-group-item">Nama: {{ $profilguru->nama }}</li>
        <li class="list-group-item">Mata Pelajaran: {{ $profilguru->mapel }}</li>
        <li class="list-group-item">Email: {{ $profilguru->email }}</li>
    </ul>
    <a href="{{ route('profilguru.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>








</x-admin.layouts>
</x-admin.layouts>

