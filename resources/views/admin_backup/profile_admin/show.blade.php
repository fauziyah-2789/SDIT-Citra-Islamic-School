<x-layouts.admin title="show.blade">


<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Profil Admin</h1>

    <div class="bg-white rounded-lg shadow p-6 space-y-4">
        <div><strong>Nama:</strong> {{ $user->name }}</div>
        <div><strong>Email:</strong> {{ $user->email }}</div>

        <div class="mt-4">
            <a href="{{ route('admin.profile_admin.edit') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Edit Profil</a>
            <a href="{{ url()->previous() }}" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 ml-2">🔙 Kembali</a>
        </div>
    </div>
</div>



</x-admin.layouts>


