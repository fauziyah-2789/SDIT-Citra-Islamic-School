<x-layouts.guru title="create.blade">
<x-layouts.guru title="create.blade">







<h1 class="text-2xl font-bold text-[#B07D62] mb-6">Tambah Materi</h1>

<form action="{{ route('guru.materi.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4 bg-white p-6 rounded shadow">
    @csrf
    <div>
        <label class="block font-medium">Judul</label>
        <input type="text" name="judul" class="w-full border rounded p-2" required>
    </div>

    <div>
        <label class="block font-medium">Mata Pelajaran</label>
        <input type="text" name="mapel" class="w-full border rounded p-2" required>
    </div>

    <div>
        <label class="block font-medium">Deskripsi</label>
        <textarea name="deskripsi" rows="4" class="w-full border rounded p-2"></textarea>
    </div>

    <div>
        <label class="block font-medium">Upload File (opsional)</label>
        <input type="file" name="file" class="w-full">
    </div>

    <button type="submit" class="bg-[#B07D62] text-white px-6 py-2 rounded hover:bg-[#8D6E63]">Simpan</button>
</form>








</x-layouts.guru>
</x-layouts.guru>
