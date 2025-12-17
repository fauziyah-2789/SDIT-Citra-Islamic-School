<x-admin.layouts title="show.blade">
<x-admin.layouts title="show.blade">




<x-layout.admin title="Detail Berita">
    <div class="p-6 max-w-5xl mx-auto">
        <div class="bg-white p-6 rounded-xl shadow-md">
            <h1 class="text-3xl font-bold text-emerald-600 mb-4">{{ $berita->judul }}</h1>
            <p class="text-gray-500 mb-6">{{ $berita->created_at->format('d F Y') }}</p>

            @if ($berita->gambar)
                <img src="{{ asset('storage/' . $berita->gambar) }}" class="w-full max-h-[400px] object-cover rounded-lg mb-6">
            @endif

            <div class="prose max-w-none text-gray-800">
                {!! $berita->isi !!}
            </div>

            <div class="mt-6 text-right">
                <a href="{{ route('admin.berita.index') }}"
                    class="px-5 py-2 bg-gradient-to-r from-emerald-400 to-blue-400 text-white rounded-lg shadow hover:opacity-90">
                    ← Kembali
                </a>
            </div>
        </div>
    </div>
</x-layout.admin>








</x-admin.layouts>
</x-admin.layouts>

