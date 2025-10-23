@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Kelas</h1>

    <a href="{{ route('admin.kelas.create') }}" class="btn btn-primary mb-3">+ Tambah Kelas</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Kelas</th>
                <th>Wali Kelas</th>
                <th>Jumlah Siswa</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($kelas as $k)
                <tr>
                    <td>{{ $k->nama }}</td>
                    <td>{{ $k->guru ? $k->guru->nama : '-' }}</td>
                    <td>{{ $k->siswas->count() }}</td>
                    <td>
                        <a href="{{ route('admin.kelas.edit',$k->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.kelas.destroy',$k->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" class="text-center">Belum ada kelas</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
