<x-admin.layouts title="create.blade">
<x-admin.layouts title="create.blade">






<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Tambah Siswa</h1>

    <form action="{{ route('admin.siswa.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="block font-semibold mb-1">Nama Siswa</label>
            <input type="text" name="nama" class="border p-2 w-full rounded" required>
        </div>

        <div class="mb-3">
            <label class="block font-semibold mb-1">Kelas</label>
            <select name="kelas_id" class="border p-2 w-full rounded">
                <option value="">-- Pilih Kelas --</option>
                @foreach ($kelas as $k)
                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="block font-semibold mb-1">Orang Tua</label>
            <select name="ortu_id" class="border p-2 w-full rounded">
                <option value="">-- Pilih Orang Tua --</option>
                @foreach ($ortu as $o)
                    <option value="{{ $o->id }}">{{ $o->nama }}</option>
                @endforeach
            </select>
        </div>

        <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Simpan</button>
        <a href="{{ route('admin.siswa.index') }}" class="ml-2 text-gray-600 hover:underline">Batal</a>
    </form>
</div>








</x-admin.layouts>
</x-admin.layouts>

