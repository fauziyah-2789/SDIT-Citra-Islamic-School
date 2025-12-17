<x-guest.layouts><!-- Hero -->
<section class="bg-gradient-to-r from-emerald-300 to-blue-400 py-20 text-white text-center">
    <h1 class="text-4xl font-bold">Hubungi Kami</h1>
    <p class="text-white/90 mt-2">Kami siap membantu Anda mendapatkan informasi seputar SDIT Citra Islamic School</p>
</section>

<!-- Form -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="bg-white shadow-xl rounded-2xl p-8 md:p-12">
            <form action="{{ route('kontak.kirim') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label class="block font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" name="nama" class="w-full mt-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-400">
                </div>

                <div>
                    <label class="block font-medium text-gray-700">Email</label>
                    <input type="email" name="email" class="w-full mt-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-400">
                </div>

                <div>
                    <label class="block font-medium text-gray-700">Pesan</label>
                    <textarea name="pesan" rows="5" class="w-full mt-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-400"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-gradient-to-r from-emerald-400 to-blue-400 text-white px-8 py-3 rounded-xl font-semibold hover:opacity-90 transition">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>

        <div class="mt-16 text-center">
            <h3 class="text-2xl font-semibold text-emerald-600 mb-2">Alamat Sekolah</h3>
            <p class="text-gray-700">Jl. Pendidikan No. 45, Citra Raya, Tangerang</p>
            <p class="text-gray-700 mt-1">Email: info@sditcitra.sch.id | Telepon: (021) 1234 5678</p>
        </div>
    </div>
</section></x-guest.layouts>



