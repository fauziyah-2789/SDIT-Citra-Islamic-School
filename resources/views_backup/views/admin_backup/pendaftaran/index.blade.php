<x-layouts.admin title="index.blade">
<x-layouts.admin title="index.blade">






<div class="p-6 bg-white rounded-2xl shadow-md">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-emerald-600">Data Pendaftar Baru</h1>
    </div>

    <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
        <thead class="bg-gradient-to-r from-emerald-300 to-blue-300 text-white">
            <tr>
                <th class="py-3 px-4 text-left">No</th>
                <th class="py-3 px-4 text-left">Nama Lengkap</th>
                <th class="py-3 px-4 text-left">Email</th>
                <th class="py-3 px-4 text-left">Nomor HP</th>
                <th class="py-3 px-4 text-left">Status</th>
                <th class="py-3 px-4 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pendaftars as $index => $item)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4">{{ $index + 1 }}</td>
                    <td class="py-3 px-4 font-medium text-gray-700">{{ $item->nama }}</td>
                    <td class="py-3 px-4 text-gray-600">{{ $item->email }}</td>
                    <td class="py-3 px-4 text-gray-600">{{ $item->no_hp }}</td>
                    <td class="py-3 px-4">
                        <span class="px-3 py-1 rounded-full text-sm 
                            {{ $item->status == 'Diterima' ? 'bg-emerald-100 text-emerald-700' : 'bg-blue-100 text-blue-700' }}">
                            {{ $item->status }}
                        </span>
                    </td>
                    <td class="py-3 px-4 text-center">
                        <a href="{{ route('admin.pendaftaran.show', $item->id) }}" class="text-blue-500 hover:underline">Detail</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="py-6 text-center text-gray-500">Belum ada pendaftar baru.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>








</x-layouts.admin>
</x-layouts.admin>

