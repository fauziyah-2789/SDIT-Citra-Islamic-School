<x-admin.layouts title="edit.blade">
<x-admin.layouts title="edit.blade">




<div class="max-w-2xl mx-auto">
  <h1 class="text-xl font-bold mb-4">Edit Program</h1>
  <form action="{{ route('admin.programs.update', $program->id) }}" method="POST">
    @csrf @method('PUT')
    <label class="block mb-2">Judul</label>
    <input type="text" name="judul" value="{{ $program->judul }}" class="w-full p-2 border rounded mb-3" required>
    <label class="block mb-2">Deskripsi</label>
    <textarea name="deskripsi" class="w-full p-2 border rounded mb-3">{{ $program->deskripsi }}</textarea>
    <label class="block mb-2">Urutan</label>
    <input type="number" name="order" value="{{ $program->order }}" class="w-full p-2 border rounded mb-3">
    <div class="flex gap-2">
      <a href="{{ route('admin.program.index') }}" class="px-4 py-2 border rounded">Kembali</a>
      <button class="px-4 py-2 bg-emerald-600 text-white rounded">Perbarui</button>
    </div>
  </form>
</div>








</x-admin.layouts>
</x-admin.layouts>

