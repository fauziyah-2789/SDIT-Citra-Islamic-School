<x-layouts.admin title="create.blade">
<x-layouts.admin title="create.blade">





<div class="container">
    <h1>Tambah Pengumuman</h1>
    <form action="{{ route('pengumuman.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control">
        </div>
        <div class="mb-3">
            <label>Isi</label>
            <textarea name="isi" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>








</x-layouts.admin>
</x-layouts.admin>

