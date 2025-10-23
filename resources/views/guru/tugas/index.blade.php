@extends('layouts.guru')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Tugas</h1>
    <a href="{{ route('guru.tugas.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Tugas</a>
    <table class="table-auto w-full mt-4 border">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Judul</th>
                <th class="px-4 py-2">Deskripsi</th>
                <th class="px-4 py-2">Deadline</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tugas as $t)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $t->judul }}</td>
                <td class="px-4 py-2">{{ Str::limit($t->deskripsi, 50) }}</td>
                <td class="px-4 py-2">{{ $t->deadline }}</td>
                <td class="px-4 py-2">
                    <a href="{{ route('guru.tugas.edit', $t->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                    <form action="{{ route('guru.tugas.destroy', $t->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 text-white px-2 py-1 rounded" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $tugas->links() }}
    </div>
</div>
@endsection
