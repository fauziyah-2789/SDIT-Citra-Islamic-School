<x-layouts.admin title="edit.blade">
<x-layouts.admin title="edit.blade">






<h1 class="text-2xl font-bold mb-4">Edit Soal</h1>

<form action="{{ route('admin.soal.update', $soal->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')
    <div>
        <label>Judul</label>
        <input type="text" name="judul" class="w-full border p-2 rounded" value="{{ $soal->judul }}" required>
    </div>
    <div>
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="w-full border p-2 rounded" required>{{ $soal->deskripsi }}</textarea>
    </div>
    <div>
        <label>Tipe Soal</label>
        <select name="type" class="w-full border p-2 rounded">
            <option value="Pilihan Ganda" @if($soal->type=='Pilihan Ganda') selected @endif>Pilihan Ganda</option>
            <option value="Essay" @if($soal->type=='Essay') selected @endif>Essay</option>
        </select>
    </div>
    <div>
        <label>Jawaban</label>
        <input type="text" name="jawaban" class="w-full border p-2 rounded" value="{{ $soal->jawaban }}" required>
    </div>
    <button type="submit" class="bg-[#6A5ACD] text-white px-4 py-2 rounded hover:bg-[#7B68EE]">Update</button>
</form>








</x-layouts.admin>
</x-layouts.admin>

