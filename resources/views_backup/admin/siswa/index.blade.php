<x-admin.layouts title="index.blade">
<x-admin.layouts title="index.blade">






<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Data Siswa</h1>

    <a href="{{ route('admin.siswa.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-3 inline-block hover:bg-blue-600">
        + Tambah Siswa
    </a>

    <table class="min-w-full bg-white border rounded-lg shadow">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="px-4 py-2 border">No</th>
                <th class="px-4 py-2 border">Nama</th>
                <th class="px-4 py-2 border">Kelas</th>
                <th class="px-4 py-2 border">Orang Tua</th>
                <th class="px-4 py-2 border text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($siswas as $index => $siswa)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border">{{ $index + 1 }}</td>
                    <td class="px-4 py-2 border">{{ $siswa->nama }}</td>
                    <td class="px-4 py-2 border">{{ $siswa->kelas->nama ?? '-' }}</td>
                    <td class="px-4 py-2 border">{{ $siswa->ortu->nama ?? '-' }}</td>
                    <td class="px-4 py-2 border text-center">
                        <a href="{{ route('admin.siswa.show', $siswa->id) }}" class="text-blue-500 hover:underline">Lihat</a> |
                        <a href="{{ route('admin.siswa.edit', $siswa->id) }}" class="text-green-500 hover:underline">Edit</a> |
                        <form action="{{ route('admin.siswa.destroy', $siswa->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Yakin hapus siswa ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-4">Belum ada data siswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>








</x-admin.layouts>
</x-admin.layouts>

