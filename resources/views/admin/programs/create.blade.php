@extends('layouts.admin')
@section('title','Tambah Program')
@section('content')
<div class="max-w-2xl mx-auto">
  <h1 class="text-xl font-bold mb-4">Tambah Program</h1>
  <form action="{{ route('admin.programs.store') }}" method="POST">
    @csrf
    <label class="block mb-2">Judul</label>
    <input type="text" name="judul" class="w-full p-2 border rounded mb-3" required>
    <label class="block mb-2">Deskripsi</label>
    <textarea name="deskripsi" class="w-full p-2 border rounded mb-3"></textarea>
    <label class="block mb-2">Urutan</label>
    <input type="number" name="order" class="w-full p-2 border rounded mb-3">
    <div class="flex gap-2">
      <a href="{{ route('admin.programs.index') }}" class="px-4 py-2 border rounded">Kembali</a>
      <button class="px-4 py-2 bg-emerald-600 text-white rounded">Simpan</button>
    </div>
  </form>
</div>
@endsection
