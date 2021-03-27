  
      $(document).ready(function(){

        setTimeout(function(){
          $('#message_flash').remove();
        },5000);



     $('#secnodary_nav_update').on('show.bs.modal',function(event){

      
        var button = $(event.relatedTarget);
        var name = button.data('name');
        var id = button.data('id');
        var description = button.data('des');
        var modal = $(this);
        
             modal.find('.modal-body #subNameUpdateId').val(name);
             modal.find('.modal-body #description_info_update').val(description);
             modal.find('.modal-body #catagory_id').val(id);
            
    });


$('#Delete_model_sub_navigation').on('show.bs.modal',function(event){

   var button = $(event.relatedTarget);
   var id = button.data('id');
 var modal = $(this);
  modal.find('.modal-body #sub_nav_id').val(id);

 }); });
