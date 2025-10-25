<x-layouts.admin title="show.blade">
<x-layouts.admin title="show.blade">






<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Detail Siswa</h1>

    <div class="bg-white shadow p-4 rounded">
        <p><strong>Nama:</strong> {{ $siswa->name }}</p>
        <p><strong>Email:</strong> {{ $siswa->email }}</p>
        <p><strong>Kelas:</strong> {{ $siswa->kelas->name ?? '-' }}</p>
    </div>

    <a href="{{ route('admin.siswa.index') }}" class="mt-4 inline-block text-blue-500">Kembali ke daftar siswa</a>
</div>








</x-layouts.admin>
</x-layouts.admin>
