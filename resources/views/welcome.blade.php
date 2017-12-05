<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Backlogged</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>

        body {
            background-color: #548687;
            font-family: 'Raleway', sans-serif;
        }

        h1 {
            font-size: 100px;
        }

        h3 {
            margin-top: 30px;
            font-size: 40px;
        }

        h1, h3 {
            color: white;
        }

        button {
            padding: 10px;
            border-radius: 0px;
            width: 100px;
            color: white !important;
            text-decoration: none;
            background-color: #548687 !important;
            text-decoration: none !important;
            border: 3px solid white !important;
            margin-top: 50px;
            margin-right: 30px;
        }

        button > a{
            text-decoration: none !important;
            color: white !important;
        }

        button:hover {
            background-color: white !important;
            border: 2px solid white;

        }

        button:hover > a {
            color: #548687 !important;            
        }


        .vertical-align {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: 10%;
        }


        </style>

    </head>

    <body>
        <div class ="container">
            <div class="row vertical-align">
                <div class="col-xs-8 col-xs-offset-2">
                    <h1 class="text-center">Backlogged</h1>
                    <h3 class="text-center">Insert a marketing slogan here</h3>
                    <div class="flex-center position-ref full-height">
                        @if (Route::has('login'))
                            <div class="text-center links">
                                @auth
                                    <button class="btn btn-default btn-lg"><a href="{{ url('/home') }}">Home</a></button>
                                @else
                                    <button class="btn btn-default btn-lg"><a href="{{ route('login') }}">Login</a></button>
                                    <button class="btn btn-default btn-lg"><a href="{{ route('register') }}">Sign Up</a></button>
                                @endauth
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
