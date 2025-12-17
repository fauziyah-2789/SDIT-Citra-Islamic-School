@php
    $segments = request()->segments();
    $breadcrumbItems = [];
    $path = '';
    foreach ($segments as $segment) {
        $path .= '/' . $segment;
        $label = ucwords(str_replace('-', ' ', $segment));
        $breadcrumbItems[] = ['label' => $label, 'url' => url($path)];
    }
@endphp

<nav class="text-sm text-gray-600 mb-4" aria-label="Breadcrumb">
    <ol class="flex items-center space-x-2">
        <li>
            <a href="{{ url('/admin/dashboard') }}" class="text-gray-600 hover:text-emerald-700">Dashboard</a>
            @if(count($breadcrumbItems) > 0)
                <svg class="w-4 h-4 mx-2 text-gray-400 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            @endif
        </li>

        @foreach($breadcrumbItems as $item)
            <li class="flex items-center">
                @if(!$loop->last)
                    <a href="{{ $item['url'] }}" class="text-gray-600 hover:text-emerald-700">{{ $item['label'] }}</a>
                @else
                    <span class="text-gray-800 font-semibold">{{ $item['label'] }}</span>
                @endif
                @if(!$loop->last)
                    <svg class="w-4 h-4 mx-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
