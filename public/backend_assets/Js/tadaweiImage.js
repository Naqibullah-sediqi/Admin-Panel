  

      $(document).ready(function(){

        // setTimeout(function(){
        //   $('#message_flash2').remove();
        // },3000);


        //  setTimeout(function(){
        //   $('#message_flash').remove();
        // },3000);




    $('.update-example-modal-lg').on('show.bs.modal',function(event){


   

        var button = $(event.relatedTarget);
        var id = button.data('id');
        var pathName = button.data('pathname');
        var name_val = button.data('name');
        var page_name_val = button.data('page_name');
        var titleVal = button.data('title');
        var subtitleVal = button.data('subtitle');
        var phoneNumberVal = button.data('phone');
        var descriptionVal = button.data('description');
        var modal = $(this);

        
        // var imgValu = '<img src="{{asset(\'public/backend_image/TadaweiSliderImages/3.jpg_1613976370.jpg\')}}">';
        var imgValu = '<img src="http://localhost/admin_panel/public/backend_image/TadaweiSliderImages/'+pathName+'">';


        $(".image_picture").html(imgValu);
     

        if(subtitleVal != null){
          $(".sub-title-side").css("display","block");
         

        }

        if(titleVal != null){
          $(".title-side").css("display","block");
        
          
        }

        
        if(phoneNumberVal != null){
          $(".phone-side").css("display","block");
         
          
        }
         
             modal.find('.modal-body #imageNameUpdateId').val(name_val);
             modal.find('.modal-body #relatedUpdate_page_id').val(page_name_val);
         
             modal.find('.modal-body #titleUpdateId').val(titleVal);
             modal.find('.modal-body #subTitleUpdateId').val(subtitleVal);
             modal.find('.modal-body #image_update_id').val(id);
             modal.find('.modal-body #ph_update_id').val(phoneNumberVal);
  
             modal.find('.modal-body image_path_id').val(pathName);
             modal.find('.modal-body #ImageDescId').val(descriptionVal);
             modal.find('.modal-body #old_image_id').val(pathName);

         
            
    });

$('.delete_image').on('show.bs.modal',function(event){


   var button = $(event.relatedTarget);
   var id = button.data('id');
   var modal = $(this);
   modal.find('.modal-body #image_delete_id').val(id);

 });


 $('.update-gallary').on('show.bs.modal',function(event){



  var button = $(event.relatedTarget);
  var id = button.data('id');
  var gallary_name = button.data('name');
  var gallary_path = button.data('pathname');
  var thumb_path = button.data('thumb_path');
  var date = button.data('date');
  var description = button.data('description');
  var old_path = button.data('gallary_old_path');
  var old_thumb = button.data('gallary_old_thumb_path');
  var modal = $(this);


  var imgValu = '<img src="http://localhost/admin_panel/public/backend_image/TadaweiGallary/'+gallary_path+'">';

  $(".image_picture").html(imgValu);

  var imgValu2 = '<img src="http://localhost/admin_panel/public/backend_image/TadaweiGallary/'+thumb_path+'">';

  
  $(".image_picture_thumb").html(imgValu2);

       modal.find('.modal-body #gallary_imageNameUpdate_id').val(gallary_name);
       modal.find('.modal-body .udpate_date').val(date);
       modal.find('.modal-body #ImageDescId').val(description);
       modal.find('.modal-body #gallary_image_id').val(id);
       modal.find('.modal-body #old_gallary_image_id').val(gallary_path);
       modal.find('.modal-body #old_gallary_image_thumb_id').val(thumb_path);
         
  });


  $('.delete_image_gallery').on('show.bs.modal',function(event){

    var button = $(event.relatedTarget);
    var id = button.data('id');
    var modal = $(this);
    modal.find('.modal-body #gallery_image_delete_id').val(id);
 
  });
 
  
  
});

