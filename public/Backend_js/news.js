  
     



      $(document).ready(function(){

        setTimeout(function(){
          $('#message_flash').remove();
        },5000);


    $('#Update_News').on('show.bs.modal',function(event){

      
      
      
        var button = $(event.relatedTarget);
        var title = button.data('title');
        var id = button.data('id');
        var org = button.data('organization');
        var date = button.data('date');
        var link = button.data('link');
        var usid = button.data('us_id');
        var keyword = button.data('key');
        var youtube_id = button.data('nws_type_selection')

          var lang = button.data('language');
          var type = button.data('type');


         var hs = button.data('hot_story');
         var nb = button.data('newsbox');
        
        
         console.log(youtube_id);

        var description = button.data('des');
        var catagory_input = button.data('catagory');
        var video_id  = button.data('d');
        var modal = $(this);
       
             modal.find('.modal-body #title_info_update').val(title);
             modal.find('.modal-body #user_info_update').val(usid);
             modal.find('.modal-body #Date_info_update').val(date);
             // modal.find('.modal-body #link_info_update').val(link);
             modal.find('.modal-body #organization_info_update').val(org);
             modal.find('.modal-body #description_info_update').val(description);
             modal.find('.modal-body #news_id_field').val(id);
             modal.find('.modal-body #videoInputId').val(video_id);
             modal.find('.modal-body #catagory_data').val(catagory_input);
             modal.find('.modal-body #keywords').val(keyword);

             modal.find('.modal-body #news_type').val(type);
             modal.find('.modal-body #language_type').val(lang);

              modal.find('.modal-body #link_info_update').val("");
            
            if(youtube_id == "0")
            {   
               modal.find('.modal-body #nws_selection_update_id').val("Photo");
               modal.find('.modal-body #virtual_photo_input_id').val(link);
               modal.find('.modal-body #old_image_update_id').val(link);

               document.getElementById('photo_update_block').style.display = "block";
               document.getElementById('update_link').style.display = "none";
               
            }
            else
            {

               modal.find('.modal-body #link_info_update').val(link);
               modal.find('.modal-body #nws_selection_update_id').val("Youtube Link");
               document.getElementById('photo_update_block').style.display = "none";
               document.getElementById('update_link').style.display = "block";
      
            }

             if(hs == 1)
             modal.find('.modal-body #hot_story_update_id').attr('checked',true);

             else
             modal.find('.modal-body #hot_story_update_id').attr('checked',false);

             if(nb == 1)
             modal.find('.modal-body #news_box-update_id').attr('checked',true);
             else
             modal.find('.modal-body #news_box-update_id').attr('checked',false);
             
            
    });

     $('#Update_News_catagory').on('show.bs.modal',function(event){

      
        var button = $(event.relatedTarget);
        var title = button.data('title');
        var id = button.data('id');
        var description = button.data('des');
        var language = button.data('lang');


        var modal = $(this);
        
             modal.find('.modal-body #title_info_update').val(title);
             modal.find('.modal-body #description_info_update').val(description);
            // modal.find('.modal-body #CatagoryInputId').val(id);
             modal.find('.modal-body #catagory_id').val(id);
             modal.find('.modal-body #catagory_language_update').val(language);
            
    });


$('#Delete_model').on('show.bs.modal',function(event){

   var button = $(event.relatedTarget);
   var id = button.data('id');
   var modal = $(this);
   modal.find('.modal-body #news_id_field').val(id);

 });


$('#Delete_model_new-catagory').on('show.bs.modal',function(event){

   var button = $(event.relatedTarget);
   var id = button.data('id');
 var modal = $(this);
  modal.find('.modal-body #news_id_field').val(id);

 });




$('#btn_file').on('click',function(){

 $('#main_file').click();

});


$('#news_selection_id').on('change',function(){


  var value =  $('#news_selection_id').val();

  if(value == "Youtube Link")
  {

      $('#link_block').css('display','block');
      $('#photo_block').css('display','none');
  }
  else
  {

      $('#photo_block').css('display','block'); 
      $('#link_block').css('display','none');
  }

});



$('#nws_selection_update_id').on('change',function(){


  var value =  $('#nws_selection_update_id').val();

  if(value == "Youtube Link")
  {

      $('#update_link').css('display','block');
      $('#photo_update_block').css('display','none');
  }

  else
  {

      $('#photo_update_block').css('display','block'); 
      $('#update_link').css('display','none');
  }

});


$('#btn_file_update').on('click',function(){

 $('#main_update_file').click();




});

    });


  function changeValue(){

       var file_data = document.getElementById('main_file').value;
       var t = document.getElementById('virtual_photo_input').value = file_data; 

    }



  function changeUpdateValue(){


       var file_data2 = document.getElementById('main_update_file').value;
       var t = document.getElementById('virtual_photo_input_id').value = file_data2; 
       
    }


    