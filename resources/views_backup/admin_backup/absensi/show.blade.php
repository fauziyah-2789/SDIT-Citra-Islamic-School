<x-layouts.admin title="show.blade">
<x-layouts.admin title="show.blade">





    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Detail Absensi</h1>
        <ul class="list-group">
            <li class="list-group-item"><strong>Nama Siswa:</strong> {{ $absensi->nama_siswa }}</li>
            <li class="list-group-item"><strong>Tanggal:</strong> {{ $absensi->tanggal }}</li>
            <li class="list-group-item"><strong>Status:</strong> {{ $absensi->status }}</li>
        </ul>
        <a href="{{ route('absensi.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>









</x-layouts.admin>
</x-layouts.admin>

