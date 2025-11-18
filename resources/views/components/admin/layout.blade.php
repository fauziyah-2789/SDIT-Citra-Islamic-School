@props(['title'])

<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Citra Islamic School</title>
    @vite('resources/css/app.css')
</head>
<body class="h-full bg-gray-50">

<div class="flex h-full">
    <x-admin.sidebar />

    <div class="flex-1 flex flex-col">
        <x-admin.navbar />

        <main class="p-6 flex-1 overflow-y-auto">
            <x-admin.flash />
            {{ $slot }}
        </main>
    </div>
</div>

</body>
</html>
