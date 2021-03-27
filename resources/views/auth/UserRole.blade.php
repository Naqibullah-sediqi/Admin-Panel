


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
<body style="background-color: lightblue">
    <div >
 

<div class="content">

                    <div id="login" class="p-8">

                        <div class="form-wrapper md-elevation-8 p-8">

                            <div class="avatar-container col-auto mb-5 mb-sm-0">
                                    <img class="big" src="{{asset('public\Frontend\images\zawia-logo-sm.png')}}">
                                 
                                </div>


         <div class="title mt-4 mb-8 font-weight-bold">Create New Role</div>
            <form method="POST" action="{{ route('users.insertRole') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-8 col-form-label">{{ __('Name') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-8 col-form-label">{{ __('Description') }}</label>

                            <div class="col-md-12">

                                 <input id="name" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"  >

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>


                    </form>
                        </div>
                    </div>

                </div>



    </div>
</body>
</html>
