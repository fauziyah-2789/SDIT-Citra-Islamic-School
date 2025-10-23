@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Profil Guru</h1>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Mata Pelajaran</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($profilgurus as $guru)
            <tr>
                <td>{{ $guru->id }}</td>
                <td>{{ $guru->nama }}</td>
                <td>{{ $guru->mapel }}</td>
                <td>{{ $guru->email }}</td>
                <td>
                    <a href="{{ route('profilguru.show', $guru->id) }}" class="btn btn-info">Detail</a>
                    <a href="{{ route('profilguru.edit', $guru->id) }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
