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
            font-family: 'Raleway', sans-serif;
            background-color: #548687;
            background-image: repeating-linear-gradient(120deg, rgba(255,255,255,.1), rgba(255,255,255,.1) 1px, transparent 1px, transparent 60px), repeating-linear-gradient(60deg, rgba(255,255,255,.1), rgba(255,255,255,.1) 1px, transparent 1px, transparent 60px), linear-gradient(60deg, rgba(0,0,0,.1) 25%, transparent 25%, transparent 75%, rgba(0,0,0,.1) 75%, rgba(0,0,0,.1)), linear-gradient(120deg, rgba(0,0,0,.1) 25%, transparent 25%, transparent 75%, rgba(0,0,0,.1) 75%, rgba(0,0,0,.1));
            background-size: 70px 120px;
        }

        .container {
            height: 100vh; 
            display: flex;
            flex-direction: column;
            align-items: center; 
            justify-content: center;
        }      


        h1 {
            font-size: 100px;
            font-weight: bold;
        }

        @media screen and (max-width: 640px) {
            h1 {
                font-size: 75px;
            }
        }

        @media screen and (max-width: 540px) {
            h1 {
                font-size: 40px;
            }
        }

        h3 {
            margin-top: 30px;
            /*font-size: 40px;*/
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
            font-weight: bold !important;
        }

        button:hover {
            background-color: white !important;
            border: 2px solid white;
            color: #548687 !important;;

        }


        </style>

    </head>

    <body>
        <div class ="container">
            <div class="row">
                    <h1 class="text-center">Backlogged</h1>
                    <h3 class="text-center">Insert a marketing slogan here</h3>
                    <div class="text-center">
                        @if (Route::has('login'))
                            <div class="text-center links">
                                @auth
                                    <a href="{{ url('/home') }}"><button class="btn btn-default btn-lg">Home</button></a>
                                @else
                                    <a href="{{ route('login') }}"><button class="btn btn-default btn-lg">Login</button></a>
                                    <a href="{{ route('register') }}"><button class="btn btn-default btn-lg">Sign Up</button></a>
                                @endauth
                            </div>
                        @endif

                </div>
            </div>
        </div>
    </body>

</html>
