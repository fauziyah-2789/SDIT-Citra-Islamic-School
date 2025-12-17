@props(['title', 'count' => '—', 'route' => '#', 'icon' => ''])

<a href="{{ $route }}" class="block p-5 bg-white border rounded-lg shadow hover:shadow-lg transition">
    <div class="flex items-center justify-between">
        <div>
            <h3 class="text-sm text-gray-500">{{ $title }}</h3>
            <p class="text-2xl font-bold">{{ $count }}</p>
        </div>
        <div class="text-emerald-500 w-10 h-10">
            {!! $icon !!}
        </div>
    </div>
</a>
