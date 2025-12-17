<?php if (isset($component)) { $__componentOriginal75514715de3adc636c5a315b0dcfaf7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75514715de3adc636c5a315b0dcfaf7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.layouts','data' => ['title' => 'Dashboard Admin']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.layouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Dashboard Admin']); ?>

    
    <?php
        $heroImage = asset('images/sekolah.jpg'); 
        $user = Auth::user(); // Asumsi user sudah login
        
        // Statistik Cepat (Gunakan data aktual dari Controller)
        $jumlahPendaftaranBaru = $jumlahPendaftaranBaru ?? 0; // Placeholder
        $jumlahPesanBelumDibaca = $jumlahPesanBelumDibaca ?? 0; // Placeholder
        $jumlahGuru = $jumlahGuru ?? 4; // Placeholder
        $jumlahSiswa = $jumlahSiswa ?? 25; // Placeholder

        // Daftar Lengkap Fitur Admin (Berdasarkan Controller/View yang Anda berikan)
        $quickAccessFeatures = [
            // KELOMPOK AKADEMIK
            ['name' => 'Data Siswa', 'route' => 'admin.siswa.index', 'icon' => 'user-group', 'color' => 'blue'],
            ['name' => 'Data Guru', 'route' => 'admin.guru.index', 'icon' => 'academic-cap', 'color' => 'indigo'],
            ['name' => 'Data Ortu', 'route' => 'admin.ortu.index', 'icon' => 'users', 'color' => 'purple'],
            ['name' => 'Kelas & Mapel', 'route' => 'admin.kelas.index', 'icon' => 'building-library', 'color' => 'pink'],
            ['name' => 'Materi Pembelajaran', 'route' => 'admin.materi.index', 'icon' => 'book-open', 'color' => 'red'],
            
            // ROUTE KOREKSI: Mengarahkan ke Soal jika ada, jika tidak, arahkan ke Materi. Asumsi ada resource 'soal'.
            ['name' => 'Soal Ujian', 'route' => 'admin.soal.index', 'icon' => 'clipboard-document-list', 'color' => 'orange'], 
            
            ['name' => 'Tugas Siswa', 'route' => 'admin.tugas.index', 'icon' => 'document-check', 'color' => 'amber'],
            ['name' => 'Nilai Siswa', 'route' => 'admin.nilai.index', 'icon' => 'star', 'color' => 'yellow'],
            ['name' => 'Jadwal Pelajaran', 'route' => 'admin.jadwal.index', 'icon' => 'calendar-days', 'color' => 'lime'],
            ['name' => 'Absensi', 'route' => 'admin.absensi.index', 'icon' => 'finger-print', 'color' => 'emerald'],

            // KELOMPOK PUBLIKASI & WEBSITE
            ['name' => 'Pendaftaran Siswa', 'route' => 'admin.pendaftaran.index', 'icon' => 'paper-airplane', 'color' => 'teal'],
            ['name' => 'Berita & Artikel', 'route' => 'admin.berita.index', 'icon' => 'newspaper', 'color' => 'cyan'],
            ['name' => 'Pengumuman', 'route' => 'admin.pengumuman.index', 'icon' => 'megaphone', 'color' => 'sky'],
            ['name' => 'Galeri Foto & Video', 'route' => 'admin.galeri.index', 'icon' => 'photo', 'color' => 'blue'],
            ['name' => 'Fasilitas Sekolah', 'route' => 'admin.fasilitas.index', 'icon' => 'wrench-screwdriver', 'color' => 'indigo'],
            ['name' => 'Prestasi Sekolah', 'route' => 'admin.prestasi.index', 'icon' => 'trophy', 'color' => 'purple'],
            
            // ROUTE KOREKSI: profil_sekolah -> profilsekolah (Konsisten)
            ['name' => 'Profil Sekolah', 'route' => 'admin.profilsekolah.index', 'icon' => 'building-office-2', 'color' => 'pink'], 
            
            // ROUTE KOREKSI: Menggunakan ekstrakurikuler (asumsi resource name)
            ['name' => 'Ekstrakurikuler', 'route' => 'admin.ekstrakurikuler.index', 'icon' => 'puzzle-piece', 'color' => 'red'],
            
            // ROUTE KOREKSI: Custom route 'admin.landing.hero'
            ['name' => 'Setting Landing Page', 'route' => 'admin.landing.hero', 'icon' => 'globe-alt', 'color' => 'orange'], 
            
            ['name' => 'Pesan Masuk (Kontak)', 'route' => 'admin.pesan.index', 'icon' => 'envelope', 'color' => 'amber'],
            
            // KELOMPOK MANAJEMEN SISTEM
            ['name' => 'Manajemen User', 'route' => 'admin.users.index', 'icon' => 'cog-8-tooth', 'color' => 'slate'],
            ['name' => 'Laporan & Statistik', 'route' => 'admin.laporan.index', 'icon' => 'chart-bar-square', 'color' => 'gray'], // Asumsi LaporanController
            ['name' => 'Forum Diskusi', 'route' => 'admin.forum.index', 'icon' => 'chat-bubble-left-right', 'color' => 'zinc'],
        ];
        
        // Mengelompokkan Fitur untuk Tampilan Grid yang Lebih Baik
        $chunkedFeatures = array_chunk($quickAccessFeatures, ceil(count($quickAccessFeatures) / 3));

    ?>

    
    <section class="relative overflow-hidden rounded-[2.5rem] mb-12 shadow-2xl" 
        style="background-image: url('<?php echo e($heroImage); ?>'); background-size: cover; background-position: center;">
        
        
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-700/80 via-sky-700/80 to-indigo-700/80"></div>

        <div class="relative z-10 px-6 sm:px-10 py-16 md:py-24 text-white">
            <div class="flex items-center mb-4">
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-chart-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-10 h-10 mr-4 text-emerald-300']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight">
                    Dashboard Administrasi
                </h1>
            </div>
            <p class="max-w-3xl text-white/90 text-lg mt-2">
                Selamat datang, **<?php echo e($user->name ?? 'Admin Sekolah'); ?>**. Kelola data akademik dan publikasi sekolah dengan mudah.
            </p>
        </div>
    </section>

    
    <h2 class="text-3xl font-extrabold mb-8 text-slate-800 border-l-4 border-emerald-500 pl-4">Ringkasan Utama</h2>
    <section class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
        
        <a href="<?php echo e(route('admin.pendaftaran.index')); ?>" class="flex flex-col justify-between rounded-2xl p-6 bg-white shadow-lg border-b-4 border-emerald-500 hover:shadow-xl hover:scale-[1.02] transition duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <p class="text-base font-semibold text-slate-500">Pendaftar Baru</p>
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-paper-airplane'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-7 h-7 text-emerald-500 group-hover:scale-110 transition']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
            </div>
            <p class="text-5xl font-extrabold text-emerald-600"><?php echo e($jumlahPendaftaranBaru); ?></p>
            <p class="text-sm text-slate-400 mt-2">Belum diproses</p>
        </a>

        
        <a href="<?php echo e(route('admin.pesan.index')); ?>" class="flex flex-col justify-between rounded-2xl p-6 bg-white shadow-lg border-b-4 border-sky-500 hover:shadow-xl hover:scale-[1.02] transition duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <p class="text-base font-semibold text-slate-500">Pesan Belum Dibaca</p>
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-envelope'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-7 h-7 text-sky-500 group-hover:scale-110 transition']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
            </div>
            <p class="text-5xl font-extrabold text-sky-600"><?php echo e($jumlahPesanBelumDibaca); ?></p>
            <p class="text-sm text-slate-400 mt-2">Perlu ditindaklanjuti</p>
        </a>

        
        <a href="<?php echo e(route('admin.guru.index')); ?>" class="flex flex-col justify-between rounded-2xl p-6 bg-white shadow-lg border-b-4 border-indigo-500 hover:shadow-xl hover:scale-[1.02] transition duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <p class="text-base font-semibold text-slate-500">Total Guru</p>
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-academic-cap'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-7 h-7 text-indigo-500 group-hover:scale-110 transition']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
            </div>
            <p class="text-5xl font-extrabold text-indigo-600"><?php echo e($jumlahGuru); ?></p>
            <p class="text-sm text-slate-400 mt-2">Staf akademik aktif</p>
        </a>

        
        <a href="<?php echo e(route('admin.siswa.index')); ?>" class="flex flex-col justify-between rounded-2xl p-6 bg-white shadow-lg border-b-4 border-pink-500 hover:shadow-xl hover:scale-[1.02] transition duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <p class="text-base font-semibold text-slate-500">Total Siswa</p>
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-user-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-7 h-7 text-pink-500 group-hover:scale-110 transition']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
            </div>
            <p class="text-5xl font-extrabold text-pink-600"><?php echo e($jumlahSiswa); ?></p>
            <p class="text-sm text-slate-400 mt-2">Tahun ajaran ini</p>
        </a>
    </section>

    
    <h2 class="text-3xl font-extrabold mb-8 text-slate-800 border-l-4 border-sky-500 pl-4">Akses Cepat Semua Fitur (<?php echo e(count($quickAccessFeatures)); ?>)</h2>
    
    
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-12">
        
        <?php $__currentLoopData = $quickAccessFeatures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $iconName = 'heroicon-o-' . $feature['icon'];
                $color = $feature['color'];
                $bgColor = "bg-{$color}-50";
                $borderColor = "border-{$color}-500";
                $textColor = "text-{$color}-600";
            ?>
            
            <a href="<?php echo e(route($feature['route'])); ?>" class="flex items-center rounded-xl p-4 shadow-md <?php echo e($bgColor); ?> border-l-4 <?php echo e($borderColor); ?> hover:shadow-lg transition duration-300 group">
                
                <div class="flex-shrink-0 w-10 h-10 rounded-full <?php echo e($bgColor); ?> flex items-center justify-center mr-4">
                    <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $iconName] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 '.e($textColor).' group-hover:scale-110 transition']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
                </div>
                
                
                <div>
                    <h3 class="font-semibold text-lg text-slate-800"><?php echo e($feature['name']); ?></h3>
                    
                </div>
                
                
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-arrow-small-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 ml-auto '.e($textColor).' opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </section>

    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        
        <div class="lg:col-span-2">
            <h2 class="text-3xl font-extrabold mb-8 text-slate-800 border-l-4 border-indigo-500 pl-4">Aktivitas & Pemberitahuan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-xl font-bold mb-5 text-indigo-600 flex items-center">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-megaphone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 mr-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?> Pengumuman Terbaru
                    </h3>
                    
                    <?php for($i = 1; $i <= 3; $i++): ?>
                        <div class="flex border-b pb-4 mb-4 last:border-b-0 last:pb-0 last:mb-0">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center font-bold text-lg">
                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-bell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold text-slate-800 line-clamp-1">Kegiatan Class Meeting Tahunan</h4>
                                <p class="text-sm text-slate-500 line-clamp-2">Harap semua guru dan siswa mempersiapkan diri untuk acara Class Meeting. Detail jadwal terlampir.</p>
                                <span class="text-xs text-indigo-400 mt-1 block"><?php echo e(13-$i); ?> Desember 2025</span>
                            </div>
                        </div>
                    <?php endfor; ?>
                    <a href="<?php echo e(route('admin.pengumuman.index')); ?>" class="mt-4 block text-center text-indigo-600 font-semibold hover:text-indigo-800 transition">Lihat Semua Pengumuman &rarr;</a>
                </div>

                
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-xl font-bold mb-5 text-sky-600 flex items-center">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-book-open'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 mr-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?> Materi Terakhir diunggah
                    </h3>
                    
                    <?php for($i = 1; $i <= 3; $i++): ?>
                        <div class="flex border-b pb-4 mb-4 last:border-b-0 last:pb-0 last:mb-0">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-sky-100 text-sky-600 flex items-center justify-center font-bold text-lg">
                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-document-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold text-slate-800 line-clamp-1">Materi <?php echo e($i); ?>: Perubahan Iklim</h4>
                                <p class="text-sm text-slate-500 line-clamp-2">Diunggah oleh **[Nama Guru Placeholder]** untuk kelas 5A.</p>
                                <span class="text-xs text-sky-400 mt-1 block"><?php echo e(13-$i); ?> Desember 2025</span>
                            </div>
                        </div>
                    <?php endfor; ?>
                    <a href="<?php echo e(route('admin.materi.index')); ?>" class="mt-4 block text-center text-sky-600 font-semibold hover:text-sky-800 transition">Kelola Materi &rarr;</a>
                </div>
            </div>
        </div>
        
        
        <div class="lg:col-span-1">
            <h2 class="text-3xl font-extrabold mb-8 text-slate-800 border-l-4 border-teal-500 pl-4">Status Publikasi Web</h2>
            <div class="bg-white rounded-2xl shadow-xl p-6 h-[400px] flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex items-center justify-between border-b pb-3">
                        <p class="font-semibold text-slate-700 flex items-center"><?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-globe-alt'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 mr-2 text-teal-500']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?> Landing Hero</p>
                        <span class="text-sm font-bold text-green-600 bg-green-100 px-3 py-1 rounded-full">Aktif</span>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3">
                        <p class="font-semibold text-slate-700 flex items-center"><?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-newspaper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 mr-2 text-teal-500']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?> Berita Terbit</p>
                        <span class="text-sm font-bold text-slate-600">14 Artikel</span>
                    </div>
                    <div class="flex items-center justify-between border-b pb-3">
                        <p class="font-semibold text-slate-700 flex items-center"><?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-photo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 mr-2 text-teal-500']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?> Galeri Foto</p>
                        <span class="text-sm font-bold text-slate-600">25 Album</span>
                    </div>
                    <div class="flex items-center justify-between pb-3">
                        <p class="font-semibold text-slate-700 flex items-center"><?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-paper-airplane'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 mr-2 text-teal-500']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?> Pendaftar Pending</p>
                        <span class="text-lg font-extrabold text-red-600"><?php echo e($jumlahPendaftaranBaru); ?></span>
                    </div>
                </div>
                
                
                <a href="<?php echo e(route('admin.landing.hero')); ?>" class="mt-auto block text-center text-teal-600 font-semibold hover:text-teal-800 transition py-3 rounded-lg border border-teal-200 bg-teal-50">Kelola Website Publik &rarr;</a>
            </div>
        </div>
        
    </div>
    


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal75514715de3adc636c5a315b0dcfaf7c)): ?>
<?php $attributes = $__attributesOriginal75514715de3adc636c5a315b0dcfaf7c; ?>
<?php unset($__attributesOriginal75514715de3adc636c5a315b0dcfaf7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal75514715de3adc636c5a315b0dcfaf7c)): ?>
<?php $component = $__componentOriginal75514715de3adc636c5a315b0dcfaf7c; ?>
<?php unset($__componentOriginal75514715de3adc636c5a315b0dcfaf7c); ?>
<?php endif; ?> <?php /**PATH C:\SDIT-Citra-Islamic-School\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>