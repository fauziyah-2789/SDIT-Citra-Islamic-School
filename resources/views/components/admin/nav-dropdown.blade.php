@props(['title'])

<div x-data="{ open:false }" class="relative">
    <button @click="open = !open"
            class="flex items-center gap-1 text-gray-700 hover:text-emerald-700 font-medium">
        {{ $title }}
        <svg class="w-4 h-4" fill="none" stroke="currentColor">
            <path d="M6 9l6 6 6-6"/>
        </svg>
    </button>

    <div x-show="open"
         @click.outside="open = false"
         class="absolute mt-2 bg-white shadow-lg rounded-lg w-48 py-2">
        {{ $slot }}
    </div>
</div>
