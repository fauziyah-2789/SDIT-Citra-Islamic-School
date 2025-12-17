<x-layouts.admin title="show.blade">
<x-layouts.admin title="show.blade">





<div class="p-6 bg-white rounded shadow">
    <h2 class="text-xl font-bold">{{ $guru->nama }}</h2>

    <p><strong>Kelas:</strong> {{ $kelas->nama_kelas ?? 'Belum ditentukan' }}</p>
    <p><strong>Jumlah Siswa:</strong> {{ $jumlahSiswa }}</p>

    @if($jumlahSiswa > 0)
        <h3 class="mt-4 font-semibold">Daftar Siswa:</h3>
        <ul class="list-disc pl-6">
            @foreach($daftarSiswa as $siswa)
                <li>{{ $siswa->nama }}</li>
            @endforeach
        </ul>
    @else
        <p class="text-gray-500 mt-2">Belum ada siswa di kelas ini.</p>
    @endif
</div>








</x-layouts.admin>
</x-layouts.admin>

