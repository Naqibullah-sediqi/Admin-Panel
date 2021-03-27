  
      $(document).ready(function(){

        setTimeout(function(){
          $('#message_flash').remove();
        },5000);



     $('#update_weather').on('show.bs.modal',function(event){

      

        var button= $(event.relatedTarget);

        var id  = button.data('id');
        var city  = button.data('city');
        var user_id    = button.data('user_id');
        var measurment  = button.data('measurement');
        var situation  = button.data('situation');
        var date  = button.data('date');
        var status  = button.data('status');
        var low_value  = button.data('low');
        var language  = button.data('lang');
        var modal = $(this);
      







             modal.find('.modal-body #weather_id').val(id);
             modal.find('.modal-body #data_update_id').val(date);
             modal.find('.modal-body #city_update_id').val(city);
             modal.find('.modal-body #measurement_update_id').val(measurment);
             modal.find('.modal-body #situation_update_id').val(situation);
             modal.find('.modal-body #weather_status').val(status);
             modal.find('.modal-body #update_language_weather').val(language);
             modal.find('.modal-body #low_measurement_update_id').val(low_value); 


             console.log(situation)
             
    });


$('#Delete_model').on('show.bs.modal',function(event){

   var button = $(event.relatedTarget);
   var id = button.data('id');
  var modal = $(this);
  modal.find('.modal-body #weather_id').val(id);
  console.log(id);

 }); });
