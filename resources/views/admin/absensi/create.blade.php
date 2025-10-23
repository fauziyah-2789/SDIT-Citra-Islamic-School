@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Tambah Absensi</h1>
    <form action="{{ route('absensi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Siswa</label>
            <input type="text" name="nama_siswa" class="form-control">
        </div>
        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control">
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="Hadir">Hadir</option>
                <option value="Izin">Izin</option>
                <option value="Alfa">Alfa</option>
            </select>
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
