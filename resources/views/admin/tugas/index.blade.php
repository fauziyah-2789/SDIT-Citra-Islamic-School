<x-layouts.admin title="index.blade">
<x-layouts.admin title="index.blade">





<div class="container">
    <h1>Data Tugas</h1>

    <!-- Tombol tambah tugas -->
    <a href="{{ route('admin.tugas.create') }}" class="btn btn-primary">Tambah Tugas</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tenggat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tugas as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>{{ $item->deadline ?? $item->tenggat }}</td>
                <td>
                    <a href="{{ route('admin.tugas.show', $item->id) }}" class="btn btn-info">Detail</a>
                    <a href="{{ route('admin.tugas.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.tugas.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $tugas->links() }}
    </div>
</div>








</x-layouts.admin>
</x-layouts.admin>
