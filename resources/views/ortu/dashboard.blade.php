<x-layouts.ortu title="dashboard.blade">
<x-layouts.ortu title="dashboard.blade">







@php
    $quickStats = [
        ['title' => 'Nilai Terbaru', 'count' => $siswa->nilai ?? '0', 'icon' => 'check-circle', 'color' => 'bg-green-200 text-green-800', 'border_color' => 'green'],
        ['title' => 'Jadwal Minggu Ini', 'count' => $siswa->jadwal_count ?? '0', 'icon' => 'calendar', 'color' => 'bg-blue-200 text-blue-800', 'border_color' => 'blue'],
        ['title' => 'Absensi Anak', 'count' => $siswa->absensi ?? '0%', 'icon' => 'user-check', 'color' => 'bg-gray-200 text-gray-800', 'border_color' => 'gray'],
    ];

    $menuCards = [
        ['name' => 'Nilai', 'route' => 'ortu.nilai.index', 'icon' => 'check-circle', 'color' => 'bg-green-600'],
        ['name' => 'Jadwal', 'route' => 'ortu.jadwal.index', 'icon' => 'calendar', 'color' => 'bg-blue-600'],
        ['name' => 'Absensi', 'route' => 'ortu.absensi.index', 'icon' => 'user-check', 'color' => 'bg-gray-600'],
    ];

    function getSvgIcon($name, $class) {
        $icons = [
            'check-circle' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>',
            'calendar' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>',
            'user-check' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M5 21v-2a4 4 0 014-4h6a4 4 0 014 4v2M12 7a4 4 0 100-8 4 4 0 000 8z"/>'
        ];
        return "<svg class='$class' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='currentColor'>".$icons[$name]."</svg>";
    }
@endphp

{{-- Hero --}}
<section class="bg-gradient-to-r from-green-100 via-blue-50 to-green-50 rounded-xl p-6 mb-8 shadow-lg text-center md:text-left">
    <h2 class="text-3xl md:text-4xl font-bold text-emerald-700 mb-2">Halo, {{ Auth::user()->name }}!</h2>
    <p class="text-gray-700 md:text-lg">Selamat datang di dashboard orang tua. Pantau prestasi, jadwal, dan absensi anak Anda dengan mudah.</p>
</section>

{{-- Quick Stats --}}
<h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-gray-200">Ringkasan Anak</h3>
<div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-8">
    @foreach($quickStats as $stat)
    <div class="bg-blue-50 dark:bg-gray-800 rounded-xl p-4 shadow-lg border-b-4 border-{{ $stat['border_color'] }}-500 transform hover:shadow-xl transition duration-200">
        <div class="flex items-center justify-between">
            <p class="text-xs font-semibold uppercase tracking-wider text-gray-700 dark:text-gray-400">{{ $stat['title'] }}</p>
            <span class="p-1 rounded-full {{ $stat['color'] }}">
                {!! getSvgIcon($stat['icon'], 'w-5 h-5') !!}
            </span>
        </div>
        <p class="text-3xl font-extrabold text-gray-900 dark:text-white mt-2">{{ $stat['count'] }}</p>
    </div>
    @endforeach
</div>

{{-- Menu Fitur --}}
<h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-gray-200">Fitur Utama</h3>
<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 gap-4">
    @foreach($menuCards as $card)
    <a href="{{ route($card['route']) }}" class="{{ $card['color'] }} text-white rounded-xl shadow-lg p-5 flex flex-col items-center justify-center transform hover:scale-[1.05] hover:shadow-2xl transition duration-300 ease-in-out min-h-[120px] text-center">
        <div class="mb-2">
            {!! getSvgIcon($card['icon'], 'w-8 h-8') !!}
        </div>
        <span class="font-extrabold text-sm sm:text-md leading-snug">{{ $card['name'] }}</span>
    </a>
    @endforeach
</div>









</x-layouts.ortu>
</x-layouts.ortu>
