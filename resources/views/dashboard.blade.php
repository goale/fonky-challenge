<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Assets -->
    @vite(['resources/js/app.ts', 'resources/css/app.css'])
</head>

<body class="antialiased bg-gray-100">
    <main id="app" class="container mx-auto">
        <dashboard></dashboard>
    </main>
</body>

</html>