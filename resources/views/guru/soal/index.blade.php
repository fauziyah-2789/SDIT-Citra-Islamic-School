<x-layouts.guru title="index.blade">
<x-layouts.guru title="index.blade">






<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Daftar Soal</h1>
    <a href="{{ route('guru.soal.create') }}" class="bg-[#B07D62] text-white px-4 py-2 rounded-lg hover:bg-[#8D6E63]">Tambah Soal</a>
</div>

<table class="min-w-full bg-white shadow rounded-lg">
    <thead class="bg-[#B07D62] text-white">
        <tr>
            <th class="px-6 py-3 text-left">Judul</th>
            <th class="px-6 py-3 text-left">Soal</th>
            <th class="px-6 py-3 text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($soals as $soal)
        <tr class="border-b">
            <td class="px-6 py-4">{{ $soal->judul }}</td>
            <td class="px-6 py-4">{{ Str::limit($soal->soal, 50) }}</td>
            <td class="px-6 py-4 text-center">
                <a href="{{ route('guru.soal.show', $soal->id) }}" class="text-blue-600 hover:underline">Lihat</a> |
                <a href="{{ route('guru.soal.edit', $soal->id) }}" class="text-green-600 hover:underline">Edit</a> |
                <form action="{{ route('guru.soal.destroy', $soal->id) }}" method="POST" class="inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Hapus soal ini?')" class="text-red-600 hover:underline">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3" class="px-6 py-4 text-center text-gray-500">Belum ada soal.</td>
        </tr>
        @endforelse
    </tbody>
</table>








</x-layouts.guru>
</x-layouts.guru>
