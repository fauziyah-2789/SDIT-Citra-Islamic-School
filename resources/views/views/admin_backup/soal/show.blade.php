<x-layouts.admin title="show.blade">
<x-layouts.admin title="show.blade">






<h1 class="text-2xl font-bold mb-4">{{ $soal->judul }}</h1>
<p class="mb-2"><strong>Deskripsi:</strong> {{ $soal->deskripsi }}</p>
<p class="mb-2"><strong>Tipe:</strong> {{ $soal->type }}</p>
<p class="mb-2"><strong>Jawaban:</strong> {{ $soal->jawaban }}</p>
<a href="{{ route('admin.soal.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Kembali</a>








</x-layouts.admin>
</x-layouts.admin>

