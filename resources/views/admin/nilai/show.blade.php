@extends('layouts.admin')

@section('title', 'Detail Prestasi')

@section('content')
<h1 class="text-2xl font-bold text-[#D4A373] mb-6">Detail Prestasi</h1>

<div class="bg-white shadow rounded-lg p-6">
    <p><strong>Judul:</strong> {{ $prestasi->judul }}</p>
    <p><strong>Tahun:</strong> {{ $prestasi->tahun }}</p>
    <p><strong>Deskripsi:</strong></p>
    <p>{{ $prestasi->deskripsi }}</p>

    <a href="{{ route('admin.prestasi.index') }}" class="mt-4 inline-block text-[#D4A373] hover:underline">Kembali ke Daftar Prestasi</a>
</div>
@endsection
  