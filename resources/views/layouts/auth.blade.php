<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GameStore | @yield('header')</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-light-subtle d-flex flex-column h-100" style="background-image: url('https://i.pinimg.com/originals/f7/0f/c2/f70fc265d9e3bbaaab1f07759f14ec51.jpg');background-size: cover;background-repeat: no-repeat;">
    @yield('content')
</body>
</html>
