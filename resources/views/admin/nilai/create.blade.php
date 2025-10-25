<x-layouts.admin title="create.blade">
<x-layouts.admin title="create.blade">






<h1 class="text-2xl font-bold mb-4">Tambah Nilai</h1>

<form action="{{ route('admin.nilai.store') }}" method="POST" class="space-y-4">
    @csrf
    <div>
        <label>Siswa</label>
        <select name="siswa_id" class="w-full border p-2 rounded" required>
            @foreach($siswas as $siswa)
            <option value="{{ $siswa->id }}">{{ $siswa->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label>Soal</label>
        <select name="soal_id" class="w-full border p-2 rounded" required>
            @foreach($soals as $soal)
            <option value="{{ $soal->id }}">{{ $soal->judul }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label>Nilai</label>
        <input type="number" name="nilai" class="w-full border p-2 rounded" min="0" max="100" required>
    </div>
    <button type="submit" class="bg-[#2E8B57] text-white px-4 py-2 rounded hover:bg-[#3CB371]">Simpan</button>
</form>








</x-layouts.admin>
</x-layouts.admin>
