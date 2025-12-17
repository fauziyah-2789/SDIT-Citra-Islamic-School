@props(['title' => 'Dashboard'])

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Mengubah label di <title> --}}
    <title>{{ $title }} · Guru SDIT Citra</title> 
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

{{-- Mengubah sedikit warna latar belakang, misalnya lebih fokus ke Hijau/Kuning --}}
<body class="font-sans text-slate-800 bg-gradient-to-br from-lime-50 via-emerald-50 to-sky-50 min-h-screen overflow-x-hidden"> 

    {{-- Memanggil Navbar yang sudah disesuaikan --}}
    <x-guru.navbar /> 

    <main class="pt-28 px-4 md:px-8 max-w-7xl mx-auto">
        {{ $slot }}
    </main>

</body>
</html>