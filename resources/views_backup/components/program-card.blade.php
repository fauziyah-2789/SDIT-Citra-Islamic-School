@props(['title', 'description', 'icon', 'class' => ''])

<div {{ $attributes->merge(['class' => "p-6 md:p-8 bg-white rounded-3xl shadow-xl border border-gray-100 transition duration-500 transform hover:shadow-2xl hover:-translate-y-2 group " . $class]) }}>
    
    {{-- Area Icon --}}
    <div class="mb-4">
        {{-- Asumsi Anda menggunakan Blade Icon Component (contoh: x-icons.book-open) --}}
        {{-- Ganti warna icon sesuai keinginan, contoh: text-indigo-600 --}}
        <x-icons.{{ $icon }} class="w-12 h-12 text-indigo-600 group-hover:text-pink-600 transition duration-300"/>
    </div>

    {{-- Judul Program --}}
    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3 group-hover:text-indigo-700 transition duration-300">
        {{ $title }}
    </h3>

    {{-- Deskripsi Program --}}
    <p class="text-base text-gray-600 leading-relaxed">
        {{ Str::limit($description, 120) }}
    </p>

    {{-- Link Detail (Opsional) --}}
    <a href="#" class="mt-4 inline-flex items-center space-x-2 text-sm font-semibold text-indigo-500 group-hover:text-pink-500 transition duration-300">
        <span>Pelajari Lebih Lanjut</span>
        <svg class="w-3 h-3 transform group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
    </a>
</div>