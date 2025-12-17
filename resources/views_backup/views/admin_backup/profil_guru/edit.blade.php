<x-layouts.admin title="edit.blade">
<x-layouts.admin title="edit.blade">





<div class="container">
    <h1>Edit Profil Guru</h1>
    <form action="{{ route('profilguru.update', $profilguru->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $profilguru->nama }}">
        </div>
        <div class="mb-3">
            <label>Mata Pelajaran</label>
            <input type="text" name="mapel" class="form-control" value="{{ $profilguru->mapel }}">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $profilguru->email }}">
        </div>
        <button class="btn btn-success">Update</button>
    </form>
</div>








</x-layouts.admin>
</x-layouts.admin>

