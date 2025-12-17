<x-layouts.admin title="create.blade">
<x-layouts.admin title="create.blade">






<h1 class="text-2xl font-bold mb-4">Tambah Guru</h1>

<form action="{{ route('admin.guru.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
        <label class="block mb-1">Nama</label>
        <input type="text" name="nama" class="border p-2 w-full" required>
    </div>
    <div class="mb-4">
        <label class="block mb-1">Profesi</label>
        <input type="text" name="profesi" class="border p-2 w-full">
    </div>
    <div class="mb-4">
        <label class="block mb-1">Mata Pelajaran</label>
        <input type="text" name="mapel" class="border p-2 w-full" required>
    </div>
    <div class="mb-4">
        <label class="block mb-1">Foto</label>
        <input type="file" name="foto" class="border p-2 w-full">
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
</form>








</x-layouts.admin>
</x-layouts.admin>

