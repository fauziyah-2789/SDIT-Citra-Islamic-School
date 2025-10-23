@extends('layouts.guest')

@section('title', 'Daftar Guru - Sekolah Citra')

@section('content')
<section class="mb-20 max-w-6xl mx-auto px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-[#D4A373] mb-12 text-center">Daftar Guru</h2>

    <div class="grid md:grid-cols-3 gap-8">
        @foreach($gurus as $guru)
            <div class="bg-white rounded-xl shadow hover:shadow-xl overflow-hidden text-center p-5">
                @if($guru->foto)
                    <img src="{{ asset('storage/'.$guru->foto) }}" 
                         alt="{{ $guru->nama }}" 
                         class="mx-auto rounded-xl mb-4 object-cover h-48 w-full">
                @endif
                <h3 class="font-semibold text-lg text-[#B07D62] mb-2">{{ $guru->nama }}</h3>
                <p class="text-gray-600 mb-1">Profesi: {{ $guru->profesi }}</p>
                <p class="text-gray-600">Mengajar: {{ $guru->mata_pelajaran }}</p>
            </div>
        @endforeach
    </div>
</section>
@endsection
