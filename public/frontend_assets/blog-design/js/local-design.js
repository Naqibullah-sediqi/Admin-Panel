

{/* <link href="http://localhost/Tadawei.af/public/frontend_assets/blog-design/images/medical-icon/pres1.PNG" rel="stylesheet"> */}


var image = '<img class="repeat-icon" src="http://localhost/Tadawei.af/public/frontend_assets/blog-design/images/medical-icon/pres1.PNG" alt="" />'   //  your code here


var i = 1;                 
var divId = document.getElementById("icons-id");
// var image = '<img class="repeat-icon" src="images/medical-icon/pres1.PNG" alt="" />'   //  your code here
divId.innerHTML = image;
function myLoop() {        
  setTimeout(function() {  

    var image = '<img class="repeat-icon" src="http://localhost/Tadawei.af/public/frontend_assets/blog-design/images/medical-icon/pres'+i+'.PNG" alt="" />' 

  // var image = '<img class="repeat-icon" src="images/medical-icon/pres'+i+'.PNG" alt="" />'   //  your code here
   divId.innerHTML = image;

    i++;                    
    if (i <= 5) {          
      myLoop();            
    }else{
      i = 1;
      myLoop();
    }                  
  }, 2000)
}
myLoop();

	/**
	 To view image in magnnific-pop-up
	 */

	$(document).ready(function() {
		$('.image-link').magnificPopup({type:'image'});
	});

	$('.test-popup-link').magnificPopup({
		type: 'image'
		// other options
  });




  /// =================  dot slider =============================
  $(document).on('ready', function() {
    $(".vertical-center-4").slick({
      dots: true,
      vertical: false,
      centerMode: false,
      slidesToShow: 2,
      slidesToScroll: 1
    });
   
  });

  ///// ==================== end ==============================
  

