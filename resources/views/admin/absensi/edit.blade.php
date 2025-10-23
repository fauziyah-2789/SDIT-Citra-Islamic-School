@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Absensi</h1>
    <form action="{{ route('absensi.update', $absensi->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama Siswa</label>
            <input type="text" name="nama_siswa" class="form-control" value="{{ $absensi->nama_siswa }}">
        </div>
        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $absensi->tanggal }}">
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option {{ $absensi->status == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                <option {{ $absensi->status == 'Izin' ? 'selected' : '' }}>Izin</option>
                <option {{ $absensi->status == 'Alfa' ? 'selected' : '' }}>Alfa</option>
            </select>
        </div>
        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection
