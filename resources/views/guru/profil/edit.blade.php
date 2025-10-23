@extends('layouts.guru')
@section('title', 'Edit Profil')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Profil</h1>

<form action="{{ route('guru.profil.update') }}" method="POST" enctype="multipart/form-data" class="space-y-4 bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
    @csrf
    <div>
        <label class="block text-sm font-medium mb-1">Nama</label>
        <input type="text" name="name" value="{{ $guru->name }}" class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 p-2">
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">Avatar</label>
        <input type="file" name="avatar" class="w-full p-2">
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">Password Baru</label>
        <input type="password" name="password" class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 p-2">
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 p-2">
    </div>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan Perubahan</button>
</form>
@endsection
