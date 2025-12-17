<x-layouts.guru title="index.blade">
<x-layouts.guru title="index.blade">






<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-[#B07D62]">Daftar Materi</h1>
    <a href="{{ route('guru.materi.create') }}" class="bg-[#B07D62] text-white px-4 py-2 rounded hover:bg-[#8D6E63]">+ Tambah Materi</a>
</div>

<table class="w-full bg-white shadow rounded-lg overflow-hidden">
    <thead class="bg-[#B07D62] text-white">
        <tr>
            <th class="px-4 py-2">No</th>
            <th class="px-4 py-2">Judul</th>
            <th class="px-4 py-2">Mapel</th>
            <th class="px-4 py-2">Tanggal</th>
            <th class="px-4 py-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($materis as $materi)
        <tr class="border-b">
            <td class="px-4 py-2">{{ $loop->iteration }}</td>
            <td class="px-4 py-2">{{ $materi->judul }}</td>
            <td class="px-4 py-2">{{ $materi->mapel }}</td>
            <td class="px-4 py-2">{{ $materi->created_at->format('d M Y') }}</td>
            <td class="px-4 py-2">
                <a href="{{ route('guru.materi.edit', $materi->id) }}" class="text-blue-500 hover:underline">Edit</a> | 
                <form action="{{ route('guru.materi.destroy', $materi->id) }}" method="POST" class="inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Yakin hapus?')" class="text-red-500 hover:underline">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center py-4">Belum ada materi.</td>
        </tr>
        @endforelse
    </tbody>
</table>








</x-layouts.guru>
</x-layouts.guru>
