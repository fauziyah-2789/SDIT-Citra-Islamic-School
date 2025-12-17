<x-admin.layouts title="create.blade">
<x-admin.layouts title="create.blade">






<h1 class="text-2xl font-bold mb-4">Tambah Materi</h1>

<form action="{{ route('admin.materi.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf
    <div>
        <label>Judul</label>
        <input type="text" name="judul" class="w-full border p-2 rounded" required>
    </div>
    <div>
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="w-full border p-2 rounded" required></textarea>
    </div>
    <div>
        <label>File (opsional)</label>
        <input type="file" name="file" class="w-full border p-2 rounded">
    </div>
    <button type="submit" class="bg-[#D4A373] text-white px-4 py-2 rounded hover:bg-[#B07D62]">Simpan</button>
</form>








</x-admin.layouts>
</x-admin.layouts>

