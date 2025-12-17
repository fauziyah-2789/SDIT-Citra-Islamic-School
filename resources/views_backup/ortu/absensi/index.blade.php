<x-layouts.ortu title="index.blade">
<x-layouts.ortu title="index.blade">






<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold text-gray-700 mb-4">Data Absensi Anak</h1>

    @if (isset($message))
        <p class="text-gray-600">{{ $message }}</p>
    @else
        <p class="text-gray-600 mb-4">Nama Anak: <span class="font-semibold">{{ $siswa->nama }}</span></p>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left">Tanggal</th>
                        <th class="px-4 py-2 text-left">Status</th>
                        <th class="px-4 py-2 text-left">Keterangan</th>
                        <th class="px-4 py-2 text-center">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($absensis as $absen)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $absen->tanggal }}</td>
                            <td class="px-4 py-2">
                                <span class="px-2 py-1 rounded text-white
                                    {{ $absen->status == 'Hadir' ? 'bg-green-500' :
                                       ($absen->status == 'Izin' ? 'bg-yellow-500' : 'bg-red-500') }}">
                                    {{ $absen->status }}
                                </span>
                            </td>
                            <td class="px-4 py-2">{{ $absen->keterangan ?? '-' }}</td>
                            <td class="px-4 py-2 text-center">
                                <a href="{{ route('ortu.absensi.show', $absen->id) }}" class="text-blue-600 hover:underline">Lihat</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-4 text-gray-500">Belum ada data absensi.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    @endif
</div>








</x-layouts.ortu>
</x-layouts.ortu>
