@props(['href' => '#'])

<a href="{{ $href }}"
   class="text-gray-700 hover:text-emerald-700 font-medium transition">
    {{ $slot }}
</a>
