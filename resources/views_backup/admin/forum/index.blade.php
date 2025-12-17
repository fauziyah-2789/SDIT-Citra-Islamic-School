<x-admin.layouts title="index.blade">
<x-admin.layouts title="index.blade">




<h2 class="text-xl font-bold mb-4">Daftar Forum</h2>
<a href="{{ route('admin.forum.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg mb-4 inline-block">Tambah Topik</a>
<table class="min-w-full bg-white">
    <thead>
        <tr>
            <th class="px-4 py-2 border">Judul</th>
            <th class="px-4 py-2 border">Tanggal</th>
            <th class="px-4 py-2 border">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($forums as $f)
        <tr>
            <td class="border px-4 py-2">{{ $f->title }}</td>
            <td class="border px-4 py-2">{{ $f->created_at->format('d M Y') }}</td>
            <td class="border px-4 py-2 flex gap-2">
                <a href="{{ route('admin.forum.edit',$f->id) }}" class="px-2 py-1 bg-yellow-400 text-white rounded">Edit</a>
                <form method="POST" action="{{ route('admin.forum.destroy',$f->id) }}">
                    @csrf @method('DELETE')
                    <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $forums->links() }}








</x-admin.layouts>
</x-admin.layouts>

