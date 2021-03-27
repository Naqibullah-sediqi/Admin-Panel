


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/backend_assets/images/favicon.png')}}">
    <title>Register New User</title>
    <!-- page css -->
    <link href="{{asset('public/backend_assets/node_modules/register-steps/steps.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend_assets/dist/css/pages/register3.css')}}" rel="stylesheet">
     <!-- Custom CSS -->
    <link href="{{asset('public/backend_assets/dist/css/style.min.css')}}" rel="stylesheet">

</head>

<body >

      <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Tadawei.af</p>
        </div>

      </div>

     <section id="wrapper" class="step-register">

        <div class="register-box">

            <div class="">
                <a href="javascript:void(0)" class="text-center m-b-40"><img src="{{asset('public/backend_assets/images/logo-icon.png')}}" alt="Home" /><br/><img src="{{asset('public/backend_assets/images/logo-text.png')}}" alt="Home" /></a>
                <!-- multistep form -->

                <form  id="msform" method="POST" action="{{ route('register') }}">
                        @csrf
               
                    <!-- progressbar -->
                    <ul id="eliteregister" style="margin-left: 150px;">
                        <li class="active">Personel Information</li>
                        <li>Account Info</li>
                       
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>

                        <h2 class="fs-title " >Personal Details</h2>
                      

                        <div class="">
                            
                        
                             <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="First Name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                         </div>


                          <div class="">
                            
                        
                             <input id="lname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus placeholder="Last Name">

                                    @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                          </div>


                           <div class="">
                            
                        
                             <input id="nicid" type="text" class="form-control @error('nic') is-invalid @enderror" name="nic" value="{{ old('nic') }}" required autocomplete="lastname" autofocus placeholder="National Identity Card">

                                    @error('nic')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                          </div>


                        <input type="button" name="next" class="next action-button" value="Next" />

                     
                    </fieldset>
                    <fieldset>

                        <h2 class="fs-title"> Your account Info</h2>

                        <div class="">
                            
                        
                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>      
                        
                        <div>
                            
                        
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>

                        <div>
                            
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

                        </div>

                    

                        @if($user  > 0)
                        <select  id="userRole" class="form-control select-value" name="role_data" >
                                    
                            <!-- <option value="" selected="selected" disabled hidden="hidden">Account Type</option> -->

                             <option value="" disabled selected hidden>Account Type</option>

                             <option value="1">Admin</option>
                             <option value="2">User</option>
                            
                           <!--  @foreach($roles as $role)
                                    




                            @endforeach -->
                                   
                        </select>

                        @endif

                        <input type="button" name="previous" class="previous action-button  btn-primary" value="Previous" />

                         <button type="submit" class="action-button">
                                   
                                    {{ __('Register') }}

                        </button>
                    </fieldset>

                </form>

                <div class="clear"></div>
                
            </div>

        </div>

    </section>


 <div>
 

<!-- <div class="content">

                    <div id="login" class="p-8">

                        <div class="form-wrapper md-elevation-8 p-8">

                            <div class="avatar-container col-auto mb-5 mb-sm-0">
                                    <img class="big" src="{{asset('public\Frontend\images\zawia-logo-sm.png')}}">
                                 
                                </div>


                            <div class="title mt-4 mb-8">Create New account</div>
                        <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <div class="form-group row">
                            <label for="name" class="col-md-8 col-form-label">{{ __('Name') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-8 col-form-label">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-8 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-8 col-form-label ">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                            @if($user  > 0)
                         <div class="form-group row">
                            <label for="userRole" class="col-md-8 col-form-label ">{{ __('User Role') }}</label>


                            <div class="col-md-12">
                              
                                <select  id="userRole" class="form-control" name="role_data">
                                    
                                    <option></option>
                                        @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}} </option>
                                        @endforeach
                                   
                                </select>
                            </div>
                        </div>
                        @endif


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

                </div> -->



    </div>

    <script src="{{asset('public/backend_assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{asset('public/backend_assets/node_modules/popper/popper.min.js')}}"></script>
    <script src="{{asset('public/backend_assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('public/backend_assets/node_modules/register-steps/jquery.easing.min.js')}}"></script>
    <script src="{{asset('public/backend_assets/node_modules/register-steps/register-init.js')}}"></script>


    <script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    </script>

</body>
</html>
