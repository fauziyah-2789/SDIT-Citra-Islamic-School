@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Pesan</h1>
    <form action="{{ route('admin.pesan.update', $pesan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block mb-1">Guru</label>
            <select name="guru_id" class="border px-2 py-1 w-full">
                @foreach($gurus as $guru)
                <option value="{{ $guru->id }}" {{ $guru->id == $pesan->guru_id ? 'selected' : '' }}>{{ $guru->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-1">Judul</label>
            <input type="text" name="judul" class="border px-2 py-1 w-full" value="{{ $pesan->judul }}">
        </div>
        <div class="mb-4">
            <label class="block mb-1">Isi Pesan</label>
            <textarea name="isi" class="border px-2 py-1 w-full">{{ $pesan->isi }}</textarea>
        </div>
        <button class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
