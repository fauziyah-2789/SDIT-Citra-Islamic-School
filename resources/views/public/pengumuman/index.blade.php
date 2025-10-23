@extends('layouts.guest')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-center mb-10 text-gray-800">Pengumuman Sekolah</h1>

    @if($pengumumans->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($pengumumans as $item)
                <div class="bg-white shadow-lg rounded-2xl overflow-hidden transition-transform transform hover:-translate-y-1 hover:shadow-xl">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $item->judul }}</h2>
                        <p class="text-gray-500 text-sm mb-3">{{ $item->created_at->format('d M Y') }}</p>
                        <p class="text-gray-600 mb-4">{{ Str::limit(strip_tags($item->isi), 120) }}</p>
                        <a href="{{ route('pengumuman.show', $item->slug) }}" class="text-blue-600 hover:text-blue-800 font-medium">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-10">
            {{ $pengumumans->links() }}
        </div>
    @else
        <p class="text-center text-gray-600">Belum ada pengumuman yang tersedia.</p>
    @endif
</div>
@endsection
