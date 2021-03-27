
$(document).ready(function(){


    /* article.html code start  here */

	$(document).on('click','.dot-port-1',function(e)
    {
		$(".dot-port-2").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-3").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-4").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-5").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-1").css("background-color","rgb(170, 168, 168) !important");
		

		$("#first-port").css("display","flex");
		$("#second-port").css("display","none");
		$("#fifth-port").css("display","none");
		$("#fourth-port").css("display","none");
		$("#third-port").css("display","none");

	});	

    $(document).on('click','.dot-port-2',function(e)
    {
		$(".dot-port-1").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-3").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-4").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-5").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-2").css("background-color","rgb(170, 168, 168) !important");
		

		$("#first-port").css("display","none");
		$("#second-port").css("display","flex");
		$("#fifth-port").css("display","none");
		$("#fourth-port").css("display","none");
		$("#third-port").css("display","none");

	});

	$(document).on('click','.dot-port-3',function(e)
    {
		$(".dot-port-1").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-2").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-4").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-5").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-3").css("background-color","rgb(170, 168, 168) !important");


		$("#first-port").css("display","none");
		$("#second-port").css("display","none");
		$("#fifth-port").css("display","none");
		$("#fourth-port").css("display","none");
		$("#third-port").css("display","flex");
	
	});

	$(document).on('click','.dot-port-4',function(e)
    {
		$(".dot-port-1").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-2").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-3").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-5").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-4").css("background-color","rgb(170, 168, 168) !important");


		$("#first-port").css("display","none");
		$("#second-port").css("display","none");
		$("#third-port").css("display","none");
		$("#fifth-port").css("display","none");
		$("#fourth-port").css("display","flex");
		
	});

	$(document).on('click','.dot-port-5',function(e)
    {
		/// dot buttons action
		$(".dot-port-1").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-2").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-3").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-4").css("background-color","rgb(255, 251, 251) !important");
		$(".dot-port-5").css("background-color","rgb(170, 168, 168) !important");
		

		/// columns actions
		$("#first-port").css("display","none");
		$("#second-port").css("display","none");
		$("#third-port").css("display","none");
		$("#fourth-port").css("display","none");
		$("#fifth-port").css("display","flex");
	
	});


	/// list item actions

	// id="data-list-1"


	/// list item one colapse and open data
	$(document).on('click','#list-content-icon-1',function(e)
    {
		/// list content-1
		$("#list-content-1").css("display","none");
		$("#list-content-icon-1").css("display","none");
		$("#list-content-icon-1-open").css("display","flex");
		
	});

	$(document).on('click','#list-content-icon-1-open',function(e)
    {
		/// list content-1-open
		$("#list-content-1").css("display","flex");
		$("#list-content-icon-1-open").css("display","none");
		$("#list-content-icon-1").css("display","flex");
		
	});
	/// finished list item one


	/// list item two colapse and open data
	$(document).on('click','#list-content-icon-2',function(e)
    {
		/// list content-2
		$("#list-content-2").css("display","none");
		$("#list-content-icon-2").css("display","none");
		$("#list-content-icon-2-open").css("display","flex");
		
	});

	$(document).on('click','#list-content-icon-2-open',function(e)
    {
		/// list content-2-open
		$("#list-content-2").css("display","flex");
		$("#list-content-icon-2-open").css("display","none");
		$("#list-content-icon-2").css("display","flex");
		
	});
	// finished list item two


	/// list item three colapse and open data
	$(document).on('click','#list-content-icon-3',function(e)
    {
		/// list content-3
		$("#list-content-3").css("display","none");
		$("#list-content-icon-3").css("display","none");
		$("#list-content-icon-3-open").css("display","flex");
		
	});

	$(document).on('click','#list-content-icon-3-open',function(e)
    {
		/// list content-3-open
		$("#list-content-3").css("display","flex");
		$("#list-content-icon-3-open").css("display","none");
		$("#list-content-icon-3").css("display","flex");
		
	});
	// finished list item three


	/// custom scrollbar
	$(window).load(function () {
        $(".demo").customScrollbar();
        $("#fixed-thumb-size-demo").customScrollbar({fixedThumbHeight: 50, fixedThumbWidth: 60});
    });

    /* article.html code finished here  */

    /* Video.html js code start */

     var currentRow = 1 ;
    
    $(document).on('click','.right-arrow',function(e)
    {
        if(currentRow == 0){
        currentRow = 1;
        $(".first-feature").css("display","none");
        $(".second-feature").css("display","flex");
        $(".left-arrow").css("display","flex");
        }
    
        else if(currentRow == 1){
        currentRow = 2;
        $(".first-feature").css("display","none");
        $(".second-feature").css("display","none");
        $(".third-feature").css("display","flex");
        $(".right-arrow").css("display","none");
        }
    
        
    
    });	
    
    $(document).on('click','.left-arrow',function(e)
    {
        if(currentRow == 2){
            currentRow = 1;
        $(".first-feature").css("display","none");
        $(".second-feature").css("display","flex");
        $(".third-feature").css("display","none");
        $(".right-arrow").css("display","flex");
        }
    
        else if(currentRow == 1){
            currentRow = 0;
        $(".first-feature").css("display","flex");
        $(".second-feature").css("display","none");
        $(".third-feature").css("display","none");
        $(".left-arrow").css("display","none");
        }
    });	

	 /* Video.html js code finished */
	 

	 



	 /* find doctor search  start  */

	 $(document).on('click','.search-by-name',function(e)
	 {
		
		 $(".name-search").css("display","block");
		 $(".recipent-search").css("display","none");
		 $(".search-by-name-content").css("display","flex");
		 $(".search-by-specializtion-feedback").css("display","none");
		 $(".search-by-specialization-content").css("display","none");
		 $(".favourite-doctors-feedback").css("display","none");
		 $(".favorite-doctor-content").css("display","none");
		

		
		 $(this).css({"background-color":"rgb(192, 51, 51);","color":"white"});
		 $(".search-by-specialization").css({"background-color":"rgb(239,239,239);","color":"black"});
		 $(".search-favoritte").css({"background-color":"wrgb(239,239,239);hite","color":"black"});
		 
	 });

	 $(document).on('click','.search-by-specialization',function(e)
	 {
		
		 $(".name-search").css("display","none");
		 $(".recipent-search").css("display","block");
		 $(".search-by-name-content").css("display","none");
		 $(".search-by-specializtion-feedback").css("display","flex");
		 $(".search-by-specialization-content").css("display","flex");
		 $(".favourite-doctors-feedback").css("display","none");
		 $(".favorite-doctor-content").css("display","none");

		

		 $(this).css({"background-color":"rgb(192, 51, 51);","color":"white"});
		 $(".search-by-name").css({"background-color":"rgb(239,239,239);","color":"black"});
		 $(".search-favoritte").css({"background-color":"rgb(239,239,239);","color":"black"});
 
	 });

	 $(document).on('click','.search-favoritte',function(e)
	 {
		
		 $(".name-search").css("display","none");
		 $(".recipent-search").css("display","none");
		 $(".search-by-name-content").css("display","none");
		 $(".search-by-specializtion-feedback").css("display","none");
		 $(".search-by-specialization-content").css("display","none");
		 $(".favourite-doctors-feedback").css("display","flex");
		 $(".favorite-doctor-content").css("display","flex");

		

		 $(this).css({"background-color":"rgb(192, 51, 51);","color":"white"});
		 $(".search-by-specialization").css({"background-color":"rgb(239,239,239);","color":"black"});
		 $(".search-by-name").css({"background-color":"rgb(239,239,239);","color":"black"});

	 });
 
	 /** find doctor search finished */

	 /** favorite and unfavorite  */

	    $(document).on('click','.unfavorite-item',function(e)
		{
			$(".favorite-item").css("display","inline-block");
			$(".unfavorite-item").css("display","none");

		});

		$(document).on('click','.favorite-item',function(e)
		{
			$(".favorite-item").css("display","none");
			$(".unfavorite-item").css("display","inline-block");

		});

		/** favourite and unfavourite end */


		


		/****************** appointment history start  ***********/

		/** all */
		$(document).on('click','.all-appointment',function(e)
		{
		   
			$(".all-appointment").css({"background-color":"rgb(192, 51, 51);","color":"black"});
			$(".upcoming-appointment").css({"background-color":"white","color":"black"});
			$(".consulted-appointment").css({"background-color":"white","color":"black"});
			$(".cancelled-appointment").css({"background-color":"white","color":"black"});
			$(".missed-appointment").css({"background-color":"white","color":"black"});
			$(".rejected-appointment").css({"background-color":"white","color":"black"});
			$(".dropped-appointment").css({"background-color":"white","color":"black"});
			
		});


			/** upcoming */
			$(document).on('click','.upcoming-appointment',function(e)
			{
			   
				$(".upcoming-appointment").css({"background-color":"rgb(141,197,61);","color":"white"});
				$(".all-appointment").css({"background-color":"white","color":"black"});
				$(".consulted-appointment").css({"background-color":"white","color":"black"});
				$(".cancelled-appointment").css({"background-color":"white","color":"black"});
				$(".missed-appointment").css({"background-color":"white","color":"black"});
				$(".rejected-appointment").css({"background-color":"white","color":"black"});
				$(".dropped-appointment").css({"background-color":"white","color":"black"});

				
			});

			/** consulted */
			$(document).on('click','.consulted-appointment',function(e)
			{
			
				$(".consulted-appointment").css({"background-color":"rgb(109,208,246);","color":"white"});
				$(".all-appointment").css({"background-color":"white","color":"black"});
				$(".upcoming-appointment").css({"background-color":"white","color":"black"});
				$(".cancelled-appointment").css({"background-color":"white","color":"black"});
				$(".missed-appointment").css({"background-color":"white","color":"black"});
				$(".rejected-appointment").css({"background-color":"white","color":"black"});
				$(".dropped-appointment").css({"background-color":"white","color":"black"});
				
			});


			/** cancelled */
			$(document).on('click','.cancelled-appointment',function(e)
			{
			
				$(".cancelled-appointment").css({"background-color":"rgb(255,2,2);","color":"white"});
				$(".all-appointment").css({"background-color":"white","color":"black"});
				$(".upcoming-appointment").css({"background-color":"white","color":"black"});
				$(".consulted-appointment").css({"background-color":"white","color":"black"});
				$(".missed-appointment").css({"background-color":"white","color":"black"});
				$(".rejected-appointment").css({"background-color":"white","color":"black"});
				$(".dropped-appointment").css({"background-color":"white","color":"black"});
				
			});

			/** Missed */
			$(document).on('click','.missed-appointment',function(e)
			{
			
				$(".missed-appointment").css({"background-color":"rgb(252,209,22);","color":"white"});
				$(".all-appointment").css({"background-color":"white","color":"black"});
				$(".upcoming-appointment").css({"background-color":"white","color":"black"});
				$(".consulted-appointment").css({"background-color":"white","color":"black"});
				$(".cancelled-appointment").css({"background-color":"white","color":"black"});
				$(".rejected-appointment").css({"background-color":"white","color":"black"});
				$(".dropped-appointment").css({"background-color":"white","color":"black"});

			});

			/** rejected */
			$(document).on('click','.rejected-appointment',function(e)
			{
			
				$(".rejected-appointment").css({"background-color":"rgb(242,108,79);","color":"white"});
				$(".all-appointment").css({"background-color":"white","color":"black"});
				$(".upcoming-appointment").css({"background-color":"white","color":"black"});
				$(".consulted-appointment").css({"background-color":"white","color":"black"});
				$(".cancelled-appointment").css({"background-color":"white","color":"black"});
				$(".missed-appointment").css({"background-color":"white","color":"black"});
				$(".dropped-appointment").css({"background-color":"white","color":"black"});
				
				
			});

			/** dropped */

			$(document).on('click','.dropped-appointment',function(e)
			{
			
			
				$(".dropped-appointment").css({"background-color":"rgb(135,129,189);","color":"white"});
				$(".all-appointment").css({"background-color":"white","color":"black"});
				$(".upcoming-appointment").css({"background-color":"white","color":"black"});
				$(".consulted-appointment").css({"background-color":"white","color":"black"});
				$(".cancelled-appointment").css({"background-color":"white","color":"black"});
				$(".missed-appointment").css({"background-color":"white","color":"black"});
				$(".rejected-appointment").css({"background-color":"white","color":"black"});
				
				
			});

			

		/***************** appointment history finished here ***********/



		/****************** Medical History  ***************/

		$(document).on('click','.past-history',function(e)
		{
			
			
				$(".past-history").css({"background-color":"rgb(141,197,61);","color":"white"});
				$(".medication").css({"background-color":"rgb(231, 233, 229);","color":"black"});
				

				
				
		});

		
		$(document).on('click','.medication',function(e)
		{
			
			
				$(".medication").css({"background-color":"rgb(141,197,61);","color":"white"});
				$(".past-history").css({"background-color":"rgb(231, 233, 229);","color":"black"});
				
		});

		$(document).on('click','.alergy-items',function(e)
		{
			
			
				$(".alergy-items").css({"background-color":"rgb(141,197,61);","color":"white","font-weight":"bold"});
				$(".surgical-item").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
				$(".immun-item").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
				$(".past-diseas-item").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
				$(".family-history").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
				$(".item-type-name").html("New Alergy");

				
				$(".alergy-data").css("display","block");
				$(".surgical-data").css("display","none");
				$(".immunization-data").css("display","none");
				$(".family-past-data").css("display","none");
				$(".past-diseas-data").css("display","none");
				
				
		});

		$(document).on('click','.surgical-item',function(e)
		{
			
			
			$(".alergy-items").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
			$(".surgical-item").css({"background-color":"rgb(141,197,61);","color":"white","font-weight":"bold"});
			$(".immun-item").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
			$(".past-diseas-item").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
			$(".family-history").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});

			

			$(".alergy-data").css("display","none");
			$(".surgical-data").css("display","block");
			$(".immunization-data").css("display","none");
			$(".family-past-data").css("display","none");
			$(".past-diseas-data").css("display","none");
			
			
				
		});

		$(document).on('click','.immun-item',function(e)
		{
			
			
			$(".alergy-items").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
			$(".surgical-item").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
			$(".immun-item").css({"background-color":"rgb(141,197,61);","color":"white","font-weight":"bold"});
			$(".past-diseas-item").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
			$(".family-history").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});


			
			$(".alergy-data").css("display","none");
			$(".surgical-data").css("display","none");
			$(".immunization-data").css("display","block");
			$(".family-past-data").css("display","none");
			$(".past-diseas-data").css("display","none");
				
		});

		$(document).on('click','.past-diseas-item',function(e)
		{
			
			
				
			$(".alergy-items").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
			$(".surgical-item").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
			$(".immun-item").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
			$(".past-diseas-item").css({"background-color":"rgb(141,197,61);","color":"white","font-weight":"bold"});
			$(".family-history").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
				
			$(".alergy-data").css("display","none");
			$(".surgical-data").css("display","none");
			$(".immunization-data").css("display","none");
			$(".family-past-data").css("display","none");
			$(".past-diseas-data").css("display","block");

			
		});

		$(document).on('click','.family-history',function(e)
		{
			
			$(".alergy-items").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
			$(".surgical-item").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
			$(".immun-item").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
			$(".past-diseas-item").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
			$(".family-history").css({"background-color":"rgb(141,197,61);","color":"white","font-weight":"bold"});


			$(".alergy-data").css("display","none");
			$(".surgical-data").css("display","none");
			$(".immunization-data").css("display","none");
			$(".family-past-data").css("display","block");
			$(".past-diseas-data").css("display","none");

				
		});

		////// Life Style ///////////////////////////////

		$(document).on('click','.medication-items',function(e)
		{
			
			
			
			$(".social-activity-item").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
			$(".medication-items").css({"background-color":"rgb(141,197,61);","color":"white","font-weight":"bold"});
			$(".physical-item").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});

			$(".medication-data").css("display","block");
			$(".physical-data").css("display","none");
			$(".social-data").css("display","none");
			
				
		});


		$(document).on('click','.physical-item',function(e)
		{
			

			$(".medication-items").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
			$(".physical-item").css({"background-color":"rgb(141,197,61);","color":"white","font-weight":"bold"});
			$(".social-activity-item").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});

			$(".medication-data").css("display","none");
			$(".physical-data").css("display","block");
			$(".social-data").css("display","none");
		
			
			
				
		});


		$(document).on('click','.social-activity-item',function(e)
		{
			
		
			
			$(".medication-items").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});
			$(".social-activity-item").css({"background-color":"rgb(141,197,61);","color":"white","font-weight":"bold"});
			$(".physical-item").css({"background-color":" rgb(240, 234, 234);","color":"black","font-weight":"bold"});

			$(".medication-data").css("display","none");
			$(".physical-data").css("display","none");
			$(".social-data").css("display","block");
			
				
		});

		
		/**************  */



		/***************************** Model Surgical cure picture codes  ******************/

	
		$(document).on('click','.close-pic-1',function(e)
		{
			
			$("#newimageid1").attr("src","");
			$(".recent-pic-1").css("display","none");

			x = 0;
			a = 0;
			
				
		});

		$(document).on('click','.close-pic-2',function(e)
		{
			
			$("#newimageid2").attr("src","");
			$(".recent-pic-2").css("display","none");
			x = 1;
			b = 0;
				
		});

		$(document).on('click','.close-pic-3',function(e)
		{
			
			$("#newimageid3").attr("src","");
			$(".recent-pic-3").css("display","none");
				
			x = 2;
			c = 0;
		});

		$(document).on('click','.close-pic-4',function(e)
		{
			
			$("#newimageid4").attr("src","");
			$(".recent-pic-4").css("display","none");
			
			x = 3;
			d = 0;
				
		});

		$(document).on('click','.close-pic-5',function(e2)
		{
			
			
			$("#newimageid5").attr("src","");
			$(".recent-pic-5").css("display","none");
			
			x = 4;
			e = 0;
				
		});

		$(document).on('click','.close-pic-6',function(e)
		{
			
			$("#newimageid6").attr("src","");
			$(".recent-pic-6").css("display","none");
			
			x = 5;
			f = 0;
				
		});

		
 
		/***************************** Model Surgical cure picture codes  ******************/

	});


	

	// });
	
