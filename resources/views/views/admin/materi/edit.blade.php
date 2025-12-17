<x-admin.layouts title="edit.blade">
<x-admin.layouts title="edit.blade">






<h1 class="text-2xl font-bold mb-4">Edit Materi</h1>

<form action="{{ route('admin.materi.update', $materi->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf
    @method('PUT')
    <div>
        <label>Judul</label>
        <input type="text" name="judul" class="w-full border p-2 rounded" value="{{ $materi->judul }}" required>
    </div>
    <div>
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="w-full border p-2 rounded" required>{{ $materi->deskripsi }}</textarea>
    </div>
    <div>
        <label>File (opsional)</label>
        <input type="file" name="file" class="w-full border p-2 rounded">
        @if($materi->file)
            <a href="{{ asset('storage/' . $materi->file) }}" target="_blank" class="text-blue-500 underline">Lihat File Saat Ini</a>
        @endif
    </div>
    <button type="submit" class="bg-[#D4A373] text-white px-4 py-2 rounded hover:bg-[#B07D62]">Update</button>
</form>








</x-admin.layouts>
</x-admin.layouts>

