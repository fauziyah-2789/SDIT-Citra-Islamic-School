<x-admin.layouts title="index.blade">
<x-admin.layouts title="index.blade">






<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Manajemen Pengguna</h1>
    <a href="{{ route('admin.users.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
        + Tambah Pengguna
    </a>
</div>

@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="overflow-x-auto bg-white shadow rounded-lg">
    <table class="min-w-full border border-gray-200">
        <thead class="bg-gray-100 text-gray-700">
            <tr>
                <th class="py-3 px-4 border">#</th>
                <th class="py-3 px-4 border text-left">Nama</th>
                <th class="py-3 px-4 border text-left">Email</th>
                <th class="py-3 px-4 border text-left">Role</th>
                <th class="py-3 px-4 border text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $index => $user)
                <tr class="border-t hover:bg-gray-50">
                    <td class="py-3 px-4 text-center">{{ $index + 1 }}</td>
                    <td class="py-3 px-4">{{ $user->name }}</td>
                    <td class="py-3 px-4">{{ $user->email }}</td>
                    <td class="py-3 px-4 capitalize">{{ $user->role }}</td>
                    <td class="py-3 px-4 text-center space-x-2">
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">Edit</a>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="py-4 text-center text-gray-500">Belum ada data pengguna.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>








</x-admin.layouts>
</x-admin.layouts>

