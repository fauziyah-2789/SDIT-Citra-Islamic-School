@props(['title' => 'Admin'])

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} · Admin SDIT Citra</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="font-sans text-slate-800 bg-gradient-to-br from-emerald-50 via-sky-50 to-indigo-50 min-h-screen overflow-x-hidden">

    <x-admin.navbar />

    <main class="pt-28 px-4 md:px-8 max-w-7xl mx-auto">
        {{ $slot }}
    </main>

</body>
</html>
