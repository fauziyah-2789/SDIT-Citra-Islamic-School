<x-admin.layout title="Setting Hero Section">

    <div class="space-y-8">
        <h1 class="text-3xl font-bold text-slate-800">
            Pengaturan Hero Section
        </h1>
        <p class="text-slate-500">
            Kelola teks utama, tombol, dan gambar latar belakang untuk bagian Hero di halaman depan (Landing Page).
        </p>

        <div class="p-6 bg-white rounded-2xl shadow-xl">
            {{-- Form Pengaturan Hero Section Diletakkan Di Sini --}}
            <form action="{{ route('admin.landing.update.hero') }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Judul Utama (H1)</label>
                    <input type="text" name="hero_title" value="SDIT Citra Islamic School" 
                           class="w-full mt-1 px-4 py-2 border rounded-lg">
                </div>
                
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700">Deskripsi Singkat</label>
                    <textarea name="hero_description" rows="3"
                           class="w-full mt-1 px-4 py-2 border rounded-lg">Pusat pendidikan Islami yang modern dan unggul.</textarea>
                </div>
                
                <button type="submit" class="bg-emerald-600 text-white px-6 py-2 rounded-lg hover:bg-emerald-700 transition">
                    Simpan Perubahan
                </button>
            </form>
        </div>
    </div>

</x-admin.layout>
