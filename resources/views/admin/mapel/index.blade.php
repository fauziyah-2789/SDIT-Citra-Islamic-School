@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Daftar Mata Pelajaran</h1>
    <a href="{{ route('admin.mapel.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Mapel</a>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">No</th>
                <th class="py-2 px-4 border-b">Nama Mapel</th>
                <th class="py-2 px-4 border-b">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mapels as $mapel)
            <tr>
                <td class="py-2 px-4 border-b">{{ $loop->iteration }}</td>
                <td class="py-2 px-4 border-b">{{ $mapel->nama }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('admin.mapel.edit', $mapel->id) }}" class="bg-yellow-400 text-white px-2 py-1 rounded">Edit</a>
                    <form action="{{ route('admin.mapel.destroy', $mapel->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
