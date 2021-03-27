 



   $(document).ready(function(){


  // showing warning message if it is empty page content

          setTimeout(function(){
          $('#message_flash2').remove();
           },5000);
  
   ///  programs visibility and show limited video start  /////////////////////////////////////


       $(document).on('click','#see_more_program',function(e)
       {

            var t =  $('#remaining_programs').css('display','block');
                     $('#see_more_program').css('display','none');
                     $('#back_option_of_program').css('display','block');
            });

        $(document).on('click','#back_option_of_program',function(e)
       {

          
              $('#back_option_of_program').css('display','none');
              $('#remaining_programs').css('display','none');
              $('#see_more_program').css('display','block');
       });


        $(document).on('click','#see_more_program2',function(e)
       {

               $('#remaining_programs2').css('display','block');
               $('#see_more_program2').css('display','none');
               $('#back_option_of_program2').css('display','block');

       });

        $(document).on('click','#back_option_of_program2',function(e)
       {

          
              $('#back_option_of_program2').css('display','none');
              $('#remaining_programs2').css('display','none');
              $('#see_more_program2').css('display','block');
       });


  ///  programs visibility and show limited video finished  //////////////////////////////////////




  ///  update programs visibility and show limited video   /////////////////////////////////////

   $(document).on('click','#see_more_program_update',function(e)
       {

                     $('#remaining_programs_update').css('display','block');
                     $('#see_more_program_update').css('display','none');
                     $('#back_option_of_program').css('display','block');
       });
  


   $(document).on('click','#back_option_of_program_update',function(e)
       {

          
                     $('#back_option_of_program_update').css('display','none');
                     $('#remaining_programs_update').css('display','none');
                     $('#see_more_program_update').css('display','block');
       });



  $(document).on('click','#see_more_program2_update',function(e)
       {

                     $('#remaining_programs2_update').css('display','block');
                     $('#see_more_program2_update').css('display','none');
                     $('#back_option_of_program2_update').css('display','block');
       });

  $(document).on('click','#back_option_of_program2_update',function(e)
       {

          
                     $('#back_option_of_program2_update').css('display','none');
                     $('#remaining_programs2_update').css('display','none');
                     $('#see_more_program2_update').css('display','block');
       });

  ///  finished update programs visibility and show limited video   /////////////////////////////////////



        $(document).on('click','.new_page',function(e)
       {

              $('.add_page').css('display','flex');
              $('.queried_data').css('display','none');
              $('.main_content').css('display','flex');
              $('.update_section').css('display','none');
              $('.show_added_data').attr('hidden','hidden');
              $('.add_page_update').css('display','none');

       });




        $(document).on('click','.page_update',function(e){

              $('.add_page_update').css('display','flex');
             
              $('.main_content').css('display','none');
              $('.update_section').css('display','none');
              $('.show_added_data').removeAttr('hidden');
              $('.getPageData').css('display','flex');

       });



 
    
   

});
