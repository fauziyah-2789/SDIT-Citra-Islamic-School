<x-admin.layouts title="edit.blade">
<x-admin.layouts title="edit.blade">






<div class="p-6 max-w-3xl mx-auto">
    <h1 class="text-2xl font-bold text-emerald-600 mb-6">Edit Foto Galeri</h1>

    <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-xl shadow-md space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="block mb-1 font-medium">Judul Foto</label>
            <input type="text" name="judul" value="{{ old('judul', $galeri->judul) }}" class="w-full border-gray-300 rounded-lg focus:ring-emerald-400 focus:border-emerald-400">
        </div>

        <div>
            <label class="block mb-1 font-medium">Gambar</label>
            @if ($galeri->gambar)
                <img src="{{ asset('storage/' . $galeri->gambar) }}" class="w-48 rounded-lg mb-2">
            @endif
            <input type="file" name="gambar" class="w-full border-gray-300 rounded-lg">
        </div>

        <div>
            <label class="block mb-1 font-medium">Deskripsi (opsional)</label>
            <textarea name="deskripsi" rows="4" class="w-full border-gray-300 rounded-lg focus:ring-emerald-400 focus:border-emerald-400">{{ old('deskripsi', $galeri->deskripsi) }}</textarea>
        </div>

        <div class="flex justify-end">
            <a href="{{ route('admin.galeri.index') }}" class="px-5 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 mr-3">Batal</a>
            <button type="submit" class="px-5 py-2 bg-gradient-to-r from-emerald-400 to-blue-400 text-white rounded-lg shadow hover:opacity-90">Update</button>
        </div>
    </form>
</div>








</x-admin.layouts>
</x-admin.layouts>

