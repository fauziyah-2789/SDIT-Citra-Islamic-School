<x-ortu.layouts title="Data Anak yang Dipantau">
    <div class="mb-10">
        <h1 class="text-4xl font-extrabold text-slate-800 border-l-4 border-indigo-500 pl-4">Data Anak</h1>
        <p class="text-slate-600 mt-2">Daftar semua siswa yang terhubung dengan akun Anda. Klik untuk melihat detail nilai, absensi, dan tugas.</p>
    </div>

    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse ($anak as $siswa)
            <div class="bg-white rounded-2xl shadow-xl p-6 transition duration-300 transform hover:scale-[1.03] hover:shadow-2xl border-t-8 border-indigo-500">
                <div class="flex items-center mb-6">
                    {{-- Ganti ini dengan gambar profil anak jika ada --}}
                    <img src="{{ $siswa->foto ?? asset('images/default_siswa.png') }}" alt="{{ $siswa->nama }}" class="w-16 h-16 rounded-full object-cover mr-4 border-4 border-indigo-100">
                    <div>
                        <h2 class="text-2xl font-bold text-slate-900">{{ $siswa->nama }}</h2>
                        <p class="text-indigo-600 font-semibold">{{ $siswa->kelas }}</p>
                    </div>
                </div>
                
                <ul class="space-y-3 text-slate-600 mb-6">
                    <li class="flex items-center"><x-heroicon-o-user-circle class="w-5 h-5 mr-3 text-indigo-400"/> Status: <span class="ml-auto font-medium text-slate-800">Aktif</span></li>
                    <li class="flex items-center"><x-heroicon-o-academic-cap class="w-5 h-5 mr-3 text-indigo-400"/> Sekolah: <span class="ml-auto font-medium text-slate-800">SDIT Citra Islamic School</span></li>
                </ul>
                
                <a href="{{ route('ortu.anak.show', $siswa->id) }}" class="block w-full text-center bg-indigo-600 text-white py-3 rounded-xl font-semibold hover:bg-indigo-700 transition">
                    Lihat Detail Lengkap &rarr;
                </a>
            </div>
        @empty
            <div class="md:col-span-3 bg-red-100 p-8 rounded-xl border-l-4 border-red-500">
                <p class="text-red-700 font-semibold">Tidak ada data anak yang terhubung dengan akun Anda saat ini.</p>
            </div>
        @endforelse
    </section>
</x-ortu.layouts>