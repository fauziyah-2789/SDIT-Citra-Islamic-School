@props(['title', 'children', 'icon'])

<div x-data="{ open: false }" class="w-full">
    <button @click="open = ! open" class="w-full flex items-center justify-between px-4 py-3 hover:bg-white/20 rounded-xl transition">
        <span class="flex items-center gap-4">
            <x-heroicon-o-{{ $icon }} class="w-6 h-6"/>
            {{ $title }}
        </span>
        <x-heroicon-s-chevron-right class="w-5 h-5 transition" x-bind:class="{ 'rotate-90': open }" />
    </button>

    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 max-h-0"
         x-transition:enter-end="opacity-100 max-h-96"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 max-h-96"
         x-transition:leave-end="opacity-0 max-h-0"
         class="pl-8 pt-2 overflow-hidden" 
         style="display: none;">
        
        @foreach ($children as $child)
            <a href="{{ route($child['route']) }}" 
               class="flex items-center gap-3 px-4 py-2 text-base text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition">
                <x-heroicon-o-{{ $child['icon'] }} class="w-4 h-4"/>
                {{ $child['name'] }}
            </a>
        @endforeach
    </div>
</div>