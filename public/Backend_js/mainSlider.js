  

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
        var thumb_path = button.data('path');
        var image = button.data('img_name');
        var oldImage = button.data('gen_name');
        var usid = button.data('us_id');
        var description = button.data('des');
         var route = button.data('route');
        var modal = $(this);
     
     

             modal.find('.modal-body #user_info_upate_id').val(usid);
             modal.find('.modal-body #description_info_update_id').val(description);
             modal.find('.modal-body #imageSliderId').val(id);
             modal.find('.modal-body #slider_link_update_id').val(route);
             

              // this is for update input 
              
               modal.find('.modal-body .ImageSliderInput').val(image);
                modal.find('.modal-body #old_path_link_update').val(oldImage);
               





            
            
    });

$('#Delete_model').on('show.bs.modal',function(event){

   var button = $(event.relatedTarget);
   var id = button.data('id');
 var modal = $(this);
  modal.find('.modal-body #image_id_delete_field').val(id);
 

 });



    });

