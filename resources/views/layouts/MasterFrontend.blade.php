  
<!DOCTYPE html>
<html lang="en" >


<head>
<meta charset="utf-8">

<title> @yield('title') | Zawia Media </title>
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<meta name="title" content="@yield('meta_title') | Zawia Media" />
<!-- Stylesheets -->
<!-- {{asset('public/assets/icons/fuse-icon-font/style.css')}} -->
<link href="{{asset('public/Frontend/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('public/Frontend/css/style.css')}}" rel="stylesheet">
<link href="{{asset('public/Frontend/css/responsive.css')}}" rel="stylesheet"> 
<link href="{{asset('public/Frontend/css/owl.css')}}" rel="stylesheet">   
<!--Color Switcher Mockup-->
<link href="{{asset('public/Frontend/css/color-switcher-design.css')}}" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="{{asset('public/Frontend/css/color-themes/default-theme.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('public/Frontend/images/favicon1.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('public/Frontend/images/favicon1.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('public/Backend_css/PageStyles.css')}}" type="image/x-icon">
<!-- Responsive -->

<link rel="icon" href="{{asset('public\Frontend\css\awesome\all.css')}}" type="image/x-icon">


<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<script src="{{asset('public/Frontend/js/jquery.js')}}"></script> 
<script src="{{asset('public/Frontend/js/owl.js')}}"></script>

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->


<style type="text/css">
	
	@font-face{
		font-family: "fb";
		src:url('{{asset('public/Frontend/fonts/en/futura_medium_condensed_bt-webfont.woff')}}');
	}

    @font-face{
    font-family: "flight";
    src:url('{{asset('public/Frontend/fonts/en/futura_light_bt-webfont.woff')}}');
  }

	body , h1 ,h2,h3,h4,h5,h6,p,a{
		font-family: fb;

	}
</style>
</head>




<!-- <body style="zoom :100% !important;" > -->
  <body style="zoom :0.8 !important;" >

<div class="page-wrapper @if(Helper::validateLanguage() != 1) rtl @endif" >

    <!-- Preloader -->

  <div class="preloader"> </div>
    
    <div id="app" >

       @php

       echo $views;

       @endphp
       
    </div>

</div>
 <!-- end of page wrapper -->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-o-up"></span></div>

<!-- vue connection js -->
 <!-- <script  type="application/javascript" src="{{asset('public/js/app.js') }}" defer></script> 
  -->
  
  
<script src="{{asset('public/Frontend/js/popper.min.js')}}"></script>
<script src="{{asset('public/Frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/Frontend/js/jquery.fancybox.js')}}"></script>

<script src="{{asset('public/Frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('public/Frontend/js/wow.js')}}"></script>
<script src="{{asset('public/Frontend/js/appear.js')}}"></script>
<script src="{{asset('public/Frontend/js/mixitup.js')}}"></script>
<script src="{{asset('public/Frontend/js/script.js')}}"></script>

    <script src="{{asset('public/Frontend/js/script2.js')}}"></script>
   <script src="{{asset('public/Frontend/js/script3.js')}}"></script>
   <script src="{{asset('public/Frontend/js/script4.js')}}"></script> 

<!--  Color Setting           -->
<script src="{{asset('public/Frontend/js/color-settings.js')}}"></script>
<script src="{{asset('public/Frontend/js/typed.min.js')}}"></script> 
<link type="text/css" rel="stylesheet" href="{{asset('public/assets/icons/fuse-icon-font/style.css')}}">
<script src="{{asset('public/Backend_js/PageControl.js')}}"></script>
<script type="text/javascript">
     
      
    var typed = new Typed('.typing', {
  
   stringsElement: '.typed-strings',
  loop:true,
  typeSpeed: 30,
  // backSpeed:40,
  backDelay : 3000,

});

</script>

  
    





<script type="text/javascript">

    $(document).ready(function(){ 

    $(document).on('click','.fil',function(e){
        
    var catagory =  $(this).attr('data-catagory');
    
     console.log(latest_news_id);

        if(catagory != '')
        {

         
            $.ajax({
            url:"{{route('show.filter')}}",
            method:'GET',
            data:{catagory_name:catagory,id : '2'},
            dataType: "json",
            autoWidth : false,
            success:function(data)
            {
              $('#a').html(data.html);
              $('#latest_news_id').css('display','none');
              $('#blog_news_id').css('display','none');
              $('#business_news_id').css('display','none');
            },

            error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus + " in pushJsonData: " + errorThrown + " " + jqXHR);
        }
          });
    } });

      $(document).on('mouseover','.blog_image',function(e){

          $('.blog_id').css('color','#f9c945 ');
         
         
      });

       $(document).on('mouseout','.blog_image',function(e){

          $('.blog_id').css('color','#343a40');
         
      });
});

    /// setting color for selected navigation //


      $(document).on('click','.style-color',function(){

         $('.st5').css('color','blue');

      });

   
       var one = $('.tw').height();
       var two = $('.on').height();
       var three = $('.thr').height();

       var maxHeight = (Math.max(one,two,three));

       $('.tw , .on , .thr').css({height:maxHeight + "px"});
  
</script>


@yield('js')

 

</body>


</html>