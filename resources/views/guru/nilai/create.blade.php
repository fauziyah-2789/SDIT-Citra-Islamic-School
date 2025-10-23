@extends('layouts.guru')

@section('title', 'Tambah Nilai')

@section('content')
<h1 class="text-2xl font-bold mb-6">Tambah Nilai</h1>

<form action="{{ route('guru.nilai.store') }}" method="POST" class="space-y-4">
    @csrf
    <div>
        <label class="block mb-1 font-semibold">Nama Siswa</label>
        <input type="text" name="siswa" class="w-full border rounded-lg px-3 py-2" required>
    </div>

    <div>
        <label class="block mb-1 font-semibold">Mata Pelajaran</label>
        <input type="text" name="mapel" class="w-full border rounded-lg px-3 py-2" required>
    </div>

    <div>
        <label class="block mb-1 font-semibold">Nilai</label>
        <input type="number" name="nilai" class="w-full border rounded-lg px-3 py-2" min="0" max="100" required>
    </div>

    <button type="submit" class="bg-[#B07D62] text-white px-4 py-2 rounded-lg hover:bg-[#8D6E63]">Simpan</button>
</form>
@endsection
