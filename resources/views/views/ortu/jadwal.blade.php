<x-layouts.ortu title="jadwal.blade">
<x-layouts.ortu title="jadwal.blade">





<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Jadwal Anak</h1>
    <table class="table-auto w-full border">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Hari</th>
                <th class="px-4 py-2">Jam Mulai</th>
                <th class="px-4 py-2">Jam Selesai</th>
                <th class="px-4 py-2">Mata Pelajaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jadwals as $jadwal)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $jadwal->hari }}</td>
                <td class="px-4 py-2">{{ $jadwal->jam_mulai }}</td>
                <td class="px-4 py-2">{{ $jadwal->jam_selesai }}</td>
                <td class="px-4 py-2">{{ $jadwal->mapel }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>








</x-layouts.ortu>
</x-layouts.ortu>
