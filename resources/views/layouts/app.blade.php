<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Backlogged</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <span id="logoNav">
                        <a class="logo" href="{{ url('/') }}">
                            <img src="{{asset('logo.png')}}" height="80px" width="80px">
                        </a>
                    </span>
                    <algolia-instantsearch></algolia-instantsearch>

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        @auth
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">My Books</a>
                            <ul class="dropdown-menu">
                                <li><a href="/home">Backlog</a></li>
                                <li><a href="/finished">Finished</a></li>
                                <li><a href="/wpm-test">WPM Test</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">My Movies</a>
                            <ul class="dropdown-menu">
                                <li><a href="/movie-backlog">Backlog</a></li>
                                <li><a href="/watched">Watched</a></li>
                            </ul>
                        </li>
                        <!-- <li class="resize-move"><algolia-instantsearch></algolia-instantsearch></li> -->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
                @endauth
            </div>
        </nav>

        <div id="main">

            @yield('content')


        </div>

    </div>

    <!-- Scripts -->
    <script>
    window.algolia = {
        app_id: "{{ config('scout.algolia.id') }}",
        search_key: "{{ config('scout.algolia.secret') }}"
    }
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
    $(document).ready(function() {

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });

        $('#addBookButton').on('click', () => {
            $('#addMovieForm').hide();
            $('#addBookForm').show();
        });

        $('#addMovieButton').on('click', () => {
            $('#addMovieForm').show();
            $('#addBookForm').hide();
        })

    });
    </script>


</body>
</html>
