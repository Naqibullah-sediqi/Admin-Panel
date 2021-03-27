  
      $(document).ready(function(){

        setTimeout(function(){
          $('#message_flash').remove();
        },5000);



     $('#main_nav_sub_menu').on('show.bs.modal',function(event){

      
        var button = $(event.relatedTarget);
        var name = button.data('name');
        var id = button.data('id');
        var description = button.data('des');
        var language = button.data('lang');
        var sub_nav_link = button.data('link');
        var nav_name = button.data('nav_name');
        var modal = $(this);
        


        


        modal.find('.modal-body #subNameUpdateId').val(name);
        modal.find('.modal-body #description_info_update').val(description);
        modal.find('.modal-body #sub_id').val(id);
        modal.find('.modal-body #nav_update_id').val(nav_name);
        modal.find('.modal-body #nav_language_update_id').val(language);  
        modal.find('.modal-body #nav_link_update_id').val(sub_nav_link); 
          
    });

     
$('#Delete_model_sub_navigation').on('show.bs.modal',function(event){

   var button = $(event.relatedTarget);
   var id = button.data('id');
 var modal = $(this);
  modal.find('.modal-body #sub_nav_id').val(id);

 }); });
