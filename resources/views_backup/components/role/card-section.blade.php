<section class="{{ $bg ?? 'bg-white/60 backdrop-blur' }} py-20">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-14">{{ $title }}</h2>

        <div class="grid {{ $grid ?? 'grid-cols-2 md:grid-cols-4' }} gap-6">
            @foreach($items as $item)
            <div class="bg-white rounded-2xl p-6 text-center shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 hover:scale-105">
                @if($item['icon'] ?? false)
                    <div class="mb-4 text-4xl text-emerald-500">{!! $item['icon'] !!}</div>
                @endif
                <h3 class="text-2xl font-bold text-emerald-600">{{ $item['title'] }}</h3>
                <p class="mt-2 text-slate-600">{{ $item['subtitle'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
