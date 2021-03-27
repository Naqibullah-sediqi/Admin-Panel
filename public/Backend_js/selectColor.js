
      $(document).ready(function(){
      	
 $('.selectColor').css('color','gray');
    $('.selectColor').change(function(){
      var current = $('.selectColor').val();
      
      if(current != 'null')
        $('.selectColor').css('color','gray');
      else
         $('.selectColor').css('color','gray');

    });


    $('.selectColorPageBuilder').css('color','white');
    $('.selectColorPageBuilder').change(function(){
      var current = $('.selectColor').val();
      
      if(current != 'null'){
        $('.selectColorPageBuilder').css('color','white');
      //  $('.selectColor').css('fontWeight','bold');
      }
      else
         $('.selectColorPageBuilder').css('color','white');

    });

});