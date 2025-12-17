@props([
    'trigger' => 'Menu'
])

<div x-data="{ open: false }" class="relative select-none">

    {{-- Tombol Trigger --}}
    <button
        @click="open = !open"
        @click.outside="open = false"
        class="flex items-center gap-2 px-4 py-2 text-gray-700 hover:text-emerald-700 transition"
    >
        {{ $trigger }}
        <svg class="w-4 h-4 transition" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor"
            stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    {{-- Dropdown Menu --}}
    <div
        x-show="open"
        x-transition
        class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-xl py-2 border border-gray-100 z-50"
    >
        {{ $slot }}
    </div>

</div>
