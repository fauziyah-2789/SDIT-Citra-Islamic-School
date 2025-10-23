@extends('layouts.admin')

@section('title', 'Detail Materi')

@section('content')
<h1 class="text-2xl font-bold mb-4">{{ $materi->judul }}</h1>
<p class="mb-2"><strong>Deskripsi:</strong> {{ $materi->deskripsi }}</p>
<p class="mb-2"><strong>File:</strong>
    @if($materi->file)
        <a href="{{ asset('storage/' . $materi->file) }}" target="_blank" class="text-blue-500 underline">Lihat File</a>
    @else
        Tidak ada
    @endif
</p>
<a href="{{ route('admin.materi.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Kembali</a>
@endsection
