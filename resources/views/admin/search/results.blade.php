<x-admin-layout title="Hasil Pencarian">

<div class="space-y-4">
    <x-admin.breadcrumb title="Pencarian" />

    <div>
        <h2 class="text-2xl font-semibold">Hasil Pencarian</h2>
        <p class="text-sm text-gray-500">Kata kunci: <strong>{{ $query }}</strong></p>
    </div>

    @if($message)
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-3 text-yellow-800 rounded">
            {{ $message }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        @foreach($results as $group => $items)
        <div class="bg-white rounded-lg shadow-sm p-4">
            <h3 class="font-semibold capitalize">{{ $group }} ({{ $counts[$group] ?? 0 }})</h3>
            <ul class="mt-3 space-y-2">
                @forelse($items as $item)
                    <li class="flex justify-between items-center">
                        <div class="font-medium">
                            {{ $item->nama ?? $item->judul ?? $item->name }}
                        </div>
                        <a href="{{ url()->current() }}/../{{ $group }}/{{ $item->id }}/edit"
                           class="text-emerald-600 text-sm hover:underline">Edit</a>
                    </li>
                @empty
                    <li class="text-sm text-gray-500">Tidak ada data ditemukan.</li>
                @endforelse
            </ul>
        </div>
        @endforeach

    </div>
</div>



