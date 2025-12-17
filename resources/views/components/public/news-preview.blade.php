@props(['berita'])

{{-- Panggil: <x-public.news-preview :berita="$berita" /> --}}
<a href="{{ route('public.berita.show', $berita->slug) }}" class="flex space-x-4 p-4 border-b hover:bg-gray-100 transition duration-150 rounded-md">
    {{-- Gambar Preview (jika ada) --}}
    <img src="{{ $berita->url_gambar_thumbnail ?? asset('images/default-news.jpg') }}" alt="{{ $berita->judul }}" 
         class="w-20 h-20 object-cover rounded-md flex-shrink-0">
    
    <div class="flex-grow">
        <p class="text-sm font-medium text-indigo-600">
            {{ $berita->created_at->isoFormat('D MMMM Y') }}
        </p>
        <h4 class="text-lg font-semibold text-gray-800 hover:text-indigo-700 transition duration-150 line-clamp-2">
            {{ $berita->judul }}
        </h4>
        <p class="text-sm text-gray-500 line-clamp-1">
            {{ $berita->ringkasan ?? Str::limit(strip_tags($berita->konten), 50) }}
        </p>
    </div>
</a>