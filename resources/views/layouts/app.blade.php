<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Portal Kierowcy') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- FAVICON -->
    <link rel="icon" href="{{ url('img/sonijalogoczarne.svg') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/footer.css'])
    <style>
        body{background-image: url('https://pkdoc.sonija.pl/images/gdyniabg.png'); background-size: cover; background-attachment: fixed; background-repeat: no-repeat;}
        .footerlink {text-decoration: none;} footer{position: absolute; bottom: 0; left: 50%; transform: translate(-50%, 0);}
        </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white border-bottom">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="https://pkdoc.sonija.pl/images/portalKierowcyLogo.png" alt="CITY PARKING GROUP S.A. PORTAL KIEROWCY LOGO" width="200" height="60" title="Strona Główna">
                    <!-- Portal Kierowcy -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item px-2">
                            <a class="nav-link pmn" href="{{ url('/') }}">Strona Główna</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link pmn" href="#">Strona SPP</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link pmn" href="#">Regulamin</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link pmn" href="#">Dodatkowe informacje</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link pmn" href="#">Kontakt</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Logowanie') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Rejestracja') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name . ' ' . Auth::user()->surname }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/users/list">Admin - Użytkownicy</a>
                                    <a class="dropdown-item" href="{{ route('products.index') }}">Admin - Produkty</a>
                                    
                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="font-weight-bold">
                                        {{ __('Logout') }}
                                        </span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <div class="container mt-5 mb-4 text-center">
        Copyright {{ date('Y') }}. All rights reserved for City Parking Group S.A. <br> Powered by <a href="https://sonija.pl" target="_blank"><img src="https://dev.sonija.pl/assets/sonijalogoczarne.svg" width="20" height="20"></a>
    </div>
    <div class="b-example-divider"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





    <script type="text/javascript">
        @yield('javascript')
    </script>
        @yield('js-files')
</body>
</html>
