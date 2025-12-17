<x-admin.layouts title="index.blade">
<x-admin.layouts title="index.blade">






<div class="flex justify-between mb-4">
    <h1 class="text-2xl font-bold">Daftar Materi</h1>
    <a href="{{ route('admin.materi.create') }}" class="bg-[#D4A373] text-white px-4 py-2 rounded hover:bg-[#B07D62]">Tambah Materi</a>
</div>

<table class="w-full bg-white shadow rounded-lg">
    <thead class="bg-[#D4A373] text-white">
        <tr>
            <th class="p-2">#</th>
            <th class="p-2">Judul</th>
            <th class="p-2">Deskripsi</th>
            <th class="p-2">File</th>
            <th class="p-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($materis as $materi)
        <tr class="border-b">
            <td class="p-2">{{ $loop->iteration }}</td>
            <td class="p-2">{{ $materi->judul }}</td>
            <td class="p-2">{{ $materi->deskripsi }}</td>
            <td class="p-2">
                @if($materi->file)
                    <a href="{{ asset('storage/' . $materi->file) }}" target="_blank" class="text-blue-500 underline">Lihat File</a>
                @else
                    -
                @endif
            </td>
            <td class="p-2 space-x-1">
                <a href="{{ route('admin.materi.edit', $materi->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">Edit</a>
                <form action="{{ route('admin.materi.destroy', $materi->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $materis->links() }}








</x-admin.layouts>
</x-admin.layouts>

