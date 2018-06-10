<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="dns-prefetch" href="https://fonts.gstatic.com">

        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>
    <body>
        <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="container=fluid">
                <div class="navbar-header">
                    <a class="navbar-brand brand" href="{{ route('main') }}">
                        <h2>
                            FactorioBluePrintShare
                        </h2>
                    </a>
                </div>
                <ul class="nav navbar-nav">
                    <li {{ Route::currentRouteName() == 'main' ? 'class=active' : '' }}>
                        <a href="{{ route('main') }}">
                            <h4>
                                FBP Home
                            </h4>
                        </a>
                    </li>
                    @if(Auth::check())
                        <li>
                            <a href="">
                                <h4>
                                    Add Blueprint
                                </h4>
                            </a>
                        </li>
                    @endif
                    <li>
                        <a href="">
                            <h4>
                                View Blueprints
                            </h4>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                <h4>
                                    Welcome, {{ Auth::user()->name }}
                                    <i class="fa fa-caret-down"></i>
                                </h4>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <form name="logout" method="post" action="{{ route('logout') }}" style="padding-left: 20px;">
                                        @csrf
                                        <button class="btn btn-danger">
                                            Logout
                                        </button>
                                    </form>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">
                                    Nav header
                                </li>
                                <li>
                                    <a href="#">
                                        Separated link
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        One more separated link
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                <h4>
                                    Welcome, Guest!
                                    <i class="fa fa-caret-down"></i>
                                </h4>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('login') }}">
                                        <h4>
                                            Login
                                        </h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}">
                                        <h4>
                                            Register
                                        </h4>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="container-fluid main">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="panel-group">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>
                                        @yield('title')
                                    </h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </body>
</html>
