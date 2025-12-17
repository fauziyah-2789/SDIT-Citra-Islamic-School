<x-layouts.admin title="show.blade">
<x-layouts.admin title="show.blade">






<div class="p-6 bg-white rounded shadow max-w-3xl mx-auto">
    <h2 class="text-2xl font-bold mb-4">Detail Pesan Kontak</h2>

    <p><strong>Nama:</strong> {{ $kontak->nama }}</p>
    <p><strong>Email:</strong> {{ $kontak->email }}</p>
    <p><strong>Subjek:</strong> {{ $kontak->subjek }}</p>
    <p><strong>Pesan:</strong></p>
    <p class="bg-gray-100 p-4 rounded">{{ $kontak->pesan }}</p>
    <p class="mt-2 text-gray-500 text-sm">Dikirim: {{ $kontak->created_at->format('d-m-Y H:i') }}</p>

    <a href="{{ route('admin.kontak.index') }}" class="mt-4 inline-block text-[#D4A373] hover:underline">← Kembali</a>
</div>








</x-layouts.admin>
</x-layouts.admin>

