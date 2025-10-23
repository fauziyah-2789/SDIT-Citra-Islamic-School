@extends('layouts.guru')

@section('title', 'Detail Materi')

@section('content')
<h1 class="text-2xl font-bold mb-6">{{ $materi->judul }}</h1>
<p class="text-gray-700 mb-6">{{ $materi->deskripsi }}</p>

<a href="{{ route('guru.materi.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Kembali</a>
@endsection
