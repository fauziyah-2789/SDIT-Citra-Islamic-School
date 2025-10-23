@extends('layouts.admin')

@section('title', 'Soal')

@section('content')
<div class="flex justify-between mb-4">
    <h1 class="text-2xl font-bold">Daftar Soal</h1>
    <a href="{{ route('admin.soal.create') }}" class="bg-[#6A5ACD] text-white px-4 py-2 rounded hover:bg-[#7B68EE]">Tambah Soal</a>
</div>

<table class="w-full bg-white shadow rounded-lg">
    <thead class="bg-[#6A5ACD] text-white">
        <tr>
            <th class="p-2">#</th>
            <th class="p-2">Judul</th>
            <th class="p-2">Tipe</th>
            <th class="p-2">Jawaban</th>
            <th class="p-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($soals as $soal)
        <tr class="border-b">
            <td class="p-2">{{ $loop->iteration }}</td>
            <td class="p-2">{{ $soal->judul }}</td>
            <td class="p-2">{{ $soal->type }}</td>
            <td class="p-2">{{ $soal->jawaban }}</td>
            <td class="p-2 space-x-1">
                <a href="{{ route('admin.soal.edit', $soal->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">Edit</a>
                <form action="{{ route('admin.soal.destroy', $soal->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $soals->links() }}
@endsection
