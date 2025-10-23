<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'SDIT Citra') - SDIT Citra Islamic School</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind_config = {
      theme: {
        extend: {
          colors: {
            primary: {
              50: '#e6f4f1',
              100: '#c0e4dc',
              200: '#9ad3c7',
              300: '#70c2b0',
              400: '#49b398',
              500: '#22a37f',
              600: '#1c8f68',
              700: '#166f50',
              800: '#114f3a'
            },
            accent: {
              50: '#f0f8ff',
              100: '#d9ecff',
              200: '#b8dbff',
              300: '#8fc5ff',
              400: '#62adff',
              500: '#3e95ff'
            },
            button: {
              primary: '#22a37f',
              secondary: '#3e95ff'
            }
          },
          boxShadow: {
            'soft': '0 8px 30px rgba(16,24,40,0.06)',
            'soft-dark': '0 10px 30px rgba(2,6,23,0.6)'
          }
        }
      }
    }
  </script>

  <!-- AOS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" defer></script>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
  <link rel="icon" href="{{ asset('images/logo.png') }}">

  <style>
    body {
      font-family: 'Inter', system-ui, sans-serif;
      color: #1f2937;
      background: linear-gradient(to bottom right, #e6f4f1, #b8dbff, #ffffff);
    }
    h1,h2,h3 { font-family: 'Poppins', 'Inter', sans-serif; }
    .nav-bg { backdrop-filter: blur(8px); background: rgba(255,255,255,0.9); }
    a.active { color: #16a34a; font-weight: 600; }
  </style>
</head>

<body class="h-full antialiased">

<!-- 🌿 NAVBAR -->
<header x-data="{ open:false, scrolled:false }"
        x-init="window.addEventListener('scroll',()=>scrolled=window.scrollY>10)"
        :class="scrolled ? 'shadow-md nav-bg' : 'bg-transparent'"
        class="fixed w-full z-50 transition-all duration-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
      <a href="{{ route('landing') }}" class="flex items-center gap-3">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10 h-10 rounded-md"/>
        <span class="text-lg font-semibold text-emerald-700">SDIT Citra</span>
      </a>

      <!-- Menu Desktop -->
      <nav class="hidden md:flex items-center gap-6 font-medium text-gray-700">
        @php
          $menu = [
            ['label'=>'Beranda','id'=>'hero'],
            ['label'=>'Profil','id'=>'profil'],
            ['label'=>'Visi Misi','id'=>'visi'],
            ['label'=>'Guru','id'=>'guru'],
            ['label'=>'Berita','id'=>'berita'],
            ['label'=>'Galeri','id'=>'galeri'],
            ['label'=>'Prestasi','id'=>'prestasi'],
            ['label'=>'Kontak','id'=>'kontak']
          ];
        @endphp
        @foreach($menu as $item)
          <a href="#{{ $item['id'] }}" class="hover:text-emerald-600 transition">{{ $item['label'] }}</a>
        @endforeach
        <a href="{{ route('pendaftaran') }}" 
           class="px-4 py-2 bg-gradient-to-r from-green-500 to-blue-400 text-white rounded-lg shadow hover:opacity-90 transition">
          Daftar
        </a>
      </nav>

      <!-- Menu Mobile -->
      <div class="md:hidden">
        <button @click="open=!open" class="p-2 rounded-md focus:outline-none">
          <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
          <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Dropdown Mobile -->
  <div x-show="open" @click.outside="open=false" x-cloak class="md:hidden bg-white/95 backdrop-blur">
    <nav class="flex flex-col gap-3 p-4 text-gray-700">
      @foreach($menu as $item)
        <a href="#{{ $item['id'] }}" class="hover:text-emerald-600 transition">{{ $item['label'] }}</a>
      @endforeach
      <a href="{{ route('pendaftaran') }}" 
         class="px-4 py-2 bg-gradient-to-r from-green-500 to-blue-400 text-white rounded-lg text-center">
        Daftar
      </a>
    </nav>
  </div>
</header>

<!-- MAIN -->
<main class="pt-16">
  @yield('content')
</main>

<!-- Footer -->
<footer class="py-8 bg-gradient-to-r from-green-50 via-blue-50 to-white mt-12 border-t border-green-100">
  <div class="max-w-7xl mx-auto px-4 text-center text-gray-700">
    <p class="font-medium mb-1">Jl. Pendidikan No.123, Kota Citra</p>
    <p class="mb-1">Telp: 0812-3456-7890 • Email: info@sditcitra.sch.id</p>
    <p class="mt-3 text-sm">&copy; {{ date('Y') }} SDIT Citra Islamic School — Semua Hak Dilindungi.</p>
  </div>
</footer>

<!-- Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('a[href^="#"]').forEach(a=>{
      a.addEventListener('click', e=>{
        const el=document.querySelector(a.getAttribute('href'));
        if(el){e.preventDefault();el.scrollIntoView({behavior:'smooth'});}
      });
    });
    if(window.AOS) AOS.init({ duration:700, once:true, easing:'ease-out-cubic' });
  });
</script>

</body>
</html>
