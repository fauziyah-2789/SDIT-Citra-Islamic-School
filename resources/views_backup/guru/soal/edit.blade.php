<x-layouts.guru title="edit.blade">
<x-layouts.guru title="edit.blade">






<h1 class="text-2xl font-bold mb-6">Edit Soal</h1>

<form action="{{ route('guru.soal.update', $soal->id) }}" method="POST" class="space-y-4">
    @csrf @method('PUT')

    <div>
        <label class="block mb-1 font-semibold">Judul</label>
        <input type="text" name="judul" value="{{ $soal->judul }}" class="w-full border rounded-lg px-3 py-2" required>
    </div>

    <div>
        <label class="block mb-1 font-semibold">Soal</label>
        <textarea name="soal" class="w-full border rounded-lg px-3 py-2" rows="5" required>{{ $soal->soal }}</textarea>
    </div>

    <div>
        <label class="block mb-1 font-semibold">Jawaban Benar</label>
        <input type="text" name="jawaban_benar" value="{{ $soal->jawaban_benar }}" class="w-full border rounded-lg px-3 py-2" required>
    </div>

    <button type="submit" class="bg-[#B07D62] text-white px-4 py-2 rounded-lg hover:bg-[#8D6E63]">Update</button>
</form>








</x-layouts.guru>
</x-layouts.guru>
