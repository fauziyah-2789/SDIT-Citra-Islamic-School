<x-layouts.admin title="show.blade">
<x-layouts.admin title="show.blade">






<div class="p-6 max-w-4xl mx-auto">
    <div class="bg-white p-6 rounded-xl shadow-md">
        <h1 class="text-3xl font-bold text-emerald-600 mb-4">{{ $galeri->judul }}</h1>
        <p class="text-gray-500 mb-6">{{ $galeri->created_at->format('d F Y') }}</p>

        @if ($galeri->gambar)
            <img src="{{ asset('storage/' . $galeri->gambar) }}" class="w-full max-h-[400px] object-cover rounded-lg mb-6">
        @endif

        @if ($galeri->deskripsi)
            <p class="text-gray-700 leading-relaxed">{{ $galeri->deskripsi }}</p>
        @endif

        <div class="mt-6 text-right">
            <a href="{{ route('admin.galeri.index') }}" class="px-5 py-2 bg-gradient-to-r from-emerald-400 to-blue-400 text-white rounded-lg shadow hover:opacity-90">← Kembali</a>
        </div>
    </div>
</div>








</x-layouts.admin>
</x-layouts.admin>

