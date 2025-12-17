<x-admin.layouts title="edit.blade">

<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Edit Profil</h1>

    <form action="{{ route('admin.profile_admin.update') }}" method="POST" class="bg-white rounded-lg shadow p-6 space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium">Nama</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full rounded-md p-2 border">
        </div>

        <div>
            <label class="block text-sm font-medium">Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full rounded-md p-2 border">
        </div>

        <div>
            <label class="block text-sm font-medium">Password (kosongkan jika tidak ingin mengganti)</label>
            <input type="password" name="password" class="w-full rounded-md p-2 border">
        </div>

        <div>
            <label class="block text-sm font-medium">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="w-full rounded-md p-2 border">
        </div>

        <div class="flex justify-between items-center">
            <a href="{{ route('admin.profile') }}" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">🔙 Kembali</a>
            <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">Simpan Perubahan</button>
        </div>
    </form>
</div>








</x-admin.layouts>


