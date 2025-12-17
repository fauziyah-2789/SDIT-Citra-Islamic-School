<x-admin.layouts title="edit.blade">

<div class="bg-white shadow rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-4">Edit Profil Sekolah</h2>

    <form action="{{ route('admin.profil_sekolah.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" value="{{ $profil->nama_sekolah }}" class="border rounded w-full p-2">
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Alamat</label>
            <input type="text" name="alamat" value="{{ $profil->alamat }}" class="border rounded w-full p-2">
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Telepon</label>
            <input type="text" name="telepon" value="{{ $profil->telepon }}" class="border rounded w-full p-2">
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Email</label>
            <input type="email" name="email" value="{{ $profil->email }}" class="border rounded w-full p-2">
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Motto</label>
            <input type="text" name="motto" value="{{ $profil->motto }}" class="border rounded w-full p-2">
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Deskripsi</label>
            <textarea name="deskripsi" class="border rounded w-full p-2">{{ $profil->deskripsi }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Visi</label>
            <textarea name="visi" class="border rounded w-full p-2">{{ $profil->visi }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Misi</label>
            <textarea name="misi" class="border rounded w-full p-2">{{ $profil->misi }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Logo</label>
            <input type="file" name="logo">
            @if($profil->logo)
                <img src="{{ asset('storage/'.$profil->logo) }}" class="h-24 mt-2">
            @endif
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Hero Image</label>
            <input type="file" name="foto_hero">
            @if($profil->foto_hero)
                <img src="{{ asset('storage/'.$profil->foto_hero) }}" class="h-40 mt-2 rounded-lg">
            @endif
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>

</x-admin.layouts>

