<x-layouts.admin title="index.blade">
<x-layouts.admin title="index.blade">





<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Daftar Fasilitas Sekolah</h1>
    <a href="{{ route('admin.fasilitas.create') }}"
       class="bg-gradient-to-r from-emerald-400 to-blue-400 text-white px-4 py-2 rounded-lg shadow hover:opacity-90 transition">
       + Tambah Fasilitas
    </a>
</div>

@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white rounded-xl shadow-lg overflow-hidden">
    <table class="min-w-full text-left border-collapse">
        <thead class="bg-gradient-to-r from-emerald-300 to-blue-400 text-white">
            <tr>
                <th class="py-3 px-4">No</th>
                <th class="py-3 px-4">Nama Fasilitas</th>
                <th class="py-3 px-4">Deskripsi</th>
                <th class="py-3 px-4">Gambar</th>
                <th class="py-3 px-4 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($fasilitas as $index => $item)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4">{{ $index + 1 }}</td>
                    <td class="py-3 px-4 font-medium text-gray-800">{{ $item->nama }}</td>
                    <td class="py-3 px-4 text-gray-600">{{ Str::limit($item->deskripsi, 60) }}</td>
                    <td class="py-3 px-4">
                        @if ($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar" class="w-20 h-16 object-cover rounded-lg border">
                        @else
                            <span class="text-gray-400 italic">Belum ada</span>
                        @endif
                    </td>
                    <td class="py-3 px-4 text-center">
                        <a href="{{ route('admin.fasilitas.edit', $item->id) }}" class="text-blue-600 hover:underline">Edit</a> |
                        <form action="{{ route('admin.fasilitas.destroy', $item->id) }}" method="POST" class="inline"
                              onsubmit="return confirm('Yakin ingin menghapus fasilitas ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-6 text-gray-500">Belum ada data fasilitas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-6">
    {{ $fasilitas->links('pagination::tailwind') }}
</div>









</x-layouts.admin>
</x-layouts.admin>
