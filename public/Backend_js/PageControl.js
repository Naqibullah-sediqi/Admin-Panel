

$(document).ready(function(){


  $(document).on('click','.highlight_colors',function(){


  	var everyId =	$(this).attr('id');
  	
          $('.resetColor').css({'color':'black','border':'none','padding-bottom':'0'});

          $('#'+everyId).css({'color':'orange','border-bottom':'2px solid black','padding-bottom':'0'});
       

  });
   
    });