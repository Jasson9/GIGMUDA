<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GIGMUDA') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/sass/auth.scss'])
</head>
<body>
    <div id="app">
        <div class="auth-overlay"></div>
        <img class="auth-bg" src="{{Vite::asset("resources/Images/Auth-Background.png")}}">
        <main class="py-4">
            <div class="auth-box">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
