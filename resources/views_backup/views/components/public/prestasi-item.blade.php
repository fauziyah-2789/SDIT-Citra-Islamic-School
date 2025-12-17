@props(['prestasi'])

{{-- Panggil: <x-public.prestasi-item :prestasi="$prestasi" /> --}}
<div class="flex items-start space-x-3 p-3 bg-white rounded-lg shadow-sm border-l-4 border-green-400">
    <svg class="flex-shrink-0 w-6 h-6 text-green-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 16.96 11.952 11.952 0 0012 21a11.952 11.952 0 009-4.04 12.02 12.02 0 00-.382-10.016z"></path></svg>
    <div>
        <h4 class="font-semibold text-gray-800">{{ $prestasi->judul }}</h4>
        <p class="text-sm text-gray-600">
            **Siswa:** {{ $prestasi->nama_siswa }} | **Tingkat:** {{ $prestasi->tingkat }} ({{ $prestasi->tahun }})
        </p>
    </div>
</div>