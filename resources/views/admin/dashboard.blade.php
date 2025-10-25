<x-layouts.admin title="dashboard.blade">
<x-layouts.admin title="dashboard.blade">





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
                ];
            @endphp

            @foreach ($menus as $menu)
                <a href="{{ Route::has($menu[2]) ? route($menu[2]) : '#' }}"
                   class="p-6 rounded-xl shadow hover:scale-105 transition flex flex-col items-center justify-center {{ $menu[3] }}"
                   data-aos="fade-up">
                   <div class="text-3xl mb-2">
                       <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M19 21H5a2 2 0 01-2-2V7a2 2 0 012-2h4l2-2h4l2 2h4a2 2 0 012 2v12a2 2 0 01-2 2z"/>
                       </svg>
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
                plugins: { legend: { labels: { color: '#111' } } },
                scales: { x: { ticks: { color: '#111' } }, y: { ticks: { color: '#111' } } }
            }
        });
    </script>









</x-layouts.admin>
</x-layouts.admin>
