@props(['guru'])

{{-- Panggil: <x-public.guru-card :guru="$guru" /> --}}
<div class="text-center p-4 bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
    {{-- Asumsi path gambar guru ada di $guru->foto --}}
    <img src="{{ $guru->foto ?? asset('images/default-guru.png') }}" 
         alt="{{ $guru->nama }}" 
         class="w-24 h-24 object-cover rounded-full mx-auto mb-3 border-4 border-indigo-200">
    
    <h4 class="font-bold text-gray-900 line-clamp-1">{{ $guru->nama }}</h4>
    <p class="text-xs text-indigo-600 mt-0.5 line-clamp-1">
        {{ $guru->jabatan ?? 'Tenaga Pendidik' }}
    </p>
</div>