@extends('layouts.guru')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Tambah Absensi</h1>
    <form action="{{ route('guru.absensi.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block mb-1">Tanggal</label>
            <input type="date" name="tanggal" class="border px-2 py-1 w-full">
        </div>
        <div class="mb-4">
            <label class="block mb-1">Status</label>
            <select name="status" class="border px-2 py-1 w-full">
                <option value="Hadir">Hadir</option>
                <option value="Izin">Izin</option>
                <option value="Alpha">Alpha</option>
            </select>
        </div>
        <button class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
