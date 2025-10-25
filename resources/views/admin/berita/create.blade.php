<x-layouts.admin title="create.blade">
<x-layouts.admin title="create.blade">




<x-admin-layout title="Tambah Berita">
    <div class="p-6 max-w-4xl mx-auto">
        <h1 class="text-2xl font-bold text-emerald-600 mb-6">Tambah Berita Baru</h1>

        <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-white p-6 rounded-xl shadow-md space-y-5">
            @csrf

            <div>
                <label class="block mb-1 font-medium">Judul Berita</label>
                <input type="text" name="judul" value="{{ old('judul') }}"
                    class="w-full border-gray-300 rounded-lg focus:ring-emerald-400 focus:border-emerald-400">
            </div>

            <div>
                <label class="block mb-1 font-medium">Gambar (opsional)</label>
                <input type="file" name="gambar" class="w-full border-gray-300 rounded-lg">
            </div>

            <div>
                <label class="block mb-1 font-medium">Isi Berita</label>
                <textarea name="isi" rows="8"
                    class="w-full border-gray-300 rounded-lg focus:ring-emerald-400 focus:border-emerald-400">{{ old('isi') }}</textarea>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('admin.berita.index') }}"
                    class="px-5 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 mr-3">Batal</a>
                <button type="submit"
                    class="px-5 py-2 bg-gradient-to-r from-emerald-400 to-blue-400 text-white rounded-lg shadow hover:opacity-90">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>








</x-layouts.admin>
</x-layouts.admin>
