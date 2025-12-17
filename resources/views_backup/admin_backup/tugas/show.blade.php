<x-layouts.admin title="show.blade">
<x-layouts.admin title="show.blade">





<div class="container">
    <h1>Detail Tugas</h1>
    <ul class="list-group">
        <li class="list-group-item">Judul: {{ $tugas->judul }}</li>
        <li class="list-group-item">Deskripsi: {{ $tugas->deskripsi }}</li>
        <li class="list-group-item">Tenggat: {{ $tugas->tenggat }}</li>
    </ul>
    <a href="{{ route('tugas.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>








</x-layouts.admin>
</x-layouts.admin>

