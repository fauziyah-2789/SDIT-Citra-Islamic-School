@extends('components.layouts.guest')

@section('title', 'Formulir Pendaftaran Siswa Baru')

@section('content')

    {{-- Header Halaman --}}
    <section class="bg-indigo-700 py-16 text-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h1 class="text-4xl font-extrabold mb-2">Pendaftaran Siswa Baru Tahun Ajaran {{ date('Y') }}/{{ date('Y') + 1 }}</h1>
            <p class="text-indigo-200 text-lg">Silakan isi data calon siswa dan data orang tua/wali dengan lengkap dan benar.</p>
        </div>
    </section>

    {{-- FORMULIR UTAMA --}}
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-8 md:p-12 rounded-xl shadow-2xl border border-gray-100">

                <div class="mb-8 text-center">
                    <h2 class="text-2xl font-bold text-gray-800">Langkah 1: Data Calon Siswa</h2>
                    <p class="text-gray-600">Mohon teliti dalam mengisi data berikut.</p>
                </div>

                <form method="POST" action="{{ route('public.pendaftaran.store') }}">
                    @csrf

                    {{-- PESAN SUKSES/ERROR (JIKA ADA) --}}
                    @if (session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                            <p class="font-bold">Pendaftaran Berhasil!</p>
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                            <p class="font-bold">Ada Kesalahan Input:</p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    {{-- GROUP 1: DATA SISWA --}}
                    <div class="space-y-6 mb-10 p-6 border rounded-lg bg-indigo-50/50">
                        <h3 class="text-xl font-semibold text-indigo-700 mb-4">Informasi Pribadi Calon Siswa</h3>

                        {{-- Nama Lengkap --}}
                        <div>
                            <label for="nama_lengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap Calon Siswa <span class="text-red-500">*</span></label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ old('nama_lengkap') }}" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2.5">
                            @error('nama_lengkap')<p class="text-sm text-red-500 mt-1">{{ $message }}</p>@enderror
                        </div>

                        {{-- NISN (Jika ada) --}}
                        <div>
                            <label for="nisn" class="block text-sm font-medium text-gray-700">NISN (Jika Ada)</label>
                            <input type="text" name="nisn" id="nisn" value="{{ old('nisn') }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2.5">
                            @error('nisn')<p class="text-sm text-red-500 mt-1">{{ $message }}</p>@enderror
                        </div>
                        
                        {{-- Tempat & Tanggal Lahir --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="tempat_lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir <span class="text-red-500">*</span></label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ old('tempat_lahir') }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2.5">
                                @error('tempat_lahir')<p class="text-sm text-red-500 mt-1">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir <span class="text-red-500">*</span></label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required
                                    class="mt-