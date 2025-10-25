<x-layouts.guru title="edit.blade">
<x-layouts.guru title="edit.blade">





<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Tugas</h1>
    <form action="{{ route('guru.tugas.update', $tuga->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block mb-1">Judul</label>
            <input type="text" name="judul" class="border px-2 py-1 w-full" value="{{ $tuga->judul }}">
        </div>
        <div class="mb-4">
            <label class="block mb-1">Deskripsi</label>
            <textarea name="deskripsi" class="border px-2 py-1 w-full">{{ $tuga->deskripsi }}</textarea>
        </div>
        <div class="mb-4">
            <label class="block mb-1">Deadline</label>
            <input type="date" name="deadline" class="border px-2 py-1 w-full" value="{{ $tuga->deadline }}">
        </div>
        <button class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>








</x-layouts.guru>
</x-layouts.guru>
