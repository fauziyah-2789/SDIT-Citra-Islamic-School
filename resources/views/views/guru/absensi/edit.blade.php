<x-layouts.guru title="edit.blade">
<x-layouts.guru title="edit.blade">





<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Absensi</h1>
    <form action="{{ route('guru.absensi.update', $absensi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block mb-1">Tanggal</label>
            <input type="date" name="tanggal" class="border px-2 py-1 w-full" value="{{ $absensi->tanggal }}">
        </div>
        <div class="mb-4">
            <label class="block mb-1">Status</label>
            <select name="status" class="border px-2 py-1 w-full">
                <option value="Hadir" {{ $absensi->status=='Hadir'?'selected':'' }}>Hadir</option>
                <option value="Izin" {{ $absensi->status=='Izin'?'selected':'' }}>Izin</option>
                <option value="Alpha" {{ $absensi->status=='Alpha'?'selected':'' }}>Alpha</option>
            </select>
        </div>
        <button class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>








</x-layouts.guru>
</x-layouts.guru>
