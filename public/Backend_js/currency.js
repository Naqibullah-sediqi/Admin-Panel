  
      $(document).ready(function(){

        setTimeout(function(){
          $('#message_flash').remove();
        },5000);



     $('#update_currency').on('show.bs.modal',function(event){

        var button= $(event.relatedTarget);
        var id  = button.data('id');
        var type  = button.data('type');
        var user_id    = button.data('user_id');
        var date  = button.data('date');
        var status  = button.data('status');
        var cashsel  = button.data('cs');
        var cashbuy  = button.data('cb');
        var language  = button.data('lang');
        var modal = $(this);
        
      

             modal.find('.modal-body #curreny_id_update').val(id);
             modal.find('.modal-body #data_update_id').val(date);
             modal.find('.modal-body #type_update_id').val(type);
             modal.find('.modal-body #route_name_update').val(user_id);
             modal.find('.modal-body #cash_sell_update_id').val(cashsel);
             modal.find('.modal-body #cash_buy_name_id').val(cashbuy);
             modal.find('.modal-body #currency_status_update_id').val(status);
             modal.find('.modal-body #currency_update_language').val(language);

            
    });


$('#Delete_model').on('show.bs.modal',function(event){

   var button = $(event.relatedTarget);
   var id = button.data('id');
  var modal = $(this);
  modal.find('.modal-body #curreny_id').val(id);
  console.log(id);

 }); });
