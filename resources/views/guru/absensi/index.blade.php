@extends('layouts.guru')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Data Absensi</h1>
    <a href="{{ route('guru.absensi.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Absensi</a>
    <table class="table-auto w-full mt-4 border">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Tanggal</th>
                <th class="px-4 py-2">Guru</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($absensis as $absensi)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $absensi->tanggal }}</td>
                <td class="px-4 py-2">{{ $absensi->guru->name ?? '-' }}</td>
                <td class="px-4 py-2">{{ $absensi->status }}</td>
                <td class="px-4 py-2">
                    <a href="{{ route('guru.absensi.edit', $absensi->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                    <form action="{{ route('guru.absensi.destroy', $absensi->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 text-white px-2 py-1 rounded" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $absensis->links() }}
    </div>
</div>
@endsection
