<x-layouts.admin title="index.blade">
<x-layouts.admin title="index.blade">






<div class="p-6 bg-white rounded-2xl shadow-md">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-emerald-600">Data Ekstrakurikuler</h1>
        <a href="{{ route('admin.ekstrakurikuler.create') }}" class="bg-gradient-to-r from-emerald-400 to-blue-400 text-white px-4 py-2 rounded-xl hover:opacity-90 transition">+ Tambah Ekstrakurikuler</a>
    </div>

    <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
        <thead class="bg-gradient-to-r from-emerald-300 to-blue-300 text-white">
            <tr>
                <th class="py-3 px-4 text-left">No</th>
                <th class="py-3 px-4 text-left">Nama Kegiatan</th>
                <th class="py-3 px-4 text-left">Deskripsi</th>
                <th class="py-3 px-4 text-left">Pembimbing</th>
                <th class="py-3 px-4 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($ekstras as $index => $item)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4">{{ $index + 1 }}</td>
                    <td class="py-3 px-4 font-medium text-gray-700">{{ $item->nama }}</td>
                    <td class="py-3 px-4 text-gray-600">{{ Str::limit($item->deskripsi, 60) }}</td>
                    <td class="py-3 px-4 text-gray-600">{{ $item->pembimbing }}</td>
                    <td class="py-3 px-4 text-center">
                        <a href="{{ route('admin.ekstrakurikuler.edit', $item->id) }}" class="text-blue-500 hover:underline">Edit</a> |
                        <form action="{{ route('admin.ekstrakurikuler.destroy', $item->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="py-6 text-center text-gray-500">Belum ada data ekstrakurikuler.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>








</x-layouts.admin>
</x-layouts.admin>
