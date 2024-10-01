<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('resources')

    @yield('title')
    <title>{{  config('app.name', 'GIGMUDA') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar">
            <div>
                <img src="{{ Vite::asset('resources/Images/LOGO.png') }}" alt="" class="LOGO">
            </div>

            <div class ="Buttons">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link " href="#!">CARI FREELANCER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#!">CARI PRODUK</a>
                    </li>
                    <li class="nav-item">
                        @guest
                            <a class="nav-link " href="{{route("login")}}">LOGIN</a>
                        @else
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                                <img src="{{ Vite::asset('resources/Images/PROFIMG.png') }}" alt="" class="ProfIMG">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        @endguest
                    </li>
                </ul>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
        <footer class="Footer">
            <div>
                <img src="{{ Vite::asset('resources/Images/SOSMED.png') }}" alt="" class="SosMedIMG">
            </div>
            <div class="text-white Copyright">Copyright © 2024 GIGMUDA, All Rights Reserved.</div>
        </footer>
    </div>
</body>
</html>
