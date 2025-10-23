@extends('layouts.guest')

@section('title', 'Prestasi Siswa')

@section('content')
<section class="bg-gradient-to-r from-emerald-300 to-blue-400 py-20 text-white text-center">
    <h1 class="text-4xl font-bold">Prestasi Siswa</h1>
    <p class="text-white/90 mt-2">Kumpulan prestasi siswa SDIT Citra Islamic School dari tingkat lokal hingga nasional</p>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        @if ($prestasis->count() > 0)
            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($prestasis as $item)
                    <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden">
                        @if ($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-48 object-cover">
                        @endif
                        <div class="p-6">
                            <h3 class="font-semibold text-xl text-emerald-600 mb-2">{{ $item->judul }}</h3>
                            <p class="text-gray-700 mb-3">{{ Str::limit($item->deskripsi, 100) }}</p>
                            <span class="text-sm text-blue-600 font-medium">{{ $item->tingkat }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center text-gray-500 py-20">
                <h2 class="text-2xl font-semibold mb-2">Belum ada prestasi.</h2>
                <p>Siswa kami terus berusaha memberikan yang terbaik!</p>
            </div>
        @endif
    </div>
</section>
@endsection
