<x-layouts.admin title="create.blade">
<x-layouts.admin title="create.blade">






<h1 class="text-2xl font-bold text-[#D4A373] mb-6">Tambah Prestasi</h1>

<form action="{{ route('admin.prestasi.store') }}" method="POST" class="bg-white shadow rounded-lg p-6">
    @csrf
    <div class="mb-4">
        <label class="block text-gray-700">Judul Prestasi</label>
        <input type="text" name="judul" value="{{ old('judul') }}" class="w-full border rounded px-3 py-2" required>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">Tahun</label>
        <input type="number" name="tahun" value="{{ old('tahun') }}" class="w-full border rounded px-3 py-2" required>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">Deskripsi</label>
        <textarea name="deskripsi" class="w-full border rounded px-3 py-2" rows="5" required>{{ old('deskripsi') }}</textarea>
    </div>
    <button type="submit" class="bg-[#D4A373] text-white px-4 py-2 rounded hover:bg-[#b07d62]">Simpan</button>
    <a href="{{ route('admin.prestasi.index') }}" class="ml-2 text-gray-500 hover:underline">Batal</a>
</form>








</x-layouts.admin>
</x-layouts.admin>

