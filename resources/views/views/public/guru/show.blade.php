<x-guest.layouts><section class="max-w-4xl mx-auto px-6 py-10 bg-white rounded-xl shadow">
    <div class="text-center mb-8">
        @if($guru->foto)
            <img src="{{ asset('storage/'.$guru->foto) }}" class="mx-auto rounded-xl mb-4 h-56 w-56 object-cover">
        @else
            <img src="{{ asset('default/teacher.jpg') }}" class="mx-auto rounded-xl mb-4 h-56 w-56 object-cover">
        @endif
        <h2 class="text-3xl font-bold text-[#B07D62]">{{ $guru->nama }}</h2>
        <p class="text-gray-600">{{ $guru->jabatan }}</p>
        <p class="text-gray-500">{{ $guru->mata_pelajaran }}</p>
    </div>

    <div class="text-gray-700">
        <h3 class="text-xl font-semibold mb-2">Deskripsi</h3>
        <p>{{ $guru->deskripsi ?? 'Deskripsi belum tersedia.' }}</p>
    </div>

    <div class="mt-6 text-center">
        <a href="{{ route('guru.publik.index') }}" class="bg-[#D4A373] text-white px-6 py-2 rounded-lg shadow hover:bg-[#B07D62]">
            ← Kembali ke Daftar Guru
        </a>
    </div>
</section></x-guest.layouts>



