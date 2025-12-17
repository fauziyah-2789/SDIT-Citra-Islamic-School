
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'count', 'icon']));

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

foreach (array_filter((['title', 'count', 'icon']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="p-6 bg-indigo-50 rounded-lg shadow-md flex flex-col items-center justify-center h-full">
    
    <?php
        // Contoh icon mapping sederhana (idealnya menggunakan Blade Component atau Font Awesome)
        $svgPath = match($icon) {
            'users' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20v-2a3 3 0 00-5.356-1.857M10 20v-2a3 3 0 00-5.356-1.857M14 10a4 4 0 11-8 0 4 4 0 018 0z"></path>', // Example Users SVG Path
            'user-tie' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14c3.417 0 6.167 1.488 7 4h-14c.833-2.512 3.583-4 7-4zM21 12H3"></path>', // Example User Tie/Professional
            'school' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v6"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 18l.5-4.5M15 18l-.5-4.5"></path>', // Example School
            'basketball-ball' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22a10 10 0 100-20 10 10 0 000 20z"></path><path d="M12 12a3 3 0 100-6 3 3 0 000 6zM12 12a3 3 0 110 6 3 3 0 010-6z"></path>', // Example Ball/Activity
            default => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>',
        };
    ?>

    <svg class="w-10 h-10 text-indigo-600 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <?php echo $svgPath; ?>

    </svg>

    <p class="text-4xl font-extrabold text-gray-900 mb-1"><?php echo e($count); ?>+</p>
    <p class="text-sm font-medium text-indigo-700 uppercase tracking-wider"><?php echo e($title); ?></p>
</div><?php /**PATH C:\SDIT-Citra-Islamic-School\resources\views/components/statistic-item.blade.php ENDPATH**/ ?>