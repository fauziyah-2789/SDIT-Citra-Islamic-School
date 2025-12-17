@extends('admin.layouts')

@section('content')
<div class="p-6 max-w-xl">
    <h1 class="text-2xl font-bold mb-4">Tambah Role</h1>

    <form action="{{ route('admin.roles.store') }}" method="POST">
        @csrf

        <label class="block mb-2">Nama Role</label>
        <input type="text" name="name" class="input input-bordered w-full mb-4" required>

        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.roles.index') }}" class="btn">Kembali</a>
    </form>
</div>
@endsection
