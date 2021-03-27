  
      $(document).ready(function(){

        setTimeout(function(){
          $('#message_flash').remove();
        },5000);


    $('#update_video').on('show.bs.modal',function(event){

      
        console.log('dfdfd');
        var button = $(event.relatedTarget);
      
        var id = button.data('id');
        var org = button.data('organization');
        var video_path = button.data('path');
        var usid = button.data('us_id');
        var videoDate = button.data('date');
        var key = button.data('keywords');

         var title = button.data('title');
        var catagory = button.data('catagory');
         var language = button.data('lang');



        var description = button.data('des');
        var modal = $(this);

        console.log(language);
     

             modal.find('.modal-body #user_info').val(usid);
             modal.find('.modal-body #video_link').val(video_path);
             modal.find('.modal-body #org_info').val(org);
             modal.find('.modal-body #description_info').val(description);
             modal.find('.modal-body #video_id_field').val(id);

             modal.find('.modal-body #title_update_info').val(title);
             modal.find('.modal-body #catagory_update_info').val(catagory);
             modal.find('.modal-body #Date_info_update').val(videoDate);
             modal.find('.modal-body #keywords').val(key);
             modal.find('.modal-body #lanuage_update_video').val(language); 
    });



     // $('#update_video_catagory').on('show.bs.modal',function(event){
  $('#update_video_catagory').on('show.bs.modal',function(event){


        
        var button = $(event.relatedTarget);
      
        var id = button.data('id');
        var catagory_name = button.data('name');
        var description = button.data('des');
        var language = button.data('lang');
        var modal = $(this);



        console.log(language);


             modal.find('.modal-body #catagory_name_id').val(catagory_name);
             modal.find('.modal-body #description_info').val(description);
             modal.find('.modal-body #video_id_field').val(id);
             modal.find('.modal-body #video_catagory_update_id').val(language);

    });


$('#Delete_model').on('show.bs.modal',function(event){


   var button = $(event.relatedTarget);
   var id = button.data('id');
   var modal = $(this);
   modal.find('.modal-body #video_id_delete_field').val(id);

 });






$('#clickme').click(function(){

  console.log('done3');
        $('#uploadme').click();
    });

    });


    
