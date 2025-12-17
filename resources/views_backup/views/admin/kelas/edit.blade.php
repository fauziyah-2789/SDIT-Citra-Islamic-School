<x-admin.layouts title="edit.blade">
<x-admin.layouts title="edit.blade">





<div class="container">
    <h1 class="mb-4">Edit Kelas</h1>

    <form action="{{ route('admin.kelas.update',$kelas->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Kelas</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $kelas->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="guru_id" class="form-label">Wali Kelas</label>
            <select name="guru_id" id="guru_id" class="form-control">
                <option value="">-- Pilih Guru --</option>
                @foreach($gurus as $g)
                    <option value="{{ $g->id }}" {{ $kelas->guru_id == $g->id ? 'selected' : '' }}>{{ $g->nama }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.kelas.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>








</x-admin.layouts>
</x-admin.layouts>

