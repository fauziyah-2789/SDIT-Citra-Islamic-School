<x-admin.layouts title="edit.blade">
<x-admin.layouts title="edit.blade">






<h1 class="text-2xl font-bold mb-6 text-gray-800">Edit Pengguna</h1>

<div class="bg-white p-6 rounded-lg shadow">
    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Nama</label>
            <input type="text" name="name" value="{{ $user->name }}" class="w-full border-gray-300 rounded-lg shadow-sm" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Email</label>
            <input type="email" name="email" value="{{ $user->email }}" class="w-full border-gray-300 rounded-lg shadow-sm" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Password (kosongkan jika tidak diubah)</label>
            <input type="password" name="password" class="w-full border-gray-300 rounded-lg shadow-sm">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Role</label>
            <select name="role" class="w-full border-gray-300 rounded-lg shadow-sm">
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="guru" {{ $user->role == 'guru' ? 'selected' : '' }}>Guru</option>
                <option value="pegawai" {{ $user->role == 'pegawai' ? 'selected' : '' }}>Pegawai</option>
            </select>
        </div>

        <div class="flex justify-end">
            <a href="{{ route('admin.users.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg mr-2">Kembali</a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">Update</button>
        </div>
    </form>
</div>








</x-admin.layouts>
</x-admin.layouts>

