<x-layouts.guru title="show.blade">
<x-layouts.guru title="show.blade">






<h1 class="text-2xl font-bold mb-6">{{ $soal->judul }}</h1>
<p class="text-gray-700 mb-6">{{ $soal->soal }}</p>
<p class="font-semibold">Jawaban Benar: <span class="text-green-600">{{ $soal->jawaban_benar }}</span></p>

<a href="{{ route('guru.soal.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg mt-4 inline-block">Kembali</a>








</x-layouts.guru>
</x-layouts.guru>
