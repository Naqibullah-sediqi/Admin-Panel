  
      $(document).ready(function(){

        setTimeout(function(){
          $('#message_flash').remove();
        },5000);



     $('#update_pages').on('show.bs.modal',function(event){

        var button= $(event.relatedTarget);
        var variable  = button.data('vaiable');
        var english    = button.data('eng');
        var dari  = button.data('dari');
        var pashto  = button.data('pashto');
        var id  = button.data('id');
        var modal = $(this);
        
        
        console.log(variable,english,dari,pashto,id);






             modal.find('.modal-body .variable_update').val(variable);
             modal.find('.modal-body #eng_content_id').val(english);
             modal.find('.modal-body #dari_content_update_id').val(dari);
             modal.find('.modal-body #pashto_content_update_id').val(pashto);
             modal.find('.modal-body #page_id_update').val(id);

            
    });


$('#Delete_model_pages').on('show.bs.modal',function(event){

   var button = $(event.relatedTarget);
   var id = button.data('id');
  var modal = $(this);
  modal.find('.modal-body #page_delete_id').val(id);

 }); });
