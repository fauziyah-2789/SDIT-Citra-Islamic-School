<x-layouts.admin title="edit.blade">
<x-layouts.admin title="edit.blade">





<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Mata Pelajaran</h1>

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.mapel.update', $mapel->id) }}" method="POST" class="bg-white p-4 rounded shadow-md">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nama" class="block text-gray-700 font-bold mb-2">Nama Mapel</label>
            <input type="text" name="nama" id="nama" class="w-full border border-gray-300 p-2 rounded" value="{{ old('nama', $mapel->nama) }}" required>
        </div>
        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Perbarui</button>
        <a href="{{ route('admin.mapel.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded ml-2">Batal</a>
    </form>
</div>








</x-layouts.admin>
</x-layouts.admin>

