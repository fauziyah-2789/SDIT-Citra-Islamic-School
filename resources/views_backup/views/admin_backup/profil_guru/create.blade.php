<x-layouts.admin title="create.blade">
<x-layouts.admin title="create.blade">






<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Tambah Profil Guru</h1>

    <form action="{{ route('admin.profil_guru.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Nama</label>
            <input type="text" name="name" class="border px-3 py-2 w-full" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" class="border px-3 py-2 w-full" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Mata Pelajaran</label>
            <input type="text" name="mapel" class="border px-3 py-2 w-full" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>








</x-layouts.admin>
</x-layouts.admin>

