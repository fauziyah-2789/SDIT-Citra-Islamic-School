<x-admin.layouts title="Pengaturan Umum">

<h1 class="text-2xl font-bold mb-6 text-gray-800">Pengaturan Umum Website</h1>

@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white rounded-xl shadow-lg p-6 md:p-10">
    @if($settings)
        <form action="{{ route('admin.settings.update', $settings->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
    @else
        <form action="{{ route('admin.settings.store') }}" method="POST" enctype="multipart/form-data">
    @endif
        @csrf

        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Nama Sekolah</label>
                <input type="text" name="nama_sekolah" value="{{ old('nama_sekolah', $settings->nama_sekolah ?? '') }}"
                    class="w-full border-gray-300 rounded-lg shadow-sm" required>
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Email Kontak</label>
                <input type="email" name="email_kontak" value="{{ old('email_kontak', $settings->email_kontak ?? '') }}"
                    class="w-full border-gray-300 rounded-lg shadow-sm" required>
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">No. Telp</label>
                <input type="text" name="no_telp" value="{{ old('no_telp', $settings->no_telp ?? '') }}"
                    class="w-full border-gray-300 rounded-lg shadow-sm" required>
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Alamat</label>
                <textarea name="alamat" class="w-full border-gray-300 rounded-lg shadow-sm" rows="2">{{ old('alamat', $settings->alamat ?? '') }}</textarea>
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Tahun Akademik Aktif</label>
                <input type="text" name="tahun_akademik_aktif" value="{{ old('tahun_akademik_aktif', $settings->tahun_akademik_aktif ?? '') }}"
                    class="w-full border-gray-300 rounded-lg shadow-sm" required>
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-1">Logo Sekolah</label>
                @if (!empty($settings->logo_url))
                    <img src="{{ asset($settings->logo_url) }}" alt="Logo" class="w-32 h-32 object-cover rounded mb-3 border">
                @endif
                <input type="file" name="logo_url" class="block w-full border-gray-300 rounded-lg p-2 shadow-sm">
            </div>
        </div>

        <div class="flex justify-end mt-8">
            <button type="submit"
                class="bg-gradient-to-r from-emerald-400 to-blue-400 hover:opacity-90 text-white px-6 py-2 rounded-lg shadow-md font-semibold">
                Simpan Pengaturan
            </button>
        </div>
    </form>
</div>

</x-admin.layouts>
