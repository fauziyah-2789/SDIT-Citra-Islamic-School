@extends('layouts.guru')

@section('title', 'Nilai')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Daftar Nilai</h1>
    <a href="{{ route('guru.nilai.create') }}" class="bg-[#B07D62] text-white px-4 py-2 rounded-lg hover:bg-[#8D6E63]">Tambah Nilai</a>
</div>

<table class="min-w-full bg-white shadow rounded-lg">
    <thead class="bg-[#B07D62] text-white">
        <tr>
            <th class="px-6 py-3 text-left">Siswa</th>
            <th class="px-6 py-3 text-left">Mata Pelajaran</th>
            <th class="px-6 py-3 text-left">Nilai</th>
            <th class="px-6 py-3 text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($nilais as $nilai)
        <tr class="border-b">
            <td class="px-6 py-4">{{ $nilai->siswa }}</td>
            <td class="px-6 py-4">{{ $nilai->mapel }}</td>
            <td class="px-6 py-4">{{ $nilai->nilai }}</td>
            <td class="px-6 py-4 text-center">
                <a href="{{ route('guru.nilai.show', $nilai->id) }}" class="text-blue-600 hover:underline">Lihat</a> |
                <a href="{{ route('guru.nilai.edit', $nilai->id) }}" class="text-green-600 hover:underline">Edit</a> |
                <form action="{{ route('guru.nilai.destroy', $nilai->id) }}" method="POST" class="inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Hapus nilai ini?')" class="text-red-600 hover:underline">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="px-6 py-4 text-center text-gray-500">Belum ada nilai.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
