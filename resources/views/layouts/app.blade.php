<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">My Books</a>
                            <ul class="dropdown-menu">
                                <li><a href="/home">Backlog</a></li>
                                <li><a href="/finished">Finished</a></li>
                                <li><a href="#">Reading Lists</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">My Movies</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Backlog</a></li>
                                <li><a href="#">Finished</a></li>
                                <li><a href="#">Watch Lists</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">My TV</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Backlog</a></li>
                                <li><a href="#">Finished</a></li>
                                <li><a href="#">Watch Lists</a></li>
                            </ul>
                        </li>
                        <li><a href="/add">Add</a></li>
                        <li>
                            <ais-index
                                app-id="VDG2ASZRC8"
                                api-key="7ae089c05742521cd481e6190a45e5ee"
                                index-name="title"
                                :search-store="searchStore"
                            >
<!--                             :search-store="searchStore"
 -->                                <ais-search-box>
                                    <ais-input placeholder="Find book, movie, or show" :class-names="{
                                    'ais-input': 'form-control',}" id="searchBar"></ais-input>
                                </ais-search-box>
<!--                                 <ais-results v-show="searchStore.query.length > 0">
 -->                                <ais-results v-show="searchStore.query.length > 0">
                                    <template slot-scope="{ result }">
                                        <div class="searchResult">
                                            <p v-text="result.title"></p>
                                            <p v-text="result.author"></p>
                                        </div>
                                     </template>
                                </ais-results>
                            </ais-index>
                        </li>


                    </div>
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
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        import { createFromAlgoliaCredentials } from 'vue-instantsearch';

        const searchStore = createFromAlgoliaCredentials('VDG2ASZRC8', '7ae089c05742521cd481e6190a45e5ee');

        export default {
            data() {
                return { searchStore };
            }
        }
    </script>

</body>
</html>
