<x-admin.layouts title="edit.blade">
<x-admin.layouts title="edit.blade">






<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Data Siswa</h1>

    <form action="{{ route('admin.siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700">Nama</label>
            <input type="text" name="name" value="{{ $siswa->name }}" class="border px-3 py-2 w-full" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" value="{{ $siswa->email }}" class="border px-3 py-2 w-full" required>
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>








</x-admin.layouts>
</x-admin.layouts>

