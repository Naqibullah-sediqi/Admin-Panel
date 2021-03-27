  
      $(document).ready(function(){

        setTimeout(function(){
          $('#message_flash').remove();
        },5000);



     $('#update_main_navigation').on('show.bs.modal',function(event){

      
        var button= $(event.relatedTarget);
        var name  = button.data('name');
        var id    = button.data('id');
        var link  = button.data('link');
        var user  = button.data('user');
        var language  = button.data('lang');

        
        var modal = $(this);
        
        

             modal.find('.modal-body #nav_name_update_id').val(name);
             modal.find('.modal-body #nav_link_update_id').val(link);
             modal.find('.modal-body #user_info_update').val(user);
             modal.find('.modal-body #navigation_update_id').val(id);
             modal.find('.modal-body #nav_language_update_id').val(language);
        
            
    });


$('#Delete_model_navigation').on('show.bs.modal',function(event){

   var button = $(event.relatedTarget);
   var id = button.data('id');
  var modal = $(this);
  modal.find('.modal-body #main_nav_id').val(id);

 }); });
