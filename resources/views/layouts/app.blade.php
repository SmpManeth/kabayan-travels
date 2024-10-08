<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Flowbite -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=Yesteryear&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-[#FFFFFF]">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        @include('layouts.footer')
    </div>

    <!-- Fontawesome  -->
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <script src="https://kit.fontawesome.com/a23cd217c4.js" crossorigin="anonymous"></script>
    <!-- Pro Font awesome  -->
    <script src="https://kit.fontawesome.com/a10fc53a2c.js" crossorigin="anonymous"></script>
    <!-- Flowbite  -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    
</body>

</html>