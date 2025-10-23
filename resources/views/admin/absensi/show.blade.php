@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Detail Absensi</h1>
    <ul class="list-group">
        <li class="list-group-item">Nama Siswa: {{ $absensi->nama_siswa }}</li>
        <li class="list-group-item">Tanggal: {{ $absensi->tanggal }}</li>
        <li class="list-group-item">Status: {{ $absensi->status }}</li>
    </ul>
    <a href="{{ route('absensi.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
