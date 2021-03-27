  

      $(document).ready(function(){

        setTimeout(function(){
          $('#message_flash2').remove();
        },3000);


         setTimeout(function(){
          $('#message_flash').remove();
        },3000);




    $('#update_image').on('show.bs.modal',function(event){

    
      
      


        var button = $(event.relatedTarget);
        var id = button.data('id');
        var org = button.data('organization');
        var thumb_path = button.data('path');
        var image = button.data('img');
        var oldImage = button.data('old_img');

        var image_thumb = button.data('img_thumb');

        var oldImage_thumb = button.data('old_img_thumb');

        var usid = button.data('us_id');
        var description = button.data('des');
        var lang = button.data('lang');
        var date = button.data('date');
        var modal = $(this);

             



             modal.find('.modal-body #user_info_upate_id').val(usid);
             modal.find('.modal-body #Date_info_update').val(date);
             // modal.find('.modal-body #thum_info_update_id').val(thumb_path);
             modal.find('.modal-body #org_info_update').val(org);
             modal.find('.modal-body #description_info_update_id').val(description);
             modal.find('.modal-body #image_video_field').val(id);
             modal.find('.modal-body #link_info_update').val(image);
              // this is for update input 
             modal.find('.modal-body .thumb_path_update_class').val(image_thumb);
             modal.find('.modal-body .link_path_update_class').val(image);
               // this is old data for update which is hidden
             modal.find('.modal-body #old_thumb_update_path').val(oldImage_thumb);
             modal.find('.modal-body #old_path_link_update').val(oldImage);

             modal.find('.modal-body #page_language_Update_id').val(lang);
            
    });

$('#Delete_model').on('show.bs.modal',function(event){

   var button = $(event.relatedTarget);
   var id = button.data('id');
 var modal = $(this);
  modal.find('.modal-body #image_id_delete_field').val(id);

 });


  

    });

