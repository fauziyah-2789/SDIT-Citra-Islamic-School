<x-layouts.guru title="create.blade">
<x-layouts.guru title="create.blade">




<h1 class="text-2xl font-bold mb-4">Tambah Jadwal</h1>

<form action="{{ route('guru.jadwal.store') }}" method="POST">
    @csrf
    <div class="mb-4">
        <label class="block mb-1">Kelas</label>
        <select name="kelas_id" class="border p-2 w-full">
            @foreach($kelas as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <label class="block mb-1">Mata Pelajaran</label>
        <select name="mapel_id" class="border p-2 w-full">
            @foreach($mapels as $m)
                <option value="{{ $m->id }}">{{ $m->nama_mapel }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <label class="block mb-1">Hari</label>
        <input type="text" name="hari" class="border p-2 w-full">
    </div>
    <div class="mb-4">
        <label class="block mb-1">Jam Mulai</label>
        <input type="time" name="jam_mulai" class="border p-2 w-full">
    </div>
    <div class="mb-4">
        <label class="block mb-1">Jam Selesai</label>
        <input type="time" name="jam_selesai" class="border p-2 w-full">
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
</form>








</x-layouts.guru>
</x-layouts.guru>
