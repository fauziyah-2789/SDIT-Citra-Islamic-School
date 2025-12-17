<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SDIT Citra</title>
    {{-- PASTIKAN PATH INI BENAR --}}
    @vite(['resources/css/app.css','resources/js/app.js']) 
</head>
<body class="font-sans text-slate-800 min-h-screen overflow-x-hidden">

    {{-- 1. NAVBAR SOLID (Pastikan file components/public/navbar.blade.php sudah ada) --}}
    <x-public.navbar :isSolid="true" />

    {{-- 2. KONTEN UTAMA: DIBUNGKUS DENGAN PT-20 DAN BACKGROUND --}}
    {{-- pt-20 berfungsi untuk memberi jarak dari fixed navbar di atas --}}
    <div class="flex min-h-screen items-center justify-center pt-20 pb-10 
                bg-gradient-to-br from-emerald-50 via-sky-50 to-indigo-50">
        
        {{-- CARD LOGIN --}}
        <div class="w-full max-w-md p-6 bg-white rounded-xl shadow-2xl transition duration-300 
                    border-t-4 border-emerald-600 hover:shadow-xl">
            
            <div class="text-center mb-6">
                <img src="{{ asset('images/logo.png') }}" class="h-16 mx-auto mb-2" alt="Logo">
                <h2 class="text-2xl font-extrabold text-slate-800">Masuk ke Sistem</h2>
                <p class="text-sm text-slate-500">Akses untuk Admin, Guru, dan Orang Tua</p>
            </div>

            {{-- Error message (Ambil dari $errors Blade) --}}
            @if ($errors->any())
                <div class="mb-4 p-3 text-sm text-red-700 bg-red-100 rounded-lg border border-red-300">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Form login --}}
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
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
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-emerald-600 text-sm hover:text-emerald-800 hover:underline font-medium">Lupa password?</a>
                    @endif
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
</html>