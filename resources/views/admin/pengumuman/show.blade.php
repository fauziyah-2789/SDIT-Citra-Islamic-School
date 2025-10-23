@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Detail Pengumuman</h1>
    <ul class="list-group">
        <li class="list-group-item">Judul: {{ $pengumuman->judul }}</li>
        <li class="list-group-item">Isi: {{ $pengumuman->isi }}</li>
        <li class="list-group-item">Tanggal: {{ $pengumuman->tanggal }}</li>
    </ul>
    <a href="{{ route('pengumuman.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
