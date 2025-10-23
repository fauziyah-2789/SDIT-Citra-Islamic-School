@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="space-y-10">

    <!-- Statistik Cepat -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        @php
            $stats = [
                ['Guru', 25, 'bg-green-100 dark:bg-green-800 text-green-700 dark:text-green-200'],
                ['Berita', 48, 'bg-purple-100 dark:bg-purple-800 text-purple-700 dark:text-purple-200'],
                ['Galeri', 120, 'bg-orange-100 dark:bg-orange-800 text-orange-700 dark:text-orange-200'],
                ['Orang Tua', 280, 'bg-blue-100 dark:bg-blue-800 text-blue-700 dark:text-blue-200'],
            ];
        @endphp
        @foreach($stats as $stat)
        <div class="p-6 rounded-xl shadow flex flex-col justify-center {{ $stat[2] }}" data-aos="zoom-in">
            <p class="text-sm font-medium">{{ $stat[0] }}</p>
            <h2 class="text-2xl font-bold">{{ $stat[1] }}</h2>
        </div>
        @endforeach
    </div>

    <!-- Grafik Statistik -->
    <div class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow" data-aos="fade-up">
        <canvas id="lineChart"></canvas>
    </div>

    <!-- Menu Grid -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        @php
            $menus = [
                ['Berita','M','admin.berita.index','bg-purple-100 dark:bg-purple-800 text-purple-700 dark:text-purple-200'],
                ['Galeri','M','admin.galeri.index','bg-orange-100 dark:bg-orange-800 text-orange-700 dark:text-orange-200'],
                ['Guru','M','admin.guru.index','bg-green-100 dark:bg-green-800 text-green-700 dark:text-green-200'],
                ['Orang Tua','M','admin.ortu.index','bg-blue-100 dark:bg-blue-800 text-blue-700 dark:text-blue-200'],
                ['Pengumuman','S','#','bg-yellow-100 dark:bg-yellow-800 text-yellow-700 dark:text-yellow-200'],
                ['Kelas','S','#','bg-indigo-100 dark:bg-indigo-800 text-indigo-700 dark:text-indigo-200'],
                ['Mapel','S','#','bg-teal-100 dark:bg-teal-800 text-teal-700 dark:text-teal-200'],
                ['Kegiatan','S','#','bg-pink-100 dark:bg-pink-800 text-pink-700 dark:text-pink-200'],
                ['Prestasi','S','#','bg-cyan-100 dark:bg-cyan-800 text-cyan-700 dark:text-cyan-200'],
                ['Profil Sekolah','S','#','bg-lime-100 dark:bg-lime-800 text-lime-700 dark:text-lime-200'],
                ['Visi & Misi','S','#','bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200'],
                ['Kontak','S','#','bg-rose-100 dark:bg-rose-800 text-rose-700 dark:text-rose-200'],
                ['Slider','S','#','bg-fuchsia-100 dark:bg-fuchsia-800 text-fuchsia-700 dark:text-fuchsia-200'],
                ['Pengaturan Akun','S','#','bg-stone-100 dark:bg-stone-800 text-stone-700 dark:text-stone-200'],
            ];
        @endphp
        @foreach ($menus as $menu)
            <a href="{{ Route::has($menu[2]) ? route($menu[2]) : '#' }}"
               class="p-6 rounded-xl shadow hover:scale-105 transition flex flex-col items-center justify-center {{ $menu[3] }}"
               data-aos="fade-up">
               <div class="text-3xl mb-2">
                   @if($menu[1] == 'M')
                   <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M19 21H5a2 2 0 01-2-2V7a2 2 0 012-2h4l2-2h4l2 2h4a2 2 0 012 2v12a2 2 0 01-2 2z"/>
                   </svg>
                   @else
                   <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M3 7v4a1 1 0 001 1h4l2-2h4l2 2h4a1 1 0 001-1V7a1 1 0 00-1-1h-4l-2 2h-4l-2-2H4a1 1 0 00-1 1z"/>
                   </svg>
                   @endif
               </div>
               <p class="font-semibold text-center">{{ $menu[0] }}</p>
            </a>
        @endforeach
    </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('lineChart');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan','Feb','Mar','Apr','Mei','Jun'],
            datasets: [
                { label: 'Guru', data: [20, 21, 22, 23, 24, 25], borderColor: '#10B981', backgroundColor: 'rgba(16,185,129,0.2)', tension: 0.4, fill: true },
                { label: 'Berita', data: [5, 8, 6, 10, 7, 12], borderColor: '#8B5CF6', backgroundColor: 'rgba(139,92,246,0.2)', tension: 0.4, fill: true },
                { label: 'Galeri', data: [10, 15, 12, 18, 20, 22], borderColor: '#F97316', backgroundColor: 'rgba(249,115,22,0.2)', tension: 0.4, fill: true },
                { label: 'Orang Tua', data: [200, 220, 230, 250, 260, 280], borderColor: '#3B82F6', backgroundColor: 'rgba(59,130,246,0.2)', tension: 0.4, fill: true },
            ]
        },
        options: { 
            responsive: true,
            plugins: { 
                legend: { labels: { color: '#111' } }
            },
            scales: {
                x: { ticks: { color: '#111' } },
                y: { ticks: { color: '#111' } }
            }
        }
    });
</script>
@endsection
