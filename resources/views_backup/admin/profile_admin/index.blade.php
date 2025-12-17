<x-admin.layouts title="index.blade">

<h1 class="text-2xl font-bold mb-6 text-gray-800">Profil Sekolah</h1>

@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white p-6 rounded-lg shadow-lg">
    <form action="{{ route('admin.profile_admin.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <label class="block text-gray-700 font-medium mb-1">Nama Sekolah</label>
                <input type="text" name="nama" value="{{ old('nama', $profile->nama ?? '') }}" class="w-full border-gray-300 rounded-lg shadow-sm" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email', $profile->email ?? '') }}" class="w-full border-gray-300 rounded-lg shadow-sm">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">No. Telepon</label>
                <input type="text" name="telepon" value="{{ old('telepon', $profile->telepon ?? '') }}" class="w-full border-gray-300 rounded-lg shadow-sm">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Alamat</label>
                <textarea name="alamat" rows="2" class="w-full border-gray-300 rounded-lg shadow-sm">{{ old('alamat', $profile->alamat ?? '') }}</textarea>
            </div>
        </div>

        <div class="mt-6">
            <label class="block text-gray-700 font-medium mb-1">Deskripsi Sekolah</label>
            <textarea name="deskripsi" rows="4" class="w-full border-gray-300 rounded-lg shadow-sm">{{ old('deskripsi', $profile->deskripsi ?? '') }}</textarea>
        </div>

        <div class="mt-6 grid md:grid-cols-2 gap-6">
            <div>
                <label class="block text-gray-700 font-medium mb-1">Visi</label>
                <textarea name="visi" rows="3" class="w-full border-gray-300 rounded-lg shadow-sm">{{ old('visi', $profile->visi ?? '') }}</textarea>
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-1">Misi</label>
                <textarea name="misi" rows="3" class="w-full border-gray-300 rounded-lg shadow-sm">{{ old('misi', $profile->misi ?? '') }}</textarea>
            </div>
        </div>

        <div class="mt-6">
            <label class="block text-gray-700 font-medium mb-2">Logo Sekolah</label>
            @if (!empty($profile->logo))
                <img src="{{ asset('storage/' . $profile->logo) }}" alt="Logo Sekolah" class="w-32 h-32 object-cover rounded mb-3 border">
            @endif
            <input type="file" name="logo" class="block w-full text-gray-700 border border-gray-300 rounded-lg shadow-sm p-2">
        </div>

        <div class="flex justify-end mt-8">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>

</x-admin.layouts>


