<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Json up to MapsJS</title>

    <!-- Custom built theme - This already includes Bootstrap 4 -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/toggle-bootstrap.css">
    <link rel="stylesheet" href="css/toggle-bootstrap-dark.css">
    <link rel="stylesheet" href="css/toggle-bootstrap-print.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body class="bootstrap-dark">
<div id="app">
    <nav style="background-color: black; border-color: black;" class="navbar navbar-expand-lg "  id="main-nav-bar">
        <img src="{{URL::asset('assets/logo.jpg')}}" alt="logo" height="90" width="100">
                    <ul class="navbar-nav mt-2 mt-md-0 my-2">
                        <li class="nav-item mx-2">
                            <a class="nav-link"
                               href="javascript:document.getElementsByTagName('body')[0].setAttribute('class', 'bootstrap-dark');">Dark</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link"
                               href="javascript:document.getElementsByTagName('body')[0].setAttribute('class', 'bootstrap');">Light</a>
                        </li>
                    </ul>
{{--                    <form class="form-inline my-2 my-lg-0">--}}
{{--                        <input class="form-control mr-sm-2" type="text" placeholder="Search">--}}
{{--                    </form>--}}

        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav nav-pills float-right">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastrar') }}</a>
                            </li>
                        @endif
                    @else
                        <div class="container">
                            <div class="row">
                                <div class="col">
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
                                </div>

                            </div>
                        </div>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>

