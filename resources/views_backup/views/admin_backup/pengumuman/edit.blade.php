<x-layouts.admin title="edit.blade">
<x-layouts.admin title="edit.blade">





<div class="container">
    <h1>Edit Pengumuman</h1>
    <form action="{{ route('pengumuman.update', $pengumuman->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $pengumuman->judul }}">
        </div>
        <div class="mb-3">
            <label>Isi</label>
            <textarea name="isi" class="form-control">{{ $pengumuman->isi }}</textarea>
        </div>
        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $pengumuman->tanggal }}">
        </div>
        <button class="btn btn-success">Update</button>
    </form>
</div>








</x-layouts.admin>
</x-layouts.admin>

