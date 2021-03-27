<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>


    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
   <!--  <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet"> -->

    <link type="text/css" rel="stylesheet" href="{{asset('public/assets/icons/fuse-icon-font/style.css')}}">
            <!-- Animate.css -->
            <link type="text/css" rel="stylesheet" href="{{asset('public/assets/vendor/animate.css/animate.min.css')}}">
            <!-- PNotify -->
            <link type="text/css" rel="stylesheet" href="{{asset('public/assets/vendor/pnotify/pnotify.custom.min.css')}}">
            <!-- Nvd3 - D3 Charts -->
            <link type="text/css" rel="stylesheet" href="{{asset('public/assets/vendor/nvd3/build/nv.d3.min.css')}}"  />
            <!-- Perfect Scrollbar -->
            <link type="text/css" rel="stylesheet" href="{{asset('public/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" />
            <!-- Fuse Html -->
            <link type="text/css" rel="stylesheet" href="{{asset('public/assets/vendor/fuse-html/fuse-html.min.css')}}" />
            <!-- Main CSS -->
            <link type="text/css" rel="stylesheet" href="{{asset('public/assets/css/main.css')}}">
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

                        @hasrole('admin')
                         <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index') }}">Manage User</a>
                            </li>
                        @endhasrole 
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                      
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
