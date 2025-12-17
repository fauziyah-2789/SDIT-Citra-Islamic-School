@extends('admin.layouts')

@section('content')
    <x-back-button />
<div class="p-6 max-w-xl">
    <h1 class="text-2xl font-bold mb-4">Edit Role</h1>

    <form action="{{ route('admin.roles.update', $role) }}" method="POST">
        @csrf
        @method('PUT')

        <label class="block mb-2">Nama Role</label>
        <input type="text" name="name" value="{{ $role->name }}" class="input input-bordered w-full mb-4" required>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admin.roles.index') }}" class="btn">Kembali</a>
    </form>
</div>
@endsection
