<x-layouts.guru title="create.blade">
<x-layouts.guru title="create.blade">





<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Tambah Tugas</h1>
    <form action="{{ route('guru.tugas.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block mb-1">Judul</label>
            <input type="text" name="judul" class="border px-2 py-1 w-full">
        </div>
        <div class="mb-4">
            <label class="block mb-1">Deskripsi</label>
            <textarea name="deskripsi" class="border px-2 py-1 w-full"></textarea>
        </div>
        <div class="mb-4">
            <label class="block mb-1">Deadline</label>
            <input type="date" name="deadline" class="border px-2 py-1 w-full">
        </div>
        <button class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>








</x-layouts.guru>
</x-layouts.guru>
