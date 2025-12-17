<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['guru']));

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

foreach (array_filter((['guru']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>


<div class="text-center p-4 bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
    
    <img src="<?php echo e($guru->foto ?? asset('images/default-guru.png')); ?>" 
         alt="<?php echo e($guru->nama); ?>" 
         class="w-24 h-24 object-cover rounded-full mx-auto mb-3 border-4 border-indigo-200">
    
    <h4 class="font-bold text-gray-900 line-clamp-1"><?php echo e($guru->nama); ?></h4>
    <p class="text-xs text-indigo-600 mt-0.5 line-clamp-1">
        <?php echo e($guru->jabatan ?? 'Tenaga Pendidik'); ?>

    </p>
</div><?php /**PATH C:\SDIT-Citra-Islamic-School\resources\views/components/public/guru-card.blade.php ENDPATH**/ ?>