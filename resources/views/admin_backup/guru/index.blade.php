<x-layouts.admin title="index.blade">
<x-layouts.admin title="index.blade">






<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Daftar Guru</h1>
    <table class="table-auto w-full border">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">No</th>
                <th class="px-4 py-2">Nama</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- Looping data guru --}}
            @forelse($gurus as $guru)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $loop->iteration }}</td>
                <td class="px-4 py-2">{{ $guru->name }}</td>
                <td class="px-4 py-2">{{ $guru->email }}</td>
                <td class="px-4 py-2">
                    <a href="{{ route('admin.guru.edit', $guru->id) }}" class="text-blue-500">Edit</a>
                    <form action="{{ route('admin.guru.destroy', $guru->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center py-4">Belum ada data guru.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>








</x-layouts.admin>
</x-layouts.admin>

