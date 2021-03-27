  
      $(document).ready(function(){

        setTimeout(function(){
          $('#message_flash').remove();
        },5000);


    $('#update_role').on('show.bs.modal',function(event){

      
      
      
        var button = $(event.relatedTarget);
        
        var name = button.data('name');
        var des = button.data('description');
        var id = button.data('id');
    
        var modal = $(this);
       

        

             modal.find('.modal-body #roleName').val(name);
             modal.find('.modal-body #decription_id').val(des);
             modal.find('.modal-body #roleIdName').val(id);
           
            
    });

    


$('#Delete_model').on('show.bs.modal',function(event){

   var button = $(event.relatedTarget);
   var id = button.data('id');
   var modal = $(this);
   modal.find('.modal-body #id_delete_model').val(id);

 });

    });
