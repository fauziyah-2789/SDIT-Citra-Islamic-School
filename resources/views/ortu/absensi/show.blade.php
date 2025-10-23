@extends('layouts.ortu')

@section('title', 'Detail Absensi')

@section('content')
<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6 mt-6">
    <h1 class="text-xl font-semibold mb-4">Detail Absensi</h1>

    <p><strong>Tanggal:</strong> {{ $absensi->tanggal }}</p>
    <p><strong>Status:</strong> {{ $absensi->status }}</p>
    <p><strong>Keterangan:</strong> {{ $absensi->keterangan ?? '-' }}</p>

    <div class="mt-4">
        <a href="{{ route('ortu.absensi.index') }}" class="text-blue-600 hover:underline">← Kembali ke daftar</a>
    </div>
</div>
@endsection
