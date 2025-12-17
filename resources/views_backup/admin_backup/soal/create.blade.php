<x-layouts.admin title="create.blade">
<x-layouts.admin title="create.blade">






<h1 class="text-2xl font-bold mb-4">Tambah Soal</h1>

<form action="{{ route('admin.soal.store') }}" method="POST" class="space-y-4">
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
        <label>Tipe Soal</label>
        <select name="type" class="w-full border p-2 rounded">
            <option value="Pilihan Ganda">Pilihan Ganda</option>
            <option value="Essay">Essay</option>
        </select>
    </div>
    <div>
        <label>Jawaban</label>
        <input type="text" name="jawaban" class="w-full border p-2 rounded" required>
    </div>
    <button type="submit" class="bg-[#6A5ACD] text-white px-4 py-2 rounded hover:bg-[#7B68EE]">Simpan</button>
</form>








</x-layouts.admin>
</x-layouts.admin>

