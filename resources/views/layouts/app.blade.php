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

        <nav class="card position-fixed h-100">
            <div class="card-header px-3">
                <h6><b>L</b>aravel</h6>
                <h6><b>P</b>ost</h6>
                <h6><b>A</b>pp</h6>
            </div>

            @guest
                <div class="card-body d-flex flex-column">
                    <a href="{{ url('/') }}" class="btn btn-info waves-effect px-3"><i class="fas fa-home" aria-hidden="true"></i></a>
                    <a href="{{ url('/login') }}" class="btn btn-success waves-effect px-3"><i class="fas fa-sign-out-alt" aria-hidden="true"></i></a>
                </div>
            @endguest

            @auth
                <div class="card-body d-flex flex-column">
                    <a href="{{ url('/') }}" class="btn btn-info waves-effect px-3"><i class="fas fa-home" aria-hidden="true"></i></a>
                    <a href="{{route('profile.show', ['username' => Auth::user()->name])}}" class="btn btn-info waves-effect px-3"><i class="fas fa-user" aria-hidden="true"></i></a>
                    <a class="btn btn-info waves-effect px-3 mb-5"><i class="fas fa-cog" aria-hidden="true"></i></a>

                    <button type="button" class="btn btn-outline-info waves-effect px-3"><i class="fas fa-bell"></i></button>

                    <a href="{{ url('/logout') }}" class="btn btn-danger mt-auto waves-effect px-3 mt-5"><i class="fas fa-sign-out-alt" aria-hidden="true"></i></a>
                </div>
            @endauth
        </nav>

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
