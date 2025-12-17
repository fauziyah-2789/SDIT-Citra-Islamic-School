

<?php $__env->startSection('content'); ?>

    
    
    
    <section id="hero" class="relative bg-gray-900 h-screen flex items-center justify-center overflow-hidden">
        
        
        <img src="<?php echo e($hero_image ?? asset('images/sekolah.jpg')); ?>" 
              alt="Gedung Sekolah SDIT Citra Islamic School" 
              class="absolute inset-0 h-full w-full object-cover opacity-100" 
              style="filter: brightness(0.5);">

        
        <?php if(isset($pengumuman) && $pengumuman->isNotEmpty()): ?>
        <div class="absolute top-0 w-full bg-red-600/90 text-white p-2 text-center z-30 shadow-lg animate-pulse">
            <a href="<?php echo e(route('public.pengumuman.show', $pengumuman->first()->slug)); ?>" class="inline-flex items-center space-x-2">
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-megaphone'); ?>
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
                <span class="font-semibold uppercase text-sm">PENGUMUMAN TERBARU:</span>
                <span class="text-sm font-normal truncate"><?php echo e($pengumuman->first()->judul); ?></span>
            </a>
        </div>
        <?php endif; ?>
        
        
        <div class="relative z-20 text-center text-white px-6 py-20">
            
            <h1 class="text-4xl sm:text-6xl font-bold tracking-tight mb-4 drop-shadow-xl leading-snug max-w-5xl mx-auto">
                <?php echo e($hero_title); ?>

            </h1>
            
            <p class="text-lg sm:text-xl font-normal mb-10 max-w-3xl mx-auto text-gray-200 drop-shadow-lg">
                <?php echo e($hero_sub); ?>

            </p>
            
            
            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6 justify-center">
                <a href="<?php echo e(route('pendaftaran')); ?>" 
                   class="bg-green-500 text-white hover:bg-green-600 font-semibold py-3 px-8 rounded-lg text-lg transition duration-300 shadow-lg shadow-green-500/50 inline-flex items-center space-x-3">
                    PPDB Online
                </a>
                
                <a href="<?php echo e(route('public.tentang')); ?>" 
                   class="bg-transparent border-2 border-white text-white hover:bg-white/10 font-semibold py-3 px-8 rounded-lg text-lg transition duration-300 shadow-lg inline-flex items-center space-x-3">
                    Profil Sekolah
                </a>
            </div>
        </div>
    </section>

    
    
    
    
    <section id="stats" class="py-16 bg-white border-t border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
             <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                 <?php if (isset($component)) { $__componentOriginale4416bb31595f098c6a640a82b1013a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale4416bb31595f098c6a640a82b1013a0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.statistic-item','data' => ['title' => 'Siswa Aktif','count' => ''.e($siswaCount).'','icon' => 'user-group','color' => 'text-indigo-600','bg' => 'bg-indigo-50','class' => 'font-semibold']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('statistic-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Siswa Aktif','count' => ''.e($siswaCount).'','icon' => 'user-group','color' => 'text-indigo-600','bg' => 'bg-indigo-50','class' => 'font-semibold']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale4416bb31595f098c6a640a82b1013a0)): ?>
<?php $attributes = $__attributesOriginale4416bb31595f098c6a640a82b1013a0; ?>
<?php unset($__attributesOriginale4416bb31595f098c6a640a82b1013a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale4416bb31595f098c6a640a82b1013a0)): ?>
<?php $component = $__componentOriginale4416bb31595f098c6a640a82b1013a0; ?>
<?php unset($__componentOriginale4416bb31595f098c6a640a82b1013a0); ?>
<?php endif; ?> 
                 <?php if (isset($component)) { $__componentOriginale4416bb31595f098c6a640a82b1013a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale4416bb31595f098c6a640a82b1013a0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.statistic-item','data' => ['title' => 'Guru Profesional','count' => ''.e($guruCount).'','icon' => 'academic-cap','color' => 'text-green-600','bg' => 'bg-green-50','class' => 'font-semibold']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('statistic-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Guru Profesional','count' => ''.e($guruCount).'','icon' => 'academic-cap','color' => 'text-green-600','bg' => 'bg-green-50','class' => 'font-semibold']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale4416bb31595f098c6a640a82b1013a0)): ?>
<?php $attributes = $__attributesOriginale4416bb31595f098c6a640a82b1013a0; ?>
<?php unset($__attributesOriginale4416bb31595f098c6a640a82b1013a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale4416bb31595f098c6a640a82b1013a0)): ?>
<?php $component = $__componentOriginale4416bb31595f098c6a640a82b1013a0; ?>
<?php unset($__componentOriginale4416bb31595f098c6a640a82b1013a0); ?>
<?php endif; ?>
                 <?php if (isset($component)) { $__componentOriginale4416bb31595f098c6a640a82b1013a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale4416bb31595f098c6a640a82b1013a0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.statistic-item','data' => ['title' => 'Kelas Tersedia','count' => ''.e($kelasCount).'','icon' => 'building-library','color' => 'text-yellow-600','bg' => 'bg-yellow-50','class' => 'font-semibold']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('statistic-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Kelas Tersedia','count' => ''.e($kelasCount).'','icon' => 'building-library','color' => 'text-yellow-600','bg' => 'bg-yellow-50','class' => 'font-semibold']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale4416bb31595f098c6a640a82b1013a0)): ?>
<?php $attributes = $__attributesOriginale4416bb31595f098c6a640a82b1013a0; ?>
<?php unset($__attributesOriginale4416bb31595f098c6a640a82b1013a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale4416bb31595f098c6a640a82b1013a0)): ?>
<?php $component = $__componentOriginale4416bb31595f098c6a640a82b1013a0; ?>
<?php unset($__componentOriginale4416bb31595f098c6a640a82b1013a0); ?>
<?php endif; ?>
                 <?php if (isset($component)) { $__componentOriginale4416bb31595f098c6a640a82b1013a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale4416bb31595f098c6a640a82b1013a0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.statistic-item','data' => ['title' => 'Ekstrakurikuler','count' => ''.e($ekskulCount).'','icon' => 'trophy','color' => 'text-pink-600','bg' => 'bg-pink-50','class' => 'font-semibold']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('statistic-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Ekstrakurikuler','count' => ''.e($ekskulCount).'','icon' => 'trophy','color' => 'text-pink-600','bg' => 'bg-pink-50','class' => 'font-semibold']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale4416bb31595f098c6a640a82b1013a0)): ?>
<?php $attributes = $__attributesOriginale4416bb31595f098c6a640a82b1013a0; ?>
<?php unset($__attributesOriginale4416bb31595f098c6a640a82b1013a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale4416bb31595f098c6a640a82b1013a0)): ?>
<?php $component = $__componentOriginale4416bb31595f098c6a640a82b1013a0; ?>
<?php unset($__componentOriginale4416bb31595f098c6a640a82b1013a0); ?>
<?php endif; ?>
             </div>
        </div>
    </section>

    
    
    
    
    <section id="about" class="py-24 bg-gray-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-16 items-center">
            
            <div class="order-2 md:order-1 relative">
                <div class="absolute -top-10 -left-10 w-32 h-32 bg-green-300 rounded-full mix-blend-multiply opacity-50 filter blur-xl animate-blob"></div>
                <div class="absolute -bottom-10 -right-10 w-48 h-48 bg-indigo-300 rounded-full mix-blend-multiply opacity-50 filter blur-xl animate-blob animation-delay-4000"></div>
                <img src="<?php echo e(asset('images/sekolah.jpg')); ?>" alt="Gedung Sekolah SDIT" class="relative rounded-3xl shadow-2xl transform rotate-[-2deg] hover:rotate-0 transition duration-500" />
            </div>

            <div class="order-1 md:order-2">
                <span class="text-sm font-semibold text-green-600 uppercase tracking-widest">Sekilas Pandang</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2 mb-6">
                    Mencetak Generasi Unggul Dunia Akhirat
                </h2>
                <p class="mt-4 text-lg text-gray-700 leading-relaxed">
                    <?php echo e($about_text ?? 'Sekolah kami berkomitmen untuk menciptakan lingkungan belajar yang inspiratif, menggabungkan kurikulum akademik unggulan dengan pendidikan karakter Islami yang kuat. Kami menyiapkan siswa agar tidak hanya cerdas secara intelektual, tetapi juga berakhlak mulia.'); ?>

                </p>
                <div class="mt-8 space-y-3">
                    <p class="flex items-start text-gray-800"><?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-check-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-green-500 flex-shrink-0 mr-3 mt-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?> Kurikulum Terpadu (Dinas & Agama)</p>
                    <p class="flex items-start text-gray-800"><?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-check-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-green-500 flex-shrink-0 mr-3 mt-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?> Program Hafalan Quran Intensif</p>
                    <p class="flex items-start text-gray-800"><?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-check-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-green-500 flex-shrink-0 mr-3 mt-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?> Pembiasaan Adab & Akhlak Mulia</p>
                </div>

                <a href="<?php echo e(route('public.tentang')); ?>" class="mt-8 inline-flex items-center space-x-2 text-indigo-600 hover:text-indigo-800 font-semibold transition duration-150 py-2 px-4 rounded-lg bg-indigo-100 hover:bg-indigo-200">
                    <span>Visi, Misi & Filosofi Selengkapnya</span> 
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-arrow-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
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
            </div>
        </div>
    </section>

    
    
    
    
    <section id="programs" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-gray-900 text-center mb-4">
                Program Inti & Keunggulan Kami
            </h2>
            <p class="text-center text-lg text-gray-600 mb-16 max-w-2xl mx-auto">Kami merancang setiap program untuk memaksimalkan potensi akademik, spiritual, dan karakter setiap siswa.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php $__currentLoopData = $programs->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php if (isset($component)) { $__componentOriginald9310f761ca3b505bd202bc791893352 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald9310f761ca3b505bd202bc791893352 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.program-card','data' => ['title' => ''.e($program->nama).'','description' => ''.e($program->deskripsi).'','icon' => ''.e($program->icon).'','class' => 'p-8 border border-gray-100 rounded-2xl shadow-lg hover:shadow-xl transition duration-500 transform hover:-translate-y-2 bg-white']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('program-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e($program->nama).'','description' => ''.e($program->deskripsi).'','icon' => ''.e($program->icon).'','class' => 'p-8 border border-gray-100 rounded-2xl shadow-lg hover:shadow-xl transition duration-500 transform hover:-translate-y-2 bg-white']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald9310f761ca3b505bd202bc791893352)): ?>
<?php $attributes = $__attributesOriginald9310f761ca3b505bd202bc791893352; ?>
<?php unset($__attributesOriginald9310f761ca3b505bd202bc791893352); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald9310f761ca3b505bd202bc791893352)): ?>
<?php $component = $__componentOriginald9310f761ca3b505bd202bc791893352; ?>
<?php unset($__componentOriginald9310f761ca3b505bd202bc791893352); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    
    
    
    
    
    <section id="interactive-feature" class="py-24 bg-gradient-to-r from-green-50/70 to-indigo-50/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-sm font-semibold text-green-600 uppercase tracking-widest">Pengembangan Holistik</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2">
                    Kenapa Memilih SDIT Citra Islamic School?
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                
                <div class="p-8 bg-white rounded-3xl shadow-2xl border-t-8 border-green-500 transition duration-500 transform hover:scale-[1.03]">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-hand-raised'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 text-green-500 mb-4']); ?>
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
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Pendidikan Karakter Islami</h3>
                    <p class="text-gray-600">Fokus pada pembentukan akhlak mulia dan adab sehari-hari sesuai tuntunan Al-Qur'an dan Sunnah.</p>
                </div>

                
                <div class="p-8 bg-white rounded-3xl shadow-2xl border-t-8 border-indigo-500 transition duration-500 transform hover:scale-[1.03]">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-book-open'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 text-indigo-500 mb-4']); ?>
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
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Literasi Sains & Teknologi</h3>
                    <p class="text-gray-600">Pembelajaran yang inspiratif dan berpusat pada siswa, membangun kemampuan berpikir kritis dan kreatif.</p>
                </div>

                
                <div class="p-8 bg-white rounded-3xl shadow-2xl border-t-8 border-sky-500 transition duration-500 transform hover:scale-[1.03]">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-home-modern'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 text-sky-500 mb-4']); ?>
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
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Lingkungan Sekolah Kekeluargaan</h3>
                    <p class="text-gray-600">Kerja sama erat antara guru, siswa, dan orang tua menciptakan ekosistem belajar yang suportif.</p>
                </div>
            </div>
        </div>
    </section>

 


<section id="detail-programs" class="py-24 bg-white" x-data="{ activeTab: 'unggulan' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-gray-900 text-center mb-4">
            Struktur Program: Fokus & Pembiasaan Siswa
        </h2>
        <p class="text-center text-lg text-gray-600 mb-16 max-w-2xl mx-auto">Informasi program kami disusun secara komprehensif, mencakup aspek harian, unggulan, dan agenda tahunan.</p>
        
        
        <div class="flex flex-wrap justify-center border-b border-gray-200 mb-10 space-x-2 md:space-x-4">
            
            <button @click="activeTab = 'unggulan'" :class="{'border-indigo-600 text-indigo-600 bg-indigo-50/50': activeTab === 'unggulan', 'border-transparent text-gray-500 hover:text-gray-700': activeTab !== 'unggulan'}"
                class="py-3 px-4 sm:px-6 text-base font-semibold border-b-2 transition duration-300 rounded-t-lg">
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-sparkles'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 mr-1 inline-block']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?> Program Unggulan
            </button>
            
            <button @click="activeTab = 'budaya'" :class="{'border-indigo-600 text-indigo-600 bg-indigo-50/50': activeTab === 'budaya', 'border-transparent text-gray-500 hover:text-gray-700': activeTab !== 'budaya'}"
                class="py-3 px-4 sm:px-6 text-base font-semibold border-b-2 transition duration-300 rounded-t-lg">
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-calendar-days'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 mr-1 inline-block']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?> Budaya & Pembiasaan
            </button>
            
            <button @click="activeTab = 'agenda_tw'" :class="{'border-indigo-600 text-indigo-600 bg-indigo-50/50': activeTab === 'agenda_tw', 'border-transparent text-gray-500 hover:text-gray-700': activeTab !== 'agenda_tw'}"
                class="py-3 px-4 sm:px-6 text-base font-semibold border-b-2 transition duration-300 rounded-t-lg">
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-clock'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 mr-1 inline-block']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?> Program Triwulan
            </button>

             <button @click="activeTab = 'agenda_thn'" :class="{'border-indigo-600 text-indigo-600 bg-indigo-50/50': activeTab === 'agenda_thn', 'border-transparent text-gray-500 hover:text-gray-700': activeTab !== 'agenda_thn'}"
                class="py-3 px-4 sm:px-6 text-base font-semibold border-b-2 transition duration-300 rounded-t-lg">
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-globe-alt'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 mr-1 inline-block']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?> Program Tahunan
            </button>
        </div>

        
        <div class="bg-gray-50 p-6 sm:p-10 rounded-xl shadow-inner border border-gray-100">
            
            
            <div x-show="activeTab === 'unggulan'" x-transition:enter.duration.500ms class="grid md:grid-cols-2 gap-x-12 gap-y-6">
                <h3 class="md:col-span-2 text-3xl font-bold text-gray-800 mb-4 border-b pb-2">Program Unggulan Sekolah</h3>
                <?php $__currentLoopData = $programUnggulan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class="flex items-start text-lg text-gray-700">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-check-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-green-500 flex-shrink-0 mr-3 mt-1']); ?>
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
                        <span><?php echo e($item); ?></span>
                    </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <div x-show="activeTab === 'budaya'" x-transition:enter.duration.500ms class="grid md:grid-cols-2 gap-x-12 gap-y-6">
                 <h3 class="md:col-span-2 text-3xl font-bold text-gray-800 mb-4 border-b pb-2">Budaya & Pembiasaan Harian</h3>
                <?php $__currentLoopData = $budayaSekolah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class="flex items-start text-lg text-gray-700">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-arrow-path-rounded-square'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-indigo-500 flex-shrink-0 mr-3 mt-1']); ?>
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
                        <span><?php echo e($item); ?></span>
                    </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <div x-show="activeTab === 'agenda_tw'" x-transition:enter.duration.500ms class="grid md:grid-cols-2 gap-x-12 gap-y-6">
                <h3 class="md:col-span-2 text-3xl font-bold text-gray-800 mb-4 border-b pb-2">Agenda Kegiatan Triwulan</h3>
                <?php $__currentLoopData = $programTriwulan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class="flex items-start text-lg text-gray-700">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-calendar-days'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-yellow-500 flex-shrink-0 mr-3 mt-1']); ?>
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
                        <span><?php echo e($item); ?></span>
                    </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            
            <div x-show="activeTab === 'agenda_thn'" x-transition:enter.duration.500ms class="grid md:grid-cols-2 gap-x-12 gap-y-6">
                <h3 class="md:col-span-2 text-3xl font-bold text-gray-800 mb-4 border-b pb-2">Agenda Kegiatan Tahunan</h3>
                <?php $__currentLoopData = $programTahunan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class="flex items-start text-lg text-gray-700">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-building-office-2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-red-500 flex-shrink-0 mr-3 mt-1']); ?>
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
                        <span><?php echo e($item); ?></span>
                    </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div> 
    </div>
</section>

    
    
    
    
    <section id="fasilitas" class="py-24 bg-gray-50/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
             <h2 class="text-4xl font-bold text-gray-900 text-center mb-4">
                Sarana & Prasarana Unggulan
             </h2>
             <p class="text-center text-lg text-gray-600 mb-16 max-w-2xl mx-auto">Kami menyediakan lingkungan belajar yang aman, nyaman, dan modern untuk mendukung perkembangan optimal siswa.</p>

             <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                 <?php $__currentLoopData = $fasilitasList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fasilitas_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="p-6 bg-white rounded-xl shadow-lg border border-gray-100 text-center transition duration-300 transform hover:bg-green-50 hover:shadow-xl">
                         <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-map-pin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-10 h-10 text-green-500 mx-auto mb-3']); ?>
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
                         <p class="font-semibold text-gray-800"><?php echo e($fasilitas_item); ?></p>
                     </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </div>
        </div>
    </section>

<?php
    if (isset($ekstrakurikuler) && $ekstrakurikuler->isNotEmpty()) {
        $dataEkskul = $ekstrakurikuler->take(6);
        $sumber = 'db';
    } elseif (isset($ekstrakulikulerList) && count($ekstrakulikulerList)) {
        $dataEkskul = collect(array_slice($ekstrakulikulerList, 0, 6));
        $sumber = 'statis';
    } else {
        $dataEkskul = collect();
        $sumber = null;
    }
?>



<?php if($dataEkskul->isNotEmpty()): ?>
<section id="ekskul" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <h2 class="text-4xl font-bold text-gray-900 text-center mb-4">
            Ekstrakurikuler Pilihan & Pembinaan Bakat
        </h2>
        <p class="text-center text-lg text-gray-600 mb-16 max-w-2xl mx-auto">
            Kembangkan minat dan bakat anak melalui kegiatan ekstrakurikuler yang menarik dan edukatif.
        </p>

        <?php if($sumber === 'statis'): ?>
        <div class="max-w-4xl mx-auto mb-8 p-4 bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 rounded-lg text-center">
            ⚠️ Data ekstrakurikuler masih menggunakan data statis.  
            Silakan lengkapi melalui menu Admin.
        </div>
        <?php endif; ?>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            <?php $__currentLoopData = $dataEkskul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ekskul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php
                    // nama
                    $nama = is_object($ekskul) ? $ekskul->nama : $ekskul;

                    // gambar prioritas:
                    // 1. galeri eskul
                    // 2. foto_cover
                    // 3. default
                    if (is_object($ekskul) && $ekskul->galeriEskul->isNotEmpty()) {
                        $gambar = asset('storage/' . $ekskul->galeriEskul->first()->gambar);
                    } elseif (is_object($ekskul) && $ekskul->foto_cover) {
                        $gambar = asset('storage/' . $ekskul->foto_cover);
                    } else {
                        $gambar = asset('images/ekskul-default.jpg');
                    }
                ?>

                <div class="group bg-gray-100 rounded-xl shadow-lg overflow-hidden transition hover:scale-[1.03] hover:shadow-xl">
                    <img src="<?php echo e($gambar); ?>"
                         alt="<?php echo e($nama); ?>"
                         class="w-full h-32 object-cover group-hover:opacity-80 transition">

                    <div class="p-3 text-center">
                        <h4 class="text-sm font-bold text-gray-800 truncate">
                            <?php echo e($nama); ?>

                        </h4>
                        <p class="text-xs font-semibold mt-1
                            <?php echo e($sumber === 'db' ? 'text-green-600' : 'text-gray-400'); ?>">
                            <?php echo e($sumber === 'db' ? 'Aktif' : 'Statis'); ?>

                        </p>
                    </div>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php if($sumber === 'db' && $ekskulCount > 6): ?>
        <div class="text-center mt-12">
            <a href="<?php echo e(route('public.ekskul.index')); ?>"
               class="inline-flex items-center gap-2 text-green-600 hover:text-green-800 font-semibold">
                <span>Lihat Semua Ekstrakurikuler</span>
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-arrow-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
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
        </div>
        <?php endif; ?>

    </div>
</section>
<?php endif; ?>



    
    
    
    
    <section id="news-and-prestas" class="py-24 bg-gray-50/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                 <h2 class="text-4xl font-bold text-gray-900">
                    Aktivitas & Penghargaan Terbaru
                 </h2>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                
                <div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-8 border-l-4 border-indigo-500 pl-4">Berita Terbaru</h3>
                    <div class="space-y-8">
                        <?php $__currentLoopData = $beritas->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if (isset($component)) { $__componentOriginal1722a7b3977857af595d18e3cce4eb57 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1722a7b3977857af595d18e3cce4eb57 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.public.news-preview','data' => ['berita' => $berita,'class' => 'bg-white p-4 rounded-xl border border-gray-100 hover:shadow-md transition duration-300']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('public.news-preview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['berita' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($berita),'class' => 'bg-white p-4 rounded-xl border border-gray-100 hover:shadow-md transition duration-300']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1722a7b3977857af595d18e3cce4eb57)): ?>
<?php $attributes = $__attributesOriginal1722a7b3977857af595d18e3cce4eb57; ?>
<?php unset($__attributesOriginal1722a7b3977857af595d18e3cce4eb57); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1722a7b3977857af595d18e3cce4eb57)): ?>
<?php $component = $__componentOriginal1722a7b3977857af595d18e3cce4eb57; ?>
<?php unset($__componentOriginal1722a7b3977857af595d18e3cce4eb57); ?>
<?php endif; ?> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="mt-8 text-left">
                        <a href="<?php echo e(route('public.berita.index')); ?>" class="text-lg text-indigo-600 hover:text-indigo-800 font-semibold inline-flex items-center space-x-2">
                            <span>Lihat Semua Berita</span> 
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-arrow-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
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
                    </div>
                </div>

                
                <div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-8 border-l-4 border-green-500 pl-4">Prestasi Siswa</h3>
                    <div class="space-y-6">
                        <?php $__currentLoopData = $prestasies->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prestasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if (isset($component)) { $__componentOriginal04a29e0a905c4ff52dbd8a733c711dc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal04a29e0a905c4ff52dbd8a733c711dc5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.public.prestasi-item','data' => ['prestasi' => $prestasi,'class' => 'bg-green-50/50 p-4 rounded-xl border border-green-100 hover:bg-green-100 transition duration-300']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('public.prestasi-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['prestasi' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($prestasi),'class' => 'bg-green-50/50 p-4 rounded-xl border border-green-100 hover:bg-green-100 transition duration-300']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal04a29e0a905c4ff52dbd8a733c711dc5)): ?>
<?php $attributes = $__attributesOriginal04a29e0a905c4ff52dbd8a733c711dc5; ?>
<?php unset($__attributesOriginal04a29e0a905c4ff52dbd8a733c711dc5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal04a29e0a905c4ff52dbd8a733c711dc5)): ?>
<?php $component = $__componentOriginal04a29e0a905c4ff52dbd8a733c711dc5; ?>
<?php unset($__componentOriginal04a29e0a905c4ff52dbd8a733c711dc5); ?>
<?php endif; ?> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="mt-8 text-left">
                        <a href="<?php echo e(route('public.prestasi.index')); ?>" class="text-lg text-green-600 hover:text-green-800 font-semibold inline-flex items-center space-x-2">
                            <span>Lihat Semua Prestasi</span> 
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-arrow-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
    
    
    <?php if($gurus->isNotEmpty()): ?>
    <section id="gurus" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-gray-900 text-center mb-4">
                Guru & Tenaga Pendidik Terbaik
            </h2>
             <p class="text-center text-lg text-gray-600 mb-16 max-w-2xl mx-auto">Tim pengajar kami berdedikasi dengan pemahaman mendalam tentang kurikulum Islami dan akademis.</p>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6">
                <?php $__currentLoopData = $gurus->take(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal771feac46d5b3031a0916bb592639040 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal771feac46d5b3031a0916bb592639040 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.public.guru-card','data' => ['guru' => $guru,'class' => 'rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition duration-300 transform hover:-translate-y-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('public.guru-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['guru' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($guru),'class' => 'rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition duration-300 transform hover:-translate-y-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal771feac46d5b3031a0916bb592639040)): ?>
<?php $attributes = $__attributesOriginal771feac46d5b3031a0916bb592639040; ?>
<?php unset($__attributesOriginal771feac46d5b3031a0916bb592639040); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal771feac46d5b3031a0916bb592639040)): ?>
<?php $component = $__componentOriginal771feac46d5b3031a0916bb592639040; ?>
<?php unset($__componentOriginal771feac46d5b3031a0916bb592639040); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="text-center mt-12">
                <a href="<?php echo e(route('public.guru.index')); ?>" class="text-lg text-indigo-600 hover:text-indigo-800 font-semibold inline-flex items-center space-x-2">
                    <span>Lihat Profil Semua Staff Pengajar</span> 
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-arrow-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
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
            </div>
        </div>
    </section>
    <?php endif; ?>

    
    
    
    
    <?php if($galeris->isNotEmpty()): ?>
    <section id="galeri" class="py-24 bg-gradient-to-br from-green-50/70 to-indigo-50/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-gray-900 text-center mb-4">
                Momen Kegiatan & Fasilitas
            </h2>
            <p class="text-center text-lg text-gray-600 mb-16 max-w-2xl mx-auto">Lihat langsung suasana belajar mengajar dan kegiatan siswa di SDIT Citra Islamic School.</p>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <?php $__currentLoopData = $galeris->take(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img src="<?php echo e($galeri->url_gambar); ?>" alt="<?php echo e($galeri->keterangan); ?>" 
                         class="w-full h-48 object-cover rounded-xl shadow-lg border-2 border-white 
                               transform hover:scale-[1.03] transition duration-500 cursor-zoom-in" />
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="text-center mt-12">
                <a href="<?php echo e(route('public.galeri.index')); ?>" class="text-lg text-indigo-600 hover:text-indigo-800 font-semibold inline-flex items-center space-x-2">
                    <span>Lihat Semua Galeri Foto</span> 
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-arrow-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
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
            </div>  
        </div>
    </section>
    <?php endif; ?>

    
    
    
    
    <section id="cta" class="py-20 bg-indigo-700">
        <div class="max-w-6xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-white sm:text-5xl mb-4">
                Jangan Tunda, Kuota Terbatas!
            </h2>
            <p class="text-indigo-200 text-xl mb-10 font-normal">
                Waktu pendaftaran segera berakhir. Amankan tempat untuk masa depan pendidikan anak Anda sekarang juga.
            </p>
            <a href="<?php echo e(route('pendaftaran')); ?>" 
               class="bg-green-400 text-indigo-900 hover:bg-green-500 font-bold py-4 px-12 rounded-full 
                      text-xl shadow-2xl transition duration-300 transform hover:scale-105 inline-flex items-center space-x-2">
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-paper-airplane'); ?>
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
<?php endif; ?> <span>Ajukan Pendaftaran Siswa Baru</span>
            </a>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.layouts.guest', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\SDIT-Citra-Islamic-School\resources\views/public/landing.blade.php ENDPATH**/ ?>