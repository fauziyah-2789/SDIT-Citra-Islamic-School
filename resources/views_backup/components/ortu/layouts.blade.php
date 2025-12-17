@props(['title' => 'Dashboard'])

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Mengubah label di <title> --}}
    <title>{{ $title }} · Orang Tua SDIT Citra</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

{{-- Mengubah sedikit warna latar belakang, misalnya lebih fokus ke Biru/Ungu --}}
<body class="font-sans text-slate-800 bg-gradient-to-br from-indigo-50 via-sky-50 to-slate-50 min-h-screen overflow-x-hidden">

    {{-- Memanggil Navbar yang sudah disesuaikan --}}
    <x-ortu.navbar /> 

    <main class="pt-28 px-4 md:px-8 max-w-7xl mx-auto">
        {{ $slot }}
    </main>

</body>
</html>