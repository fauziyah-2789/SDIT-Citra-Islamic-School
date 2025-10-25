<x-layouts.admin title="register.blade">
<x-layouts.admin title="register.blade">






<div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-semibold mb-4 text-[#B07D62]">Tambah Akun Guru</h2>

    <form action="{{ route('admin.guru.register.store') }}" method="POST">
        @csrf

        <!-- Data User -->
        <div class="mb-4">
            <label class="block font-medium">Nama User (untuk login)</label>
            <input type="text" name="name" class="w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label class="block font-medium">Email</label>
            <input type="email" name="email" class="w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label class="block font-medium">Password</label>
            <input type="password" name="password" class="w-full border rounded p-2" required>
        </div>

        <!-- Data Guru -->
        <div class="mb-4">
            <label class="block font-medium">Nama Guru</label>
            <input type="text" name="nama" class="w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label class="block font-medium">Gelar</label>
            <input type="text" name="gelar" class="w-full border rounded p-2">
        </div>
        <div class="mb-4">
            <label class="block font-medium">Mata Pelajaran</label>
            <select name="mapel_id" class="w-full border rounded p-2" required>
                <option value="">-- Pilih Mapel --</option>
                @foreach(\App\Models\Mapel::all() as $mapel)
                    <option value="{{ $mapel->id }}">{{ $mapel->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="block font-medium">Kelas (Opsional)</label>
            <select name="kelas_id" class="w-full border rounded p-2">
                <option value="">-- Pilih Kelas --</option>
                @foreach(\App\Models\Kelas::all() as $kelas)
                    <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-[#B07D62] text-white px-4 py-2 rounded hover:bg-[#8D6E63]">
            Simpan
        </button>
    </form>
</div>








</x-layouts.admin>
</x-layouts.admin>
