@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Data Pengumuman</h1>
    <a href="{{ route('pengumuman.create') }}" class="btn btn-primary">Tambah Pengumuman</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengumumen as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ Str::limit($item->isi, 50) }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>
                    <a href="{{ route('pengumuman.show', $item->id) }}" class="btn btn-info">Detail</a>
                    <a href="{{ route('pengumuman.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pengumuman.destroy', $item->id) }}" method="POST" style="display:inline;">
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
