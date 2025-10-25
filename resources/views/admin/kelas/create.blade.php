<x-layouts.admin title="create.blade">
<x-layouts.admin title="create.blade">





<div class="container">
    <h1 class="mb-4">Tambah Kelas</h1>

    <form action="{{ route('admin.kelas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Kelas</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="guru_id" class="form-label">Wali Kelas</label>
            <select name="guru_id" id="guru_id" class="form-control">
                <option value="">-- Pilih Guru --</option>
                @foreach($gurus as $g)
                    <option value="{{ $g->id }}">{{ $g->nama }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.kelas.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>








</x-layouts.admin>
</x-layouts.admin>
