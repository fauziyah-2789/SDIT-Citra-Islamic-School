<x-layouts.admin title="create.blade">
<x-layouts.admin title="create.blade">






<h1 class="text-2xl font-bold mb-6 text-gray-800">Tambah Fasilitas Sekolah</h1>

<div class="bg-white p-6 rounded-xl shadow-lg">
    <form action="{{ route('admin.fasilitas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block font-medium text-gray-700 mb-1">Nama Fasilitas</label>
            <input type="text" name="nama" class="w-full border-gray-300 rounded-lg shadow-sm" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium text-gray-700 mb-1">Deskripsi</label>
            <textarea name="deskripsi" rows="4" class="w-full border-gray-300 rounded-lg shadow-sm"></textarea>
        </div>

        <div class="mb-6">
            <label class="block font-medium text-gray-700 mb-1">Upload Gambar</label>
            <input type="file" name="gambar" class="block w-full border-gray-300 rounded-lg shadow-sm p-2">
        </div>

        <div class="flex justify-end gap-3">
            <a href="{{ route('admin.fasilitas.index') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">
                Batal
            </a>
            <button type="submit" class="bg-gradient-to-r from-emerald-400 to-blue-400 text-white px-6 py-2 rounded-lg shadow hover:opacity-90">
                Simpan
            </button>
        </div>
    </form>
</div>








</x-layouts.admin>
</x-layouts.admin>

