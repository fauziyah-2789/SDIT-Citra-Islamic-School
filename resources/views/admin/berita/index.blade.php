<x-layouts.admin title="index.blade">
<x-layouts.admin title="index.blade">




<x-layout.admin title="Manajemen Berita">
    <div class="p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-emerald-600">Daftar Berita</h1>
            <a href="{{ route('admin.berita.create') }}"
                class="bg-gradient-to-r from-emerald-400 to-blue-400 text-white px-4 py-2 rounded-lg shadow hover:opacity-90 transition">+ Tambah
                Berita</a>
        </div>

        @if (session('success'))
            <div class="bg-emerald-100 text-emerald-800 p-3 rounded-lg mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto bg-white rounded-xl shadow-md">
            <table class="min-w-full text-sm text-gray-700">
                <thead class="bg-gradient-to-r from-emerald-400 to-blue-400 text-white">
                    <tr>
                        <th class="px-4 py-3 text-left">#</th>
                        <th class="px-4 py-3 text-left">Judul</th>
                        <th class="px-4 py-3 text-left">Tanggal</th>
                        <th class="px-4 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($beritas as $index => $item)
                        <tr class="border-b hover:bg-emerald-50">
                            <td class="px-4 py-3">{{ $index + 1 }}</td>
                            <td class="px-4 py-3 font-semibold">{{ $item->judul }}</td>
                            <td class="px-4 py-3">{{ $item->created_at->format('d M Y') }}</td>
                            <td class="px-4 py-3 text-center">
                                <a href="{{ route('admin.berita.show', $item->id) }}"
                                    class="text-blue-500 hover:underline">Lihat</a> |
                                <a href="{{ route('admin.berita.edit', $item->id) }}"
                                    class="text-emerald-500 hover:underline">Edit</a> |
                                <form action="{{ route('admin.berita.destroy', $item->id) }}" method="POST" class="inline"
                                    onsubmit="return confirm('Yakin ingin hapus berita ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $beritas->links('pagination::tailwind') }}
        </div>
    </div>
</x-layout.admin>








</x-layouts.admin>
</x-layouts.admin>
