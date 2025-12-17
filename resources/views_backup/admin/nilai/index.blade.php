<x-admin.layouts title="index.blade">
<x-admin.layouts title="index.blade">






<div class="flex justify-between mb-4">
    <h1 class="text-2xl font-bold">Daftar Nilai</h1>
    <a href="{{ route('admin.nilai.create') }}" class="bg-[#2E8B57] text-white px-4 py-2 rounded hover:bg-[#3CB371]">Tambah Nilai</a>
</div>

<table class="w-full bg-white shadow rounded-lg">
    <thead class="bg-[#2E8B57] text-white">
        <tr>
            <th class="p-2">#</th>
            <th class="p-2">Siswa</th>
            <th class="p-2">Soal</th>
            <th class="p-2">Nilai</th>
            <th class="p-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($nilais as $nilai)
        <tr class="border-b">
            <td class="p-2">{{ $loop->iteration }}</td>
            <td class="p-2">{{ $nilai->siswa->name ?? '-' }}</td>
            <td class="p-2">{{ $nilai->soal->judul ?? '-' }}</td>
            <td class="p-2">{{ $nilai->nilai }}</td>
            <td class="p-2 space-x-1">
                <a href="{{ route('admin.nilai.edit', $nilai->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">Edit</a>
                <form action="{{ route('admin.nilai.destroy', $nilai->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $nilais->links() }}








</x-admin.layouts>
</x-admin.layouts>

