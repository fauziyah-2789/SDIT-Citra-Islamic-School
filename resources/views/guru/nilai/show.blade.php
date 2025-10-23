@extends('layouts.guru')

@section('title', 'Detail Nilai')

@section('content')
<h1 class="text-2xl font-bold mb-6">Detail Nilai</h1>

<p><span class="font-semibold">Nama Siswa:</span> {{ $nilai->siswa }}</p>
<p><span class="font-semibold">Mata Pelajaran:</span> {{ $nilai->mapel }}</p>
<p><span class="font-semibold">Nilai:</span> {{ $nilai->nilai }}</p>

<a href="{{ route('guru.nilai.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg mt-4 inline-block">Kembali</a>
@endsection
