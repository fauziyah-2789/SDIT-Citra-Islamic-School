<!DOCTYPE html>
<html lang="id" x-data="{ darkMode: false, scrolled: false, notifOpen: false, profileOpen: false }"
      x-init="
        darkMode = JSON.parse(localStorage.getItem('darkMode')) || false;
        $watch('darkMode', val => localStorage.setItem('darkMode', JSON.stringify(val)));
        window.addEventListener('scroll', () => { scrolled = window.scrollY > 10 });
      "
      x-bind:class="{ 'dark': darkMode }"
      class="h-full font-sans">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin')</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script>
        document.addEventListener('DOMContentLoaded', () => { AOS.init({ duration: 700, once: true }); });
    </script>
</head>

<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100">

<!-- Navbar -->
<nav class="fixed w-full z-50 transition-all duration-500"
     :class="scrolled ? 'backdrop-blur bg-white/70 dark:bg-gray-800/70 shadow' : 'bg-transparent'">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">

        <!-- Logo + Nama Sekolah -->
        <div class="flex items-center gap-2">
            <img src="/images/logo-sekolah.png" class="w-8 h-8 rounded-full" alt="Logo Sekolah">
            <span class="font-bold text-lg">SD Citra</span>
        </div>

        <!-- Shortcut Menu -->
        <div class="hidden md:flex gap-4">
            <a href="{{ route('admin.berita.index') }}" class="flex items-center gap-1 px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21H5a2 2 0 01-2-2V7a2 2 0 012-2h4l2-2h4l2 2h4a2 2 0 012 2v12a2 2 0 01-2 2z"/>
                </svg>
                <span class="text-sm font-medium">Berita</span>
            </a>
            <a href="{{ route('admin.galeri.index') }}" class="flex items-center gap-1 px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v4a1 1 0 001 1h4l2-2h4l2 2h4a1 1 0 001-1V7a1 1 0 00-1-1h-4l-2 2h-4l-2-2H4a1 1 0 00-1 1z"/>
                </svg>
                <span class="text-sm font-medium">Galeri</span>
            </a>
        </div>

        <!-- Kanan: Search, Notif, DarkMode, Profil -->
        <div class="flex items-center gap-3">

            <!-- Search -->
            <input type="text" placeholder="Search..." class="px-2 py-1 rounded-lg text-sm border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 dark:focus:ring-indigo-600">

            <!-- Notifikasi -->
            <div class="relative" x-data="{ open: notifOpen }">
                <button @click="notifOpen = !notifOpen" class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition" title="Notifikasi">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                    <span class="absolute -top-1 -right-1 text-xs bg-red-500 text-white px-1.5 rounded-full">3</span>
                </button>
            </div>

            <!-- Dark Mode -->
            <button @click="darkMode = !darkMode" class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition" title="Mode Gelap/Terang">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4.22 1.78a1 1 0 011.415 0l.707.707a1 1 0 11-1.414 1.414l-.708-.707a1 1 0 010-1.414zM18 9a1 1 0 110 2h-1a1 1 0 110-2h1zM15.636 15.636a1 1 0 010 1.414l-.707.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM10 16a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zm-5.636-1.636a1 1 0 011.414 0l.707.707a1 1 0 11-1.414 1.414l-.707-.707a1 1 0 010-1.414zM4 9a1 1 0 110 2H3a1 1 0 110-2h1zm1.636-4.636a1 1 0 010 1.414l-.707.707A1 1 0 113.515 5.07l.707-.707a1 1 0 011.414 0z"/>
                </svg>
            </button>

            <!-- Profil -->
            <div class="relative" x-data="{ open: profileOpen }">
                <button @click="open = !open" class="flex items-center gap-2 p-1 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                    <img src="/images/admin.jpg" class="w-8 h-8 rounded-full" alt="Admin">
                    <span class="hidden md:block text-sm font-medium">Admin</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open" @click.outside="open = false" x-transition class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 shadow-lg rounded-lg py-2 z-50">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Profil</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Pengaturan</a>
                    <a href="{{ route('logout') }}" class="block px-4 py-2 hover:bg-red-500 dark:hover:bg-red-600 text-red-600 dark:text-red-400 rounded-lg">Logout</a>
                </div>
            </div>

        </div>
    </div>
</nav>

<!-- Hero Banner -->
<section class="relative bg-gradient-to-r from-indigo-400 to-purple-400 h-56 md:h-64 flex items-center justify-center rounded-b-xl overflow-hidden mt-16">
    <div class="text-center text-white">
        <h1 class="text-3xl font-bold" data-aos="fade-down">Selamat Datang, Admin</h1>
        <p class="mt-2 text-sm md:text-base" data-aos="fade-up">Dashboard SD Citra</p>
    </div>
</section>

<!-- Konten Dashboard -->
<main class="max-w-7xl mx-auto px-4 py-8 space-y-10">
    @yield('content')
</main>

</body>
</html>
