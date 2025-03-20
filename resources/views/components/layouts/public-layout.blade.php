<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) && !empty($title) ? $title . ' | Casa Rosa Santarém - PA' : 'Casa Rosa Santarém - PA' }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-rose-100">
    <header class="bg-white shadow">
        <x-layouts.public-layout.header />
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer class="bg-white">
        <x-layouts.public-layout.footer />
    </footer>
    @livewireScripts
</body>

</html>
