        <!DOCTYPE html>
        <html lang="en-us">


        <head>


            <title>Zawia Media </title>
            <meta charset="UTF-8">
            <meta name="description" content="">

            <!-- STYLESHEETS -->
            <style type="text/css">
                [fuse-cloak],
                .fuse-cloak {
                    display: none !important;
                }

            </style>
            <!-- Icons.css -->


            <!-- <link type="text/css" rel="stylesheet" href="{{asset('public/Backend_css/PageStyles.css')}}"> -->
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
            <!-- / STYLESHEETS -->

            <!-- Latest compiled and minified CSS -->
             <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

             <!-- Latest compiled and minified CSS -->
            <link href="{{asset('public/assets/vendor/dropdowns/select2.min.css')}}" rel='stylesheet' type='text/css'>


            <!-- JAVASCRIPT -->
            <!-- jQuery -->
            <!-- vue connection js -->
            <!-- <script  type="application/javascript" src="{{asset('public/js/app.js') }}" defer></script> -->
            <script type="text/javascript" src="{{asset('public/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
            <!-- Mobile Detect -->
            <script type="text/javascript" src="{{asset('public/assets/vendor/mobile-detect/mobile-detect.min.js')}}"></script>
            <!-- Perfect Scrollbar -->
            <script type="text/javascript" src="{{asset('public/assets/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}"></script>
            <!-- Popper.js -->
            <script type="text/javascript" src="{{asset('public/assets/vendor/popper.js/index.js')}}"></script>
            <!-- Bootstrap -->
            <script type="text/javascript" src="{{asset('public/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>



              <script type="text/javascript" src="{{asset('public/assets/vendor/d3/d3.min.js')}}"></script>
              <script type="text/javascript" src="{{asset('public/assets/vendor/nvd3/build/nv.d3.min.js')}}"></script>


         <!-- Data tables -->
            <script type="text/javascript" src="{{asset('public/assets/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('public/assets/vendor/datatables-responsive/js/dataTables.responsive.js')}}"></script>
            <!-- PNotify -->
            <script type="text/javascript" src="{{asset('public/assets/vendor/pnotify/pnotify.custom.min.js')}}"></script>
            <!-- Fuse Html -->
            <script type="text/javascript" src="{{asset('public/assets/vendor/fuse-html/fuse-html.min.js')}}"></script>
            <!-- Main JS -->
            <script type="text/javascript" src="{{asset('public/assets/js/main.js')}}"></script>


            

              <!-- Dropdown image pugins -->       
              <script src="{{asset('public/assets/vendor/dropdowns/select2.min.js')}}"></script>
              <!-- End of dropdwon plugins-->

           
             <script>
              $(document).ready(function(){
              $(".social").select2({
              templateResult: formatState
              });
             });
 
              function formatState (state) {
             if (!state.id) { return state.text; }
             var $state = $(
             '<span ><img sytle="display: inline-block; " src="http://localhost/ZawiaNewVersion3/public/Frontend/images/animated/' + state.element.value.toLowerCase() + '.svg" /> ' + state.text + '</span>'
             );
              console.log($state)
             return $state;
             }
         
     
            </script>

             <script>
              $(document).ready(function(){
              $(".social2").select2({
              templateResult: formOption
              });
             });
 
              function formOption (state) {
             if (!state.id) { return state.text; }
             var $state = $(
             '<span ><img sytle="display: inline-block;" align="right" width="20" height ="20" src="http://localhost/ZawiaNewVersion3/public/Frontend/images/Flags/' + state.element.value.toLowerCase() + '.svg" /> ' + state.text + '</span>'
             );
              console.log($state)
             return $state;
             }
         
     
            </script>

          
           

               <!-- Latest compiled and minified JavaScript -->
             <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>


        
            @yield('backendFile')


          
        </head>

        <body class="layout layout-vertical layout-left-navigation layout-below-toolbar">
           
           <div >

           
            <main>

                <div id="wrapper">
                    <aside id="aside" class="aside aside-left" data-fuse-bar="aside" data-fuse-bar-media-step="md" data-fuse-bar-position="left">
                        <div class="aside-content-wrapper">

                            <div class="aside-content bg-primary-700 text-auto">

                                <div class="aside-toolbar">

                                    <div class="logo">
                                        <span class="logo-icon">ZM</span>
                                        <span class="logo-text">Zawia Media</span>
                                    </div>

                                    <button id="toggle-fold-aside-button" type="button" class="btn btn-icon d-none d-lg-block" data-fuse-aside-toggle-fold>
                                        <i class="icon icon-backburger"></i>
                                    </button>

                                </div>

                                <ul class="nav flex-column custom-scrollbar" id="sidenav" data-children=".nav-item">

                                    <li class="subheader">
                                        <span>Options</span>
                                    </li>


                                     <li class="nav-item" >


                                    <a class="nav-link ripple  collapsed" data-toggle="collapse" data-target="#pages" href="#" aria-expanded="false" aria-controls="collapse-ecommerce">  

                                     <i class="icon s-4 icon-tile-four"></i>
                                     <span>Pages</span>
                                    </a>


                                    
                                <ul  id="pages" class='collapse ' role="tabpanel" aria-labelledby="heading-images" data-children=".nav-item" >
                                    <li>
                                         <a class="nav-link" href="{{route('localization.viewPage')}}">

                                             <i class="icon s-4 icon-tile-four"></i>

                                            <span>Page Localization</span>
                                        </a>
                                     </li>

                                     <li>
                                         <a class="nav-link" href="{{route('page.viewPageBuilder4')}}">

                                             <i class="icon s-4 icon-tile-four"></i>

                                            <span> Page Builder </span>
                                        </a>
                                     </li>

                            
                                        
                                </ul>

                                       
                                    
                                 </li>


                                 <li class="nav-item" >


                                    <a class="nav-link ripple  collapsed" data-toggle="collapse" data-target="#navs" href="#" aria-expanded="false" aria-controls="collapse-ecommerce">  

                                     <i class="icon s-4 icon-tile-four"></i>
                                     <span>Navigations</span>
                                    </a>


                                    
                                <ul  id="navs" class='collapse ' role="tabpanel" aria-labelledby="heading-images" data-children=".nav-item" >
                                    <li>
                                         <a class="nav-link" href="{{route('sub_main_nav.show')}}">

                                             <i class="icon s-4 icon-tile-four"></i>

                                            <span> Sub Navigation</span>
                                        </a>
                                     </li>

                                     <li>
                                         <a class="nav-link" href="{{route('main_nav.show')}}">

                                             <i class="icon s-4 icon-tile-four"></i>

                                            <span>Main Navigations</span>
                                        </a>
                                     </li>

                                     <li class="nav-item" >

                                        <a class="nav-link" href="{{route('secondary_navigation.show')}}">

                                            <i class="icon s-4 icon-tile-four"></i>

                                            <span>Secondary Navigations</span>
                                        </a>
                                    
                                     </li>

                                        
                                </ul>

                                       
                                    
                                 </li>



                                    <li class="nav-item" role="tab" id="heading-dashboards">

                                        <a class="nav-link " href="{{action('NewsContoller@viewDashboard')}}">

                                            <i class="icon s-4 icon-tile-four"></i>

                                            <span>Dashboards</span>
                                        </a>
                                    
                                    </li>




                                   





                                    <li class="nav-item" role="tab" >

                                        <a class="nav-link " href="{{action('NewsContoller@viewNewsPage')}}">

                                            <i class="icon s-4 icon-tile-four"></i>

                                            <span>News</span>
                                        </a>
                                    
                                    </li>


                                    <li class="nav-item" >

                                        <a class="nav-link" href="{{action('VideoController@viewVideoPage')}}">

                                            <i class="icon s-4 icon-tile-four"></i>

                                            <span>Videos</span>
                                        </a>
                                    
                                    </li>

                                   



                                    <li class="nav-item" role="tab">

                                <a class="nav-link ripple  collapsed" data-toggle="collapse" data-target="#gallery" href="#" aria-expanded="false" aria-controls="collapse-ecommerce">

                                    <i class="icon s-4 icon-tile-four"></i>

                                    <span>Gallary</span>
                                </a>
                                <ul id="gallery" class='collapse ' role="tabpanel" aria-labelledby="heading-images" data-children=".nav-item">

                                    
                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="{{action('ImageController@viewImagePage')}}">

                                            <span>Page Images</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="{{action('ImageController@viewImageSlider')}}" >

                                            <span>Slider Images</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                        
                         <li class="nav-item" role="tab" >

                                        <a class="nav-link " href="{{route('weather.view_Weather_Page')}}">

                                            <i class="icon s-4 icon-tile-four"></i>

                                            <span>Weather</span>
                                        </a>
                                    
                         </li>


                          <li class="nav-item" role="tab" >

                                        <a class="nav-link " href="{{route('currency.view_currency_Page')}}">

                                            <i class="icon s-4 icon-tile-four"></i>

                                            <span>Currrency</span>
                                        </a>
                                    
                         </li>


                        <li class="nav-item" role="tab">

                                <a class="nav-link ripple  collapsed" data-toggle="collapse" data-target="#about" href="#" aria-expanded="false" aria-controls="collapse-ecommerce">

                                    <i class="icon s-4 icon-tile-four"></i>

                                    <span>About Us</span>
                                </a>
                                <ul id="about" class='collapse ' role="tabpanel" aria-labelledby="heading-images" data-children=".nav-item">

                                    
                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="{{action('FrontendController@viewComment')}}">

                                            <span>User Messages</span>
                                        </a>
                                    </li>

                                   

                                </ul>
                            </li>


    


                                    <li class="nav-item" role="tab">

                                <a class="nav-link ripple  collapsed" data-toggle="collapse" data-target="#setting" href="#" aria-expanded="false" aria-controls="collapse-ecommerce">

                                    <i class="icon s-4 icon-tile-four"></i>

                                    <span>Setting</span>
                                </a>
                                <ul id="setting" class='collapse ' role="tabpanel" aria-labelledby="heading-images" data-children=".nav-item">

                                    
                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="{{action('NewsContoller@viewNewCatagory')}}">

                                            <span>News Catagory</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="{{action('VideoController@CatagoryPage')}}" >

                                            <span> Video Catagory</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>


                                </ul>
                            </div>
                        </div>
                    </aside>
                    <div class="content-wrapper">
                        


                    <nav id="toolbar" class="fixed-top bg-white">

                            <div class="row no-gutters align-items-center flex-nowrap">

                                <div class="col">

                                    <div class="row no-gutters align-items-center flex-nowrap">

                                        <button type="button" class="toggle-aside-button btn btn-icon d-block d-lg-none" data-fuse-bar-toggle="aside">
                                            <i class="icon icon-menu"></i>
                                        </button>

                                    </div>
                                </div>

                                <div class="col-auto">

                                    <div class="row no-gutters align-items-center justify-content-end">

                                       
                                      <!--   <div class="toolbar-separator"></div> -->

                                            @hasrole('admin')

                                        <div class="toolbar-separator"></div>




                 <ul class="navbar-nav mx-5">
                                                 <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-capitalize " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Manage user <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown">
                                   
                                   <a class="dropdown-item" href="{{ route('users.index') }}">  <i class="icon-logout"></i> Users
                                   </a>

                                    <a class="dropdown-item" href="{{ route('users.viewRoles') }}"

                                    >
                                        <i class="icon-logout"></i>

                                       Users Role

                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                 </ul>
                                         <div class="toolbar-separator"></div>
                                             @endhasrole 

            <ul class="navbar-nav mx-5">

                        @guest
                            
                           
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-capitalize " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"

                                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                        <i class="icon-logout"></i>

                                        {{ __('Logout') }}

                                    </a>

                                  <!--   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> -->
                                </div>
                            </li>
                        @endguest
            </ul>

                       
                                    <div style="visibility: hidden;"> 
                                            <li> 
                                             
                                            </li>
                                    </div>
                                        <div class="toolbar-separator"></div>

                                        
                                    </div>
                                </div>
                            </div>
                        </nav>
                        
                          
                        <div class="content" id="app">

                                           @yield('model')
                                           
                            <div class="doc forms-doc page-layout simple full-width" >

                                    
                                <!-- HEADER -->
                                <!-- <div class="page-header bg-secondary text-auto p-6 row no-gutters align-items-center justify-content-between">
                                    <h2 class="doc-title" id="content">Zawia Media
                                        <div>
                                            <i class="fas fa-info-circle"></i>

                                        </div>


                                     </h2>

                                </div> -->
                                <!-- / HEADER -->

                                <!-- CONTENT -->
                                <div class="page-content p-6" >
                                    @yield('graph')
                                    <div class="content container">
                                        <div class="row">

                                         
                                             @yield('data')
                                            

                                        </div>
                                    </div>
                                </div>
                            <!-- CONTENT -->
                        </div>

                    </div>

                    

      

 


                </div>
            </div>
        <!-- </div> -->
    </main>
 

</div>
            <!-- sortable plugin-->
            <script type="text/javascript" src="{{asset('public/assets/vendor/prettify/Sortable.js')}}"></script>
            <script type="text/javascript" src="{{asset('public/assets/vendor/prettify/prettify.js')}}"></script>
            <script type="text/javascript" src="{{asset('public/assets/vendor/prettify/run_prettify.js')}}"></script>
            <script type="text/javascript" src="{{asset('public/assets/vendor/prettify/app.js')}}"></script>

             <!-- sortable plugin end -->

            <script type="text/javascript">
              $('#sample-data-table').DataTable({
               responsive: true
              });

            </script>
           
    </body>

   
    </html>