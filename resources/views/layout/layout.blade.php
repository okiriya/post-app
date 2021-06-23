<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       

        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/bootstrap-grid.min.css">

       
    </head>
    <body class="antialiased">
        <div class="wrapper">
            <nav>
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-4">
                            <ul class="d-flex">
                                <li><a href="{{ route('home') }}"> Home</a></li>
                                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li><a href="{{ route('post') }}">Post</a></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul class="d-flex justify-content-end align-items-center" >
                                @auth
                                <li><a href="">{{ auth()->user()->name }}</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit">Logout</button>
                                    </form>
                                </li>
                                @endauth
                                

                                @guest
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                @endguest
                                
                            </ul>
                        </div>
                    </div>
                </div>

            </nav>
            @yield('content')
        </div>
        
    </body>
</html>
