<x-layouts.guru title="edit.blade">
<x-layouts.guru title="edit.blade">






<h1 class="text-2xl font-bold mb-6">Edit Nilai</h1>

<form action="{{ route('guru.nilai.update', $nilai->id) }}" method="POST" class="space-y-4">
    @csrf @method('PUT')

    <div>
        <label class="block mb-1 font-semibold">Nama Siswa</label>
        <input type="text" name="siswa" value="{{ $nilai->siswa }}" class="w-full border rounded-lg px-3 py-2" required>
    </div>

    <div>
        <label class="block mb-1 font-semibold">Mata Pelajaran</label>
        <input type="text" name="mapel" value="{{ $nilai->mapel }}" class="w-full border rounded-lg px-3 py-2" required>
    </div>

    <div>
        <label class="block mb-1 font-semibold">Nilai</label>
        <input type="number" name="nilai" value="{{ $nilai->nilai }}" class="w-full border rounded-lg px-3 py-2" min="0" max="100" required>
    </div>

    <button type="submit" class="bg-[#B07D62] text-white px-4 py-2 rounded-lg hover:bg-[#8D6E63]">Update</button>
</form>








</x-layouts.guru>
</x-layouts.guru>
