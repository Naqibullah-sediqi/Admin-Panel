<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/horizontal-nav-fullwidth/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jun 2019 17:52:52 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
   <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/backend_assets/images/favicon.png')}}">
    <title>Login To Tadawei</title>
    
    <!-- page css -->
    <link href="{{asset('public/backend_assets/dist/css/pages/login-register-lock.css')}}" rel="stylesheet">
    
     <!-- Custom CSS -->
    <link href="{{asset('public/backend_assets/dist/css/style.min.css')}}" rel="stylesheet">
   
</head>

<body class="skin-default card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Tadawei.af</p>
        </div>
    </div>


    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(../assets/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">

                  

                  <form method="POST" action="{{ route('login') }}">
                        @csrf


                        <h3 class="text-center m-b-20">Sign In</h3>

                        <div class="form-group ">

                            <div class="col-xs-12">


                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                        </div>
                        



                        <div class="form-group">

                            <div class="col-xs-12">


                                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                             </div>

                        </div>    
                       

                        <div class="form-group text-center">

                            <div class="col-xs-12 p-b-20">

                                 <button type="submit" class="btn btn-block btn-lg btn-info btn-rounded">
                                    {{ __('Sign In') }}
                                </button>


                                 <a  href="{{url('register')}}" class="btn btn-block btn-lg btn-info btn-rounded">
                                    {{ __('Sign Up') }}
                                </a>

                            

                            </div>
                        </div>
                        <div class="row">
                          
                        </div>

                         
                      <!--   <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                Don't have an account? <a href="register" class="text-info m-l-5"><b>Sign Up</b></a>
                            </div>
                        </div> -->
                      

                    </form>
                    
                </div>
            </div>
        </div>
    </section>



    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->


    <script src="{{asset('public/backend_assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{asset('public/backend_assets/node_modules/popper/popper.min.js')}}"></script>
    <script src="{{asset('public/backend_assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  
    <!--Custom JavaScript -->
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
