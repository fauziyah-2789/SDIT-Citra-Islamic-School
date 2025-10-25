<x-layouts.admin title="index.blade">
<x-layouts.admin title="index.blade">






<div class="p-6 bg-white rounded-xl shadow-lg">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">Daftar Akun Orang Tua</h2>

    @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-4 flex justify-between items-center">
        <a href="{{ route('admin.ortu.create') }}" 
           class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-xl shadow-md transition duration-150">
            + Tambah Orang Tua
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Ayah/Ibu</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email Akun</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Anak Terdaftar</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($ortus as $ortu)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $ortu->nama_ayah }} / {{ $ortu->nama_ibu }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $ortu->user->email }}</td>
                    <td class="px-6 py-4">
                        @foreach($ortu->siswa as $siswa)
                            <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 rounded-full">{{ $siswa->nama }}</span>
                        @endforeach
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">
                        <a href="{{ route('admin.ortu.edit', $ortu) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                        <form action="{{ route('admin.ortu.destroy', $ortu) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data orang tua ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-4 text-center text-gray-500">Tidak ada data Orang Tua yang ditemukan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $ortus->links() }}
    </div>
</div>








</x-layouts.admin>
</x-layouts.admin>
