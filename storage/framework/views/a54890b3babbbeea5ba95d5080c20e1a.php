<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SDIT Citra</title>
    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/js/app.js']); ?> 
</head>
<body class="font-sans text-slate-800 min-h-screen overflow-x-hidden">

    
    <?php if (isset($component)) { $__componentOriginala5f0778b7952fba1b2aaf8a771fcd23b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5f0778b7952fba1b2aaf8a771fcd23b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.public.navbar','data' => ['isSolid' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('public.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['isSolid' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5f0778b7952fba1b2aaf8a771fcd23b)): ?>
<?php $attributes = $__attributesOriginala5f0778b7952fba1b2aaf8a771fcd23b; ?>
<?php unset($__attributesOriginala5f0778b7952fba1b2aaf8a771fcd23b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5f0778b7952fba1b2aaf8a771fcd23b)): ?>
<?php $component = $__componentOriginala5f0778b7952fba1b2aaf8a771fcd23b; ?>
<?php unset($__componentOriginala5f0778b7952fba1b2aaf8a771fcd23b); ?>
<?php endif; ?>

    
    
    <div class="flex min-h-screen items-center justify-center pt-20 pb-10 
                bg-gradient-to-br from-emerald-50 via-sky-50 to-indigo-50">
        
        
        <div class="w-full max-w-md p-6 bg-white rounded-xl shadow-2xl transition duration-300 
                    border-t-4 border-emerald-600 hover:shadow-xl">
            
            <div class="text-center mb-6">
                <img src="<?php echo e(asset('images/logo.png')); ?>" class="h-16 mx-auto mb-2" alt="Logo">
                <h2 class="text-2xl font-extrabold text-slate-800">Masuk ke Sistem</h2>
                <p class="text-sm text-slate-500">Akses untuk Admin, Guru, dan Orang Tua</p>
            </div>

            
            <?php if($errors->any()): ?>
                <div class="mb-4 p-3 text-sm text-red-700 bg-red-100 rounded-lg border border-red-300">
                    <ul class="list-disc pl-5">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>"
                            required autofocus autocomplete="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-150">
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-150">
                </div>

                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="mr-2 text-emerald-600 border-gray-300 rounded focus:ring-emerald-500">
                        <span class="text-sm text-gray-600">Ingat saya</span>
                    </label>
                    <?php if(Route::has('password.request')): ?>
                        <a href="<?php echo e(route('password.request')); ?>" class="text-emerald-600 text-sm hover:text-emerald-800 hover:underline font-medium">Lupa password?</a>
                    <?php endif; ?>
                </div>

                <button type="submit"
                        class="w-full bg-gradient-to-r from-emerald-600 to-sky-600 text-white font-bold py-2.5 rounded-xl hover:from-emerald-700 hover:to-sky-700 transition shadow-lg shadow-emerald-200/50">
                    MASUK
                </button>
            </form>
            
            <p class="text-center text-sm text-gray-500 mt-6">
                &copy; 2025 SDIT Citra Islamic School
            </p>
        </div>
    </div>
    
</body>
</html><?php /**PATH C:\SDIT-Citra-Islamic-School\resources\views/auth/login.blade.php ENDPATH**/ ?>