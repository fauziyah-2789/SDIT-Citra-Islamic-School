<x-layouts.guest><section class="bg-gradient-to-br from-yellow-50 to-yellow-100 min-h-screen py-12">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-2xl p-8">
        <h2 class="text-3xl font-bold text-center text-yellow-700 mb-6">
            Formulir Pendaftaran Siswa Baru SD
        </h2>
        <p class="text-center text-gray-600 mb-8">
            Silakan isi data calon siswa dengan lengkap dan benar.
        </p>

        {{-- Pesan sukses atau error --}}
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                <ul class="list-disc ml-6">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Formulir --}}
        <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <h3 class="text-lg font-semibold text-gray-800 border-b pb-1 mb-4">Data Calon Siswa</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap Anak</label>
                    <input type="text" name="nama" id="nama" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500" required>
                </div>

                <div>
                    <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500" required>
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div>
                    <label for="tempat_lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500" required>
                </div>

                <div>
                    <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500" required>
                </div>

                <div class="md:col-span-2">
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat Lengkap</label>
                    <textarea name="alamat" id="alamat" rows="3" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500" required></textarea>
                </div>

                <div>
                    <label for="asal_tk" class="block text-sm font-medium text-gray-700">Asal TK (jika ada)</label>
                    <input type="text" name="asal_tk" id="asal_tk" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                </div>
            </div>

            <h3 class="text-lg font-semibold text-gray-800 border-b pb-1 mt-8 mb-4">Data Orang Tua / Wali</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="nama_ayah" class="block text-sm font-medium text-gray-700">Nama Ayah</label>
                    <input type="text" name="nama_ayah" id="nama_ayah" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                </div>

                <div>
                    <label for="nama_ibu" class="block text-sm font-medium text-gray-700">Nama Ibu</label>
                    <input type="text" name="nama_ibu" id="nama_ibu" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                </div>

                <div>
                    <label for="no_telp_ortu" class="block text-sm font-medium text-gray-700">Nomor Telepon Orang Tua</label>
                    <input type="text" name="no_telp_ortu" id="no_telp_ortu" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500" required>
                </div>

                <div>
                    <label for="pekerjaan_ortu" class="block text-sm font-medium text-gray-700">Pekerjaan Orang Tua</label>
                    <input type="text" name="pekerjaan_ortu" id="pekerjaan_ortu" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                </div>
            </div>

            <h3 class="text-lg font-semibold text-gray-800 border-b pb-1 mt-8 mb-4">Upload Dokumen</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="akta" class="block text-sm font-medium text-gray-700">Upload Akta Kelahiran (PDF/JPG)</label>
                    <input type="file" name="akta" id="akta" accept=".pdf,.jpg,.jpeg,.png" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                </div>

                <div>
                    <label for="kk" class="block text-sm font-medium text-gray-700">Upload Kartu Keluarga (PDF/JPG)</label>
                    <input type="file" name="kk" id="kk" accept=".pdf,.jpg,.jpeg,.png" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                </div>
            </div>

            <div class="text-center mt-8">
                <button type="submit" class="bg-yellow-600 text-white px-6 py-3 rounded-lg hover:bg-yellow-700 transition">
                    Kirim Pendaftaran
                </button>
            </div>
        </form>
    </div>
</section></x-layouts.guest>



