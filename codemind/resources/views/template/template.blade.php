<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Diario del Programador') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/js/app.js', 'resources/css/app.scss'])

    @yield('css')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script src="https://unpkg.com/gsap@3.9.1/dist/gsap.min.js" defer></script>
    <script src="https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.min.js" defer></script>
    <script type="module" src="{{ asset('js/slider.js') }}" defer></script>
</head>

<body>

    @include('template.navbar')

    <main class="pt-4 container">
        @yield('content')
    </main>

</body>

</html>
