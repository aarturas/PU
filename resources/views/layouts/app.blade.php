<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <!-- include summernote css/js   ///// idedame dvi eilutes is interneto summernota -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>


</head>
<body>
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
<div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else


        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Kursai <span class="caret"></span>
            </a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    
                    <a class="dropdown-item" href="{{ route('kursai.index') }}">                                  1. Visi kursai </a>
{{--                      Pasirenkame tipa==1, tuomet studentas nematys/negalės redaguoti "naujo kurso" meniu langelyje                            --}}
                @if(Auth::user()->tipa == 1)
                    <a class="dropdown-item" href="{{ route('kursai.create') }}">                                 2. Naujas kursas </a>
                @endif
</div>
        </li>

        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Grupes <span class="caret"></span>
            </a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                <a class="dropdown-item" href="{{ route('grupe.index') }}">                                       1. Visos grupes </a>

{{--                       Pasirenkame tipa==1, tuomet studentas nematys/negalės redaguoti "naujos grupes" meniu langelyje                            --}}
                @if(Auth::user()->tipa == 1)
                    <a class="dropdown-item" href="{{ route('grupe.create') }}">                                   2. Nauja grupe</a>
                @endif

</div>
        </li>

        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Paskaitos <span class="caret"></span>
            </a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                <a class="dropdown-item" href="{{ route('paskaito.index') }}">                                   1. Visos paskaitos</a>

{{--                     Pasirenkame tipa==1, tuomet studentas nematys "naujos paskaitos" meniu langelyje                            --}}
                @if(Auth::user()->tipa == 1)
                    <a class="dropdown-item" href="{{ route('paskaito.create') }}">                               2. Nauja paskaita</a>
                @endif

</div>
        </li>
{{--                    Perkeliame if-ą aukščiau, kad studentas nematytų visų "user'ių"                                                  --}}
                                          @if(Auth::user()->tipa == 1)
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                User <span class="caret"></span>
            </a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                <a class="dropdown-item" href="{{ route('user.index') }}">                                          1. Visi user</a>

{{--                                 Pasirenkame tipa==1, tuomet studentas nematys "nauju user'ių" meniu langelyje                            --}}
                
                    <a class="dropdown-item" href="{{ route('user.create') }}">                                     2. Naujas user</a>
               
        </li>
 @endif

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                <a class="dropdown-item" href="{{ route('studentoGrupe.index') }}">                                 1. Visi studentoGrupe</a>

                {{--                                 Pasirenkame tipa==1, tuomet studentas nematys "nauju failų" meniu langelyje                            --}}
                @if(Auth::user()->tipa == 2)
                    <a class="dropdown-item" href="{{ route('studentoGrupe.create') }}">                            2. Naujas studentoGrupe</a>
                @endif

</div>



        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Failai <span class="caret"></span>
            </a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                <a class="dropdown-item" href="{{ route('failai.index') }}">                                         1. Visi failai</a>

                {{--                                 Pasirenkame tipa==1, tuomet studentas nematys "nauju failų" meniu langelyje                            --}}
                @if(Auth::user()->tipa == 1)
                    <a class="dropdown-item" href="{{ route('failai.create') }}">                                    2. Naujas failas</a>
                @endif

</div>
        </li>



            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                </a>

<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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

 {{--                                                      validatoriui                                                                                      --}}

<div class="container">
<div class="row justify-content-center">
<div class="col-md-9">
                            @if ($errors->any())
<div class="alert">
                                <ul class="list-group">

                                    @foreach ($errors->all() as $error)
                                        <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                                    @endforeach

                                </ul>
                            </div>
                            @endif
</div>
</div>
</div>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-9">
                            @if(session()->has('success_message'))
                                <div class="alert alert-success" role="alert">
                                    {{session()->get('success_message')}}
                                </div>
                            @endif
                            
                     {{-- sitas kodas apraso validatoriaus klaida --}}

                            @if(session()->has('info_message'))
                                <div class="alert alert-info" role="alert">
                                    {{session()->get('info_message')}}
                                </div>
                            @endif
</div>
</div>
</div>
            @yield('content')
        </main>
</div>
</body>
</html>
