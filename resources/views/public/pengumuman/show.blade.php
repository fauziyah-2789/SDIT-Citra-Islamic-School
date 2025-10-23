@extends('layouts.guest')

@section('content')
<div class="container mx-auto px-4 py-12 max-w-3xl">
    <div class="bg-white shadow-md rounded-2xl p-8">
        <h1 class="text-3xl font-bold mb-4 text-gray-800">{{ $pengumuman->judul }}</h1>
        <p class="text-gray-500 text-sm mb-6">{{ $pengumuman->created_at->translatedFormat('d F Y') }}</p>

        <div class="prose max-w-none text-gray-700 leading-relaxed">
            {!! $pengumuman->isi !!}
        </div>

        <div class="mt-8">
            <a href="{{ route('pengumuman.index') }}" class="text-blue-600 hover:text-blue-800 font-medium">
                ← Kembali ke daftar pengumuman
            </a>
        </div>
    </div>
</div>
@endsection
