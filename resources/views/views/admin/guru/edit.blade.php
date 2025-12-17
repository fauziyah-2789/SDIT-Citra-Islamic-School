<x-admin.layouts title="edit.blade">
<x-admin.layouts title="edit.blade">






<h1 class="text-2xl font-bold mb-4">Edit Guru</h1>

<form action="{{ route('admin.guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label class="block mb-1">Nama</label>
        <input type="text" name="nama" value="{{ $guru->nama }}" class="border p-2 w-full" required>
    </div>
    <div class="mb-4">
        <label class="block mb-1">Profesi</label>
        <input type="text" name="profesi" value="{{ $guru->profesi }}" class="border p-2 w-full">
    </div>
    <div class="mb-4">
        <label class="block mb-1">Mata Pelajaran</label>
        <input type="text" name="mapel" value="{{ $guru->mapel }}" class="border p-2 w-full" required>
    </div>
    <div class="mb-4">
        <label class="block mb-1">Foto</label>
        @if($guru->foto)
            <img src="{{ asset('storage/'.$guru->foto) }}" class="h-24 mb-2 object-cover rounded">
        @endif
        <input type="file" name="foto" class="border p-2 w-full">
    </div>
    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
</form>








</x-admin.layouts>
</x-admin.layouts>

