  
      $(document).ready(function(){

        setTimeout(function(){
          $('#message_flash').remove();
        },5000);



     $('#secondary_nav_update').on('show.bs.modal',function(event){

      
        var button = $(event.relatedTarget);
        var name = button.data('name');
        var order = button.data('order');
        var news_name = button.data('news_name');
        var id = button.data('id');
        var lang = button.data('lang');
        var page = button.data('page');
        var related_news = button.data('related');
        var modal = $(this);


        modal.find('.modal-body #nav_name_update_id').val(name);
        modal.find('.modal-body #news_link_update_id').val(news_name);
        modal.find('.modal-body #sub_id').val(id);
        modal.find('.modal-body #order_update').val(order);
        modal.find('.modal-body #lang_update').val(lang);  
        modal.find('.modal-body #nav_link_update_id').val(page); 
        modal.find('.modal-body #related_news').val(related_news); 
        
          
          
    });

     
$('#Delete_model_sub_navigation').on('show.bs.modal',function(event){

   var button = $(event.relatedTarget);
   var id = button.data('id');
 var modal = $(this);
  modal.find('.modal-body #sub_nav_id').val(id);

 }); });
