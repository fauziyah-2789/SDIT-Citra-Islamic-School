@props(['title', 'children'])

<div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative group">
    {{-- Dropdown Trigger --}}
    <button class="flex items-center gap-1 hover:text-emerald-300 transition focus:outline-none">
        {{ $title }}
        <x-heroicon-s-chevron-down class="w-4 h-4 ml-1 -mt-0.5 group-hover:rotate-180 transition duration-200" />
    </button>

    {{-- Dropdown Menu --}}
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-2"
         class="absolute z-50 mt-4 w-56 rounded-xl shadow-xl bg-white text-slate-800 p-2 transform -translate-x-1/2 left-1/2" 
         style="display: none;">
        
        @foreach ($children as $child)
            <a href="{{ route($child['route']) }}" 
               class="flex items-center gap-3 px-4 py-2 text-base rounded-lg hover:bg-indigo-50 hover:text-indigo-600 transition duration-150">
                <x-heroicon-o-{{ $child['icon'] }} class="w-5 h-5"/>
                {{ $child['name'] }}
            </a>
        @endforeach
    </div>
</div>