<x-layouts.admin title="edit.blade">
<x-layouts.admin title="edit.blade">





<div class="container">
    <h1>Edit Tugas</h1>
    <form action="{{ route('tugas.update', $tugas->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $tugas->judul }}">
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $tugas->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label>Tenggat</label>
            <input type="date" name="tenggat" class="form-control" value="{{ $tugas->tenggat }}">
        </div>
        <button class="btn btn-success">Update</button>
    </form>
</div>








</x-layouts.admin>
</x-layouts.admin>
