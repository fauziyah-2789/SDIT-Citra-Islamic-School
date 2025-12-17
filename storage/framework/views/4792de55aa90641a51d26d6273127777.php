<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['isMobile' => false]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['isMobile' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php if(auth()->guard()->check()): ?>
    <?php
        // Asumsi data user di-load via Auth::user()
        $user = Auth::user(); 
        $roleName = $user->role->name ?? 'Admin';
    ?>

    <?php if($isMobile): ?>
        
        <div class="flex items-center gap-4">
            <img class="h-12 w-12 rounded-full object-cover border-2 border-white" src="<?php echo e(asset($user->foto_path ?? 'images/default-avatar.png')); ?>" alt="<?php echo e($user->name); ?>">
            <div>
                <div class="font-bold text-lg text-white"><?php echo e($user->name); ?></div>
                <div class="text-sm text-white/80"><?php echo e(ucfirst($roleName)); ?></div>
            </div>
        </div>
        <div class="mt-4 flex flex-col items-center gap-4 w-full">
            
            <a href="<?php echo e(route('admin.users.edit', ['user' => $user->id])); ?>" class="w-full text-center py-2 rounded-lg bg-white/10 hover:bg-white/20 text-white transition">Edit Profil</a>
            <form method="POST" action="<?php echo e(route('logout')); ?>" class="w-full">
                <?php echo csrf_field(); ?>
                <button type="submit" class="w-full text-center py-2 rounded-lg bg-red-600 hover:bg-red-700 text-white transition">Logout</button>
            </form>
        </div>

    <?php else: ?>
        
        <div x-data="{ open: false }" class="relative">
            
            <button @click="open = ! open" class="flex items-center focus:outline-none">
                <img class="h-10 w-10 rounded-full object-cover border-2 border-white/80 hover:border-emerald-300 transition" src="<?php echo e(asset($user->foto_path ?? 'images/default-avatar.png')); ?>" alt="<?php echo e($user->name); ?>">
            </button>

            
            <div x-show="open" @click.outside="open = false" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-75"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="absolute right-0 mt-3 w-48 rounded-lg shadow-xl py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" 
                 style="display: none;">
                
                <div class="px-4 py-2 text-sm text-slate-700 border-b">
                    <p class="font-bold"><?php echo e($user->name); ?></p>
                    <p class="text-xs text-slate-500"><?php echo e(ucfirst($roleName)); ?></p>
                </div>
                
                
                <a href="<?php echo e(route('admin.users.edit', ['user' => $user->id])); ?>" class="block px-4 py-2 text-sm text-slate-700 hover:bg-gray-100">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-user'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 inline mr-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?> Profil
                </a>
                
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="w-full text-left block px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-arrow-left-on-rectangle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 inline mr-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?> Logout
                    </button>
                </form>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?><?php /**PATH C:\SDIT-Citra-Islamic-School\resources\views/components/admin/nav-profile.blade.php ENDPATH**/ ?>