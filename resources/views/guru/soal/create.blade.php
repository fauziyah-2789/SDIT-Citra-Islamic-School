<x-layouts.guru title="create.blade">
<x-layouts.guru title="create.blade">






<h1 class="text-2xl font-bold mb-6">Tambah Soal</h1>

<form action="{{ route('guru.soal.store') }}" method="POST" class="space-y-4">
    @csrf
    <div>
        <label class="block mb-1 font-semibold">Judul</label>
        <input type="text" name="judul" class="w-full border rounded-lg px-3 py-2" required>
    </div>

    <div>
        <label class="block mb-1 font-semibold">Soal</label>
        <textarea name="soal" class="w-full border rounded-lg px-3 py-2" rows="5" required></textarea>
    </div>

    <div>
        <label class="block mb-1 font-semibold">Jawaban Benar</label>
        <input type="text" name="jawaban_benar" class="w-full border rounded-lg px-3 py-2" required>
    </div>

    <button type="submit" class="bg-[#B07D62] text-white px-4 py-2 rounded-lg hover:bg-[#8D6E63]">Simpan</button>
</form>








</x-layouts.guru>
</x-layouts.guru>
