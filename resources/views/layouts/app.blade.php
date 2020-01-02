<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel Post App</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color-dark">
            <a class="navbar-brand" href="{{ url('/') }}">
                <b>L</b>aravel<b>P</b>ost<b>A</b>pp
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
                    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
                <ul class="navbar-nav mr-auto">

                    @guest
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">
                                <i class="fas fa-home" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/login') }}" class="nav-link">
                                <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endguest

                    @auth
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">
                                <i class="fas fa-home" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-bell"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fas fa-cog" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/logout') }}" class="nav-link">
                                <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endauth
                </ul>
                @auth
                    <ul class="navbar-nav ml-auto nav-flex-icons">
                        <li class="nav-item">
                            <a href="{{route('profile.show', ['username' => Auth::user()->name])}}" class="nav-link">
                                <i class="fas fa-user" aria-hidden="true"></i>  {{ Auth::user()->name }}
                            </a>
                        </li>
                    </ul>
                @endauth
            </div>
        </nav>
        <!--/.Navbar -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('js/mdb.min.js') }}" defer></script>
    <script src="{{ asset('js/popper.min.js') }}" defer></script>

</body>
</html>
