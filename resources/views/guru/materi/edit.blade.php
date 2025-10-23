@extends('layouts.guru')

@section('title', 'Edit Materi')

@section('content')
<h1 class="text-2xl font-bold text-[#B07D62] mb-6">Edit Materi</h1>

<form action="{{ route('guru.materi.update', $materi->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4 bg-white p-6 rounded shadow">
    @csrf
    @method('PUT')

    <div>
        <label class="block font-medium">Judul</label>
        <input type="text" name="judul" value="{{ $materi->judul }}" class="w-full border rounded p-2" required>
    </div>

    <div>
        <label class="block font-medium">Mata Pelajaran</label>
        <input type="text" name="mapel" value="{{ $materi->mapel }}" class="w-full border rounded p-2" required>
    </div>

    <div>
        <label class="block font-medium">Deskripsi</label>
        <textarea name="deskripsi" rows="4" class="w-full border rounded p-2">{{ $materi->deskripsi }}</textarea>
    </div>

    <div>
        <label class="block font-medium">Upload File Baru (opsional)</label>
        <input type="file" name="file" class="w-full">
        @if ($materi->file)
            <p class="text-sm mt-1">File saat ini: <a href="{{ asset('storage/'.$materi->file) }}" target="_blank" class="text-blue-500 underline">Lihat</a></p>
        @endif
    </div>

    <button type="submit" class="bg-[#B07D62] text-white px-6 py-2 rounded hover:bg-[#8D6E63]">Update</button>
</form>
@endsection
