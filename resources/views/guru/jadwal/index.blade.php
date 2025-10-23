@extends('layouts.guru')
@section('title', 'Jadwal Mengajar - Guru')
@section('content')
<h1 class="text-2xl font-bold mb-4">Jadwal Mengajar</h1>

<a href="{{ route('guru.jadwal.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mb-4 inline-block">Tambah Jadwal</a>

<table class="w-full border border-gray-300 rounded-lg overflow-hidden">
    <thead class="bg-gray-200">
        <tr>
            <th class="px-4 py-2 border">#</th>
            <th class="px-4 py-2 border">Kelas</th>
            <th class="px-4 py-2 border">Mata Pelajaran</th>
            <th class="px-4 py-2 border">Hari</th>
            <th class="px-4 py-2 border">Jam</th>
            <th class="px-4 py-2 border">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jadwals as $jadwal)
        <tr>
            <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
            <td class="px-4 py-2 border">{{ $jadwal->kelas->nama_kelas ?? '-' }}</td>
            <td class="px-4 py-2 border">{{ $jadwal->mapel->nama_mapel ?? '-' }}</td>
            <td class="px-4 py-2 border">{{ $jadwal->hari }}</td>
            <td class="px-4 py-2 border">{{ $jadwal->jam_mulai }} - {{ $jadwal->jam_selesai }}</td>
            <td class="px-4 py-2 border space-x-2">
                <a href="{{ route('guru.jadwal.edit', $jadwal->id) }}" class="text-blue-500 hover:underline">Edit</a>
                <form action="{{ route('guru.jadwal.destroy', $jadwal->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $jadwals->links() }}
@endsection
