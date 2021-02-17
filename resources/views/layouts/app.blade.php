<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <meta charset="utf-8">
    <title>AI Chatbot</title>
    <meta name="description" content="#">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dist/css/lib/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
    <!-- Swipe core CSS -->
    <link href="{{ asset('dist/css/swipe.min.css') }}" type="text/css" rel="stylesheet">
    <!-- Favicon -->
    <link href="{{ asset('dist/img/logo.png" type="image/png') }}" rel="icon">
</head>

<body>
    <div id="app" class="layout">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
        </nav> --}}

        <div class="navigation">
            <div class="inside">
                <div class="nav nav-tab menu">
                    <button class="btn"><img class="avatar-xl" src="dist/img/avatars/ali.jpg" alt="avatar"></button>
                    <a id="cht" href="#" data-toggle="tab" class="active">
                        <p class="picon">Home</p><i><img src="dist/img/logo.png" class="logopic material-icons"></i>
                    </a>
                    <a id="about" href="#" data-toggle="tab">
                        <p class="picon">Abouts</p><i class="material-icons">public</i>
                    </a>

                    <a id="gel" href="#" data-toggle="tab" class="f-grow1">
                        <p class="picon">Gellary</p><i class="material-icons">perm_media</i>
                    </a>
                    <button class="btn mode">
                        <p class="picon">Theme</p><i class="material-icons">brightness_2</i>
                    </button>
                    <a id="stt" href="#" data-toggle="tab">
                        <p class="picon">Setting</p><i class="material-icons">settings</i>
                    </a>
                    @guest
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif --}}
                    @else


                        <a class="btn power" id="" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="material-icons">power_settings_new</i>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        {{-- <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li> --}}
                    @endguest

                </div>
            </div>
        </div>

        <main class="main">
            @yield('content')
        </main>

    </div>

    <script src="{{ asset('dist/js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('dist/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('dist/js/swipe.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    <script>
        function scrollToBottom(el) {
            el.scrollTop = el.scrollHeight;
        }
        scrollToBottom(document.getElementById('content'));

    </script>
</body>

</html>
