<x-admin.layouts title="index.blade">
<x-admin.layouts title="index.blade">





    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Data Absensi</h1>
        <a href="{{ route('absensi.create') }}" class="btn btn-primary mb-3">Tambah Absensi</a>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Siswa</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($absensis as $absensi)
                    <tr>
                        <td>{{ $absensi->id }}</td>
                        <td>{{ $absensi->nama_siswa }}</td>
                        <td>{{ $absensi->tanggal }}</td>
                        <td>{{ $absensi->status }}</td>
                        <td>
                            <a href="{{ route('absensi.show', $absensi->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('absensi.edit', $absensi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('absensi.destroy', $absensi->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>









</x-admin.layouts>
</x-admin.layouts>

