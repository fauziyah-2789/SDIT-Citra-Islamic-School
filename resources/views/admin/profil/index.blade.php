@extends('layouts.admin')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-4">Profil Sekolah</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="space-y-3">
        <p><strong>Nama Sekolah:</strong> {{ $profil->nama_sekolah }}</p>
        <p><strong>Alamat:</strong> {{ $profil->alamat }}</p>
        <p><strong>Telepon:</strong> {{ $profil->telepon }}</p>
        <p><strong>Email:</strong> {{ $profil->email }}</p>
        <p><strong>Visi:</strong> {{ $profil->visi }}</p>
        <p><strong>Misi:</strong> {{ $profil->misi }}</p>
        <p><strong>Deskripsi:</strong> {{ $profil->deskripsi }}</p>
        <p><strong>Motto:</strong> {{ $profil->motto }}</p>

        @if($profil->logo)
            <div>
                <strong>Logo:</strong><br>
                <img src="{{ asset('storage/'.$profil->logo) }}" class="h-24 mt-2">
            </div>
        @endif

        @if($profil->foto_hero)
            <div>
                <strong>Hero Image:</strong><br>
                <img src="{{ asset('storage/'.$profil->foto_hero) }}" class="h-40 rounded-lg mt-2">
            </div>
        @endif
    </div>

    <a href="{{ route('admin.profil.edit') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Edit Profil</a>
</div>
@endsection
