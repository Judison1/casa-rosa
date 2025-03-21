<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) && !empty($title) ? $title . ' | Casa Rosa Santarém - PA' : 'Casa Rosa Santarém - PA' }}
    </title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://casarosasantarem.org.br">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Casa Rosa Santarém - PA">
    <meta property="og:description"
        content="A Casa Rosa é uma instituição sem fins lucrativos que tem como objetivo acolher mulheres com câncer em tratamento na cidade de Santarém - PA. A Casa Rosa foi fundada em 2016 e desde então tem ajudado mulheres a enfrentar o câncer com mais dignidade e amor.">
    <meta property="og:image" content="{{ asset('img/logo.jpg') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="casarosasantarem.org.br">
    <meta property="twitter:url" content="https://casarosasantarem.org.br">
    <meta name="twitter:title" content="Casa Rosa Santarém - PA">
    <meta name="twitter:description"
        content="A Casa Rosa é uma instituição sem fins lucrativos que tem como objetivo acolher mulheres com câncer em tratamento na cidade de Santarém - PA. A Casa Rosa foi fundada em 2016 e desde então tem ajudado mulheres a enfrentar o câncer com mais dignidade e amor.">
    <meta name="twitter:image" content="{{ asset('img/logo.jpg') }}">
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
