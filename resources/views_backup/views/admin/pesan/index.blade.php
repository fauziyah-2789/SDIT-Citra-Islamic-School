<x-admin.layouts title="index.blade">
<x-admin.layouts title="index.blade">





<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Data Pesan</h1>
    <a href="{{ route('admin.pesan.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Pesan</a>
    <table class="table-auto w-full mt-4 border">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Guru</th>
                <th class="px-4 py-2">Judul</th>
                <th class="px-4 py-2">Isi</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pesans as $pesan)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $pesan->id }}</td>
                <td class="px-4 py-2">{{ $pesan->guru->name ?? '-' }}</td>
                <td class="px-4 py-2">{{ $pesan->judul }}</td>
                <td class="px-4 py-2">{{ Str::limit($pesan->isi, 50) }}</td>
                <td class="px-4 py-2">
                    <a href="{{ route('admin.pesan.edit', $pesan->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                    <form action="{{ route('admin.pesan.destroy', $pesan->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 text-white px-2 py-1 rounded" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $pesans->links() }}
    </div>
</div>








</x-admin.layouts>
</x-admin.layouts>

