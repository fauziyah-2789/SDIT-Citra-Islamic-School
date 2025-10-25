<x-layouts.admin title="create.blade">
<x-layouts.admin title="create.blade">





<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Tambah Pesan</h1>
    <form action="{{ route('admin.pesan.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block mb-1">Guru</label>
            <select name="guru_id" class="border px-2 py-1 w-full">
                @foreach($gurus as $guru)
                <option value="{{ $guru->id }}">{{ $guru->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-1">Judul</label>
            <input type="text" name="judul" class="border px-2 py-1 w-full" value="{{ old('judul') }}">
        </div>
        <div class="mb-4">
            <label class="block mb-1">Isi Pesan</label>
            <textarea name="isi" class="border px-2 py-1 w-full">{{ old('isi') }}</textarea>
        </div>
        <button class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>








</x-layouts.admin>
</x-layouts.admin>
