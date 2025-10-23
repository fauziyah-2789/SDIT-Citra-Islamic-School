@extends('layouts.guru')

@section('title', 'Edit Jadwal - Guru')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit Jadwal Mengajar</h1>

<form action="{{ route('guru.jadwal.update', $jadwal->id) }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
    @csrf
    @method('PUT')

    <div>
        <label class="block mb-1 font-semibold">Kelas</label>
        <select name="kelas_id" class="w-full border px-3 py-2 rounded">
            @foreach($kelas as $k)
                <option value="{{ $k->id }}" {{ $jadwal->kelas_id == $k->id ? 'selected' : '' }}>{{ $k->nama_kelas }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="block mb-1 font-semibold">Mata Pelajaran</label>
        <select name="mapel_id" class="w-full border px-3 py-2 rounded">
            @foreach($mapels as $m)
                <option value="{{ $m->id }}" {{ $jadwal->mapel_id == $m->id ? 'selected' : '' }}>{{ $m->nama_mapel }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="block mb-1 font-semibold">Hari</label>
        <input type="text" name="hari" class="w-full border px-3 py-2 rounded" value="{{ $jadwal->hari }}">
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block mb-1 font-semibold">Jam Mulai</label>
            <input type="time" name="jam_mulai" class="w-full border px-3 py-2 rounded" value="{{ $jadwal->jam_mulai }}">
        </div>
        <div>
            <label class="block mb-1 font-semibold">Jam Selesai</label>
            <input type="time" name="jam_selesai" class="w-full border px-3 py-2 rounded" value="{{ $jadwal->jam_selesai }}">
        </div>
    </div>

    <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Update</button>
</form>
@endsection
