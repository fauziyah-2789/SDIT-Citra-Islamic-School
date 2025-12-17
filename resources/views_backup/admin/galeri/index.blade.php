<x-admin.layouts title="index.blade">
<x-admin.layouts title="index.blade">





<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-emerald-600">Daftar Galeri</h1>
        <a href="{{ route('admin.galeri.create') }}" class="bg-gradient-to-r from-emerald-400 to-blue-400 text-white px-4 py-2 rounded-lg shadow hover:opacity-90 transition">+ Tambah Foto</a>
    </div>

    @if (session('success'))
        <div class="bg-emerald-100 text-emerald-800 p-3 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($galeris as $item)
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition relative">
                @if ($item->gambar)
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-52 object-cover">
                @else
                    <img src="{{ asset('images/no-image.jpg') }}" alt="No Image" class="w-full h-52 object-cover">
                @endif

                <div class="p-4">
                    <h3 class="font-semibold text-gray-800 truncate">{{ $item->judul }}</h3>
                    <p class="text-sm text-gray-500">{{ $item->created_at->format('d M Y') }}</p>
                </div>

                <div class="absolute top-3 right-3 flex space-x-2">
                    <a href="{{ route('admin.galeri.edit', $item->id) }}" class="bg-emerald-400 hover:bg-emerald-500 text-white p-2 rounded-lg transition">
                        ✎
                    </a>
                    <form action="{{ route('admin.galeri.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus foto ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-lg transition">🗑</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $galeris->links('pagination::tailwind') }}
    </div>
</div>









</x-admin.layouts>
</x-admin.layouts>

