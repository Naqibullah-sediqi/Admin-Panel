
    $(document).ready(function(){


 setTimeout(function(){
          $('#message_flash').remove();
        },3000);

 
$('#Delete_model').on('show.bs.modal',function(event){

   var button = $(event.relatedTarget);
   var id = button.data('id');
 var modal = $(this);
  modal.find('.modal-body #contact_id').val(id);

 });

    });
