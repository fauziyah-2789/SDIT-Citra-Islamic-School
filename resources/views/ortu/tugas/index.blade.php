<x-ortu.layouts title="Daftar Tugas Anak">
    <div class="mb-10">
        <h1 class="text-4xl font-extrabold text-slate-800 border-l-4 border-red-500 pl-4">Daftar Tugas Siswa</h1>
        <p class="text-slate-600 mt-2">Pantau tugas-tugas yang diberikan kepada anak Anda, tenggat waktu, dan status pengerjaannya.</p>
    </div>

    <div class="bg-white rounded-2xl shadow-xl p-8">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr class="text-left text-xs font-semibold uppercase tracking-wider text-gray-500 bg-gray-50">
                        <th class="px-6 py-3">Mata Pelajaran</th>
                        <th class="px-6 py-3">Judul Tugas</th>
                        <th class="px-6 py-3">Guru Pengampu</th>
                        <th class="px-6 py-3">Tenggat Waktu</th>
                        <th class="px-6 py-3 text-center">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    @forelse ($daftarTugas as $tugas)
                        <tr class="hover:bg-red-50 transition duration-150">
                            <td class="px-6 py-4 text-sm font-medium text-slate-900">{{ $tugas->mapel }}</td>
                            <td class="px-6 py-4 text-sm text-slate-700">{{ $tugas->judul }}</td>
                            <td class="px-6 py-4 text-sm text-slate-700">{{ $tugas->guru }}</td>
                            <td class="px-6 py-4 text-sm text-slate-700">
                                {{ \Carbon\Carbon::parse($tugas->deadline)->format('d F Y') }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                @if ($tugas->status == 'Selesai')
                                    <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-semibold bg-green-100 text-green-800">
                                        <x-heroicon-o-check-circle class="w-4 h-4 mr-1"/> {{ $tugas->status }}
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-semibold bg-red-100 text-red-800">
                                        <x-heroicon-o-clock class="w-4 h-4 mr-1"/> {{ $tugas->status }}
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-slate-500">
                                Tidak ada tugas aktif yang ditemukan saat ini.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-ortu.layouts>