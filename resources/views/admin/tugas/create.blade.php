<x-layouts.admin title="create.blade">
<x-layouts.admin title="create.blade">





<div class="container">
    <h1>Tambah Tugas</h1>
    <form action="{{ route('tugas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control">
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Tenggat</label>
            <input type="date" name="tenggat" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>








</x-layouts.admin>
</x-layouts.admin>
