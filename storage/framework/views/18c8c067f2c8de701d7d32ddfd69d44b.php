<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' => 'Admin']));

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

foreach (array_filter((['title' => 'Admin']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?> · Admin SDIT Citra</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/js/app.js']); ?>
</head>

<body class="font-sans text-slate-800 bg-gradient-to-br from-emerald-50 via-sky-50 to-indigo-50 min-h-screen overflow-x-hidden">

    <?php if (isset($component)) { $__componentOriginalf818c67b6eb448edb731318e48f2e69b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf818c67b6eb448edb731318e48f2e69b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf818c67b6eb448edb731318e48f2e69b)): ?>
<?php $attributes = $__attributesOriginalf818c67b6eb448edb731318e48f2e69b; ?>
<?php unset($__attributesOriginalf818c67b6eb448edb731318e48f2e69b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf818c67b6eb448edb731318e48f2e69b)): ?>
<?php $component = $__componentOriginalf818c67b6eb448edb731318e48f2e69b; ?>
<?php unset($__componentOriginalf818c67b6eb448edb731318e48f2e69b); ?>
<?php endif; ?>

    <main class="pt-28 px-4 md:px-8 max-w-7xl mx-auto">
        <?php echo e($slot); ?>

    </main>

</body>
</html>
<?php /**PATH C:\SDIT-Citra-Islamic-School\resources\views/components/admin/layouts.blade.php ENDPATH**/ ?>