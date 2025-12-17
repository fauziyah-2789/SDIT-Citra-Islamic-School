<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(config('app.name', 'SDIT Citra Islamic School')); ?></title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { 
            font-family: 'Inter', sans-serif; 
            scroll-behavior: smooth; 
        }
    </style>
</head>

<body class="bg-gradient-to-br from-emerald-50 via-sky-50 to-white text-slate-800 antialiased">

    
    <?php echo $__env->make('components.public.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <main class="min-h-screen">
        <?php echo $__env->yieldContent('content'); ?> 
    </main>

    
    <?php echo $__env->make('components.public.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>
</html><?php /**PATH C:\SDIT-Citra-Islamic-School\resources\views/components/layouts/guest.blade.php ENDPATH**/ ?>