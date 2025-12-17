<?php
    // --- Konfigurasi Menu Admin ---
    
    // KELOMPOK KIRI: AKADEMIK & USER
    $menuItemsLeft = [
        ['name' => 'Dashboard', 'route' => 'admin.dashboard', 'icon' => 'home'],
        ['name' => 'Data Siswa', 'route' => 'admin.siswa.index', 'icon' => 'user'],
        ['name' => 'Data Guru', 'route' => 'admin.guru.index', 'icon' => 'academic-cap'],
        ['name' => 'Data Ortu', 'route' => 'admin.ortu.index', 'icon' => 'user-group'], // Ikon lebih tepat
        ['name' => 'Kelas & Mapel', 'route' => 'admin.kelas.index', 'icon' => 'building-library'],
        ['name' => 'Materi & Soal', 'route' => 'admin.materi.index', 'icon' => 'clipboard-document-list'], 
    ];

    // KELOMPOK KANAN: PUBLIKASI & PENGATURAN
    $menuItemsRight = [
        // --- SUB-KELOMPOK PUBLIKASI ---
        'Publikasi Web' => [
            ['name' => 'Setting Landing', 'route' => 'admin.landing.hero', 'icon' => 'wrench-screwdriver'],
            ['name' => 'Berita & Pengumuman', 'route' => 'admin.berita.index', 'icon' => 'newspaper'],
            ['name' => 'Galeri & Ekskul', 'route' => 'admin.galeri.index', 'icon' => 'photo'], 
            ['name' => 'Fasilitas & Prestasi', 'route' => 'admin.fasilitas.index', 'icon' => 'trophy'], 
        ],
        
        // --- SUB-KELOMPOK AKADEMIK LANJUT/LAPORAN ---
        'Laporan & Operasional' => [
            ['name' => 'Nilai & Absensi', 'route' => 'admin.nilai.index', 'icon' => 'star'], 
            ['name' => 'Jadwal', 'route' => 'admin.jadwal.index', 'icon' => 'calendar-days'],
            ['name' => 'Laporan Data', 'route' => 'admin.laporan.index', 'icon' => 'document-text'],
        ],

        // --- SUB-KELOMPOK PENGATURAN SISTEM ---
        'Pengaturan Sistem' => [
            ['name' => 'Manajemen User', 'route' => 'admin.users.index', 'icon' => 'cog-6-tooth'], // Diubah ke cog-6-tooth
            // ASUMSI: Route ini ada/akan dibuat
            ['name' => 'Role & Hak Akses', 'route' => 'admin.roles.index', 'icon' => 'shield-check'], 
            // ASUMSI: Route ini ada/akan dibuat
            ['name' => 'Tahun Akademik', 'route' => 'admin.tahun_akademik.index', 'icon' => 'clock'], 
            // ASUMSI: Route ini ada/akan dibuat
            ['name' => 'Setting Umum', 'route' => 'admin.settings.general', 'icon' => 'server'], 
        ],
    ];


    // --- Shortcut Icons (Tetap Sama) ---
    $shortcuts = [
        ['name' => 'Pendaftaran Baru', 'route' => 'admin.pendaftaran.index', 'icon' => 'bell', 'badge' => 3], 
        ['name' => 'Pesan Masuk', 'route' => 'admin.pesan.index', 'icon' => 'envelope', 'badge' => 5],
        ['name' => 'Pengaturan', 'route' => 'admin.settings.index', 'icon' => 'cog'],
    ];
?>


<nav id="admin-navbar" class="fixed top-0 left-0 w-full z-50 
                             bg-gradient-to-r from-emerald-700 to-sky-700 
                             shadow-xl">
    <div class="max-w-7xl mx-auto px-6 flex items-center justify-between h-20 relative">
        
        
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="flex flex-col justify-center z-50 leading-tight select-none">
            <div class="flex items-center gap-3">
                <img src="<?php echo e(asset('images/logo.png')); ?>" class="h-10" alt="Logo Admin">
                <span class="text-2xl font-extrabold text-white tracking-wide drop-shadow">
                    SDIT Admin
                </span>
            </div>
            <span class="text-sm text-white/90 ml-14 -mt-1 tracking-wide drop-shadow">
                Citra Islamic School
            </span>
        </a>

        
        <div class="hidden lg:block flex-grow"></div> 

        
        <div class="flex items-center gap-4 z-50">
            
            
            <?php $__currentLoopData = $shortcuts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shortcut): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route($shortcut['route'])); ?>" title="<?php echo e($shortcut['name']); ?>"
                    class="p-2 text-white hover:text-emerald-300 transition relative">
                    
                    <?php $iconName = 'heroicon-o-' . $shortcut['icon']; ?>
                    
                    <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $iconName] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-6 w-6']); ?>
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
                    
                    <?php if(isset($shortcut['badge']) && $shortcut['badge'] > 0): ?>
                        <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"><?php echo e($shortcut['badge']); ?></span>
                    <?php endif; ?>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <div class="hidden sm:block">
                
                <?php if (isset($component)) { $__componentOriginald7f7ee425bae6bab3de39d354783d454 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald7f7ee425bae6bab3de39d354783d454 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.nav-profile','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.nav-profile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald7f7ee425bae6bab3de39d354783d454)): ?>
<?php $attributes = $__attributesOriginald7f7ee425bae6bab3de39d354783d454; ?>
<?php unset($__attributesOriginald7f7ee425bae6bab3de39d354783d454); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald7f7ee425bae6bab3de39d354783d454)): ?>
<?php $component = $__componentOriginald7f7ee425bae6bab3de39d354783d454; ?>
<?php unset($__componentOriginald7f7ee425bae6bab3de39d354783d454); ?>
<?php endif; ?> 
            </div>
            
            
            <button id="admin-hamburger-btn" class="text-white hover:text-emerald-300 transition">
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-bars-3'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8']); ?>
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
            </button>
        </div>
    </div>

    
    <div id="admin-overlay-menu"
            class="fixed inset-0 bg-gradient-to-br from-emerald-700/90 to-sky-700/90 backdrop-blur-xl z-[90] transform -translate-y-full 
                    transition-transform duration-500 ease-in-out overflow-y-auto pt-24 pb-8"> 

        
        <button id="admin-close-menu" class="absolute top-6 right-6 text-white text-4xl font-bold z-[100]">&times;</button>
        
        
        <div class="max-w-7xl mx-auto h-full flex flex-col justify-start items-center text-white p-6">
            
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-16 gap-y-12 w-full max-w-6xl text-left">
                
                
                <nav class="flex flex-col gap-4 text-lg font-semibold">
                    <h3 class="text-2xl font-extrabold mb-3 text-emerald-100/90 border-b border-white/30 pb-2">Manajemen User & Akademik</h3>
                    <?php $__currentLoopData = $menuItemsLeft; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route($item['route'])); ?>" class="flex items-center gap-3 hover:text-emerald-300 transition">
                            <?php $iconName = 'heroicon-o-' . $item['icon']; ?>
                            <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $iconName] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-6 w-6']); ?>
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
                            <span><?php echo e($item['name']); ?></span>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </nav>

                
                <nav class="flex flex-col gap-4 text-lg font-semibold border-t sm:border-t-0 lg:border-l border-white/20 pt-8 lg:pt-0 lg:pl-10">
                    <h3 class="text-2xl font-extrabold mb-3 text-emerald-100/90 border-b border-white/30 pb-2">Konten & Publikasi Web</h3>
                    <?php $__currentLoopData = $menuItemsRight['Publikasi Web']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route($item['route'])); ?>" class="flex items-center gap-3 hover:text-emerald-300 transition">
                            <?php $iconName = 'heroicon-o-' . $item['icon']; ?>
                            <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $iconName] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-6 w-6']); ?>
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
                            <span><?php echo e($item['name']); ?></span>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    <h3 class="text-2xl font-extrabold mt-6 mb-3 text-emerald-100/90 border-b border-white/30 pb-2">Laporan & Operasional</h3>
                    <?php $__currentLoopData = $menuItemsRight['Laporan & Operasional']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route($item['route'])); ?>" class="flex items-center gap-3 hover:text-emerald-300 transition">
                            <?php $iconName = 'heroicon-o-' . $item['icon']; ?>
                            <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $iconName] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-6 w-6']); ?>
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
                            <span><?php echo e($item['name']); ?></span>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </nav>
                
                
                <nav class="flex flex-col gap-4 text-lg font-semibold border-t sm:border-t-0 sm:border-l border-white/20 pt-8 sm:pt-0 sm:pl-10">
                    <h3 class="text-2xl font-extrabold mb-3 text-emerald-100/90 border-b border-white/30 pb-2">Pengaturan Sistem</h3>
                    <?php $__currentLoopData = $menuItemsRight['Pengaturan Sistem']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route($item['route'])); ?>" class="flex items-center gap-3 hover:text-emerald-300 transition">
                            <?php $iconName = 'heroicon-o-' . $item['icon']; ?>
                            <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $iconName] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-6 w-6']); ?>
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
                            <span><?php echo e($item['name']); ?></span>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </nav>
            </div>
            
            
            <div class="mt-12 w-full max-w-6xl text-white/80 border-t border-white/20 pt-6 px-4">
                <?php if (isset($component)) { $__componentOriginald7f7ee425bae6bab3de39d354783d454 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald7f7ee425bae6bab3de39d354783d454 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.nav-profile','data' => ['isMobile' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.nav-profile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['isMobile' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald7f7ee425bae6bab3de39d354783d454)): ?>
<?php $attributes = $__attributesOriginald7f7ee425bae6bab3de39d354783d454; ?>
<?php unset($__attributesOriginald7f7ee425bae6bab3de39d354783d454); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald7f7ee425bae6bab3de39d354783d454)): ?>
<?php $component = $__componentOriginald7f7ee425bae6bab3de39d354783d454; ?>
<?php unset($__componentOriginald7f7ee425bae6bab3de39d354783d454); ?>
<?php endif; ?> 
            </div>
            
        </div>
    </div>
</nav>


<script>
document.addEventListener('DOMContentLoaded', () => {
    const hamburgerBtn = document.getElementById('admin-hamburger-btn');
    const overlayMenu = document.getElementById('admin-overlay-menu');
    const closeMenu = document.getElementById('admin-close-menu');

    /* Overlay open/close */
    const openOverlay = () => {
        overlayMenu.classList.replace('-translate-y-full','translate-y-0');
        document.body.classList.add('overflow-hidden'); 
    }
    const closeOverlayFunc = () => {
        overlayMenu.classList.replace('translate-y-0','-translate-y-full');
        document.body.classList.remove('overflow-hidden'); 
    }

    hamburgerBtn.addEventListener('click', openOverlay);
    closeMenu.addEventListener('click', closeOverlayFunc);
    overlayMenu.addEventListener('click', e => { if(e.target === overlayMenu) closeOverlayFunc(); });
    document.addEventListener('keydown', e => { if(e.key==='Escape' && overlayMenu.classList.contains('translate-y-0')) closeOverlayFunc(); });
    
    // Tutup overlay saat mengklik link
    const overlayLinks = overlayMenu.querySelectorAll('a');
    overlayLinks.forEach(link => {
        link.addEventListener('click', closeOverlayFunc);
    });
});
</script><?php /**PATH C:\SDIT-Citra-Islamic-School\resources\views/components/admin/navbar.blade.php ENDPATH**/ ?>