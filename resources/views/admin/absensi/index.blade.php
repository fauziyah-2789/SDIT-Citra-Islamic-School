@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Data Absensi</h1>
    <a href="{{ route('absensi.create') }}" class="btn btn-primary">Tambah Absensi</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Siswa</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($absensis as $absensi)
            <tr>
                <td>{{ $absensi->id }}</td>
                <td>{{ $absensi->nama_siswa }}</td>
                <td>{{ $absensi->tanggal }}</td>
                <td>{{ $absensi->status }}</td>
                <td>
                    <a href="{{ route('absensi.show', $absensi->id) }}" class="btn btn-info">Detail</a>
                    <a href="{{ route('absensi.edit', $absensi->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('absensi.destroy', $absensi->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
