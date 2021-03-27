   

   
  

  function validateFooterProgram2()
  {
               var element = document.getElementById('footerProgramId2');



             if(element.checked){

             document.getElementById('div_footer_program2').className+=" bg-success ";
             document.getElementById('footer_programs_selection').style.display="block";

             
  
    
             }

             else
             {
                document.getElementById('div_footer_program2').classList.remove('bg-success');
                document.getElementById('footer_programs_selection').style.display="none";

             }
             
               

               



  }

  function validateZawiaProgram2()
  {
               var element = document.getElementById('zawiaProgramId2');

          

             if(element.checked){

             document.getElementById('div_zawia_program2').className+=" bg-success "
  
    
             }

             else
             document.getElementById('div_zawia_program2').classList.remove('bg-success');
               


  }


function validateNews_details()
  {
               var element = document.getElementById('news_details_id');

          

             if(element.checked){

             document.getElementById('news_details_div').className+=" bg-success "
  
    
             }

             else
             document.getElementById('news_details_div').classList.remove('bg-success');
               


  }






   function validateFooter2()
  {
               var element = document.getElementById('footer_checkbox2');

              if(element.checked)
               {
             
              document.getElementsByClassName('footer_program')[0].style.display='block';
               }
              else{
              document.getElementsByClassName('footer_program')[0].style.display='none';
             
              }

             var element = document.getElementById('footer_checkbox2');

             if(element.checked){

             document.getElementById('div_footer2').className+=" bg-success "
  
    
             }

             else
             document.getElementById('div_footer2').classList.remove('bg-success');
  }



 function validHeader2()
  {

   var element = document.getElementById('co2');

   if(element.checked){
    document.getElementById('di2').className+=" bg-success "

   }

   else
    document.getElementById('di2').classList.remove('bg-success');

 }

 function validHeader22()
  {

   var element = document.getElementById('co22');

   if(element.checked){
    document.getElementById('di22').className+=" bg-success "

   }

   else
    document.getElementById('di22').classList.remove('bg-success');

 }


function validLocalization2()
  {

   var element = document.getElementById('data_local2');

   if(element.checked){

   document.getElementById('div_local2').className+=" bg-success "

   }

   else
    document.getElementById('div_local2').classList.remove('bg-success');

 }



function validMainNavigation2()
  {

   var element = document.getElementById('data_main_nav2');

   if(element.checked){

    document.getElementById('div_main_nav2').className+=" bg-success "
  
 
   }

   else
    document.getElementById('div_main_nav2').classList.remove('bg-success');

 }


function validSlider2()
  {

   var element = document.getElementById('data_slider2');

   if(element.checked){
   document.getElementById('div_slider2').className+=" bg-success "
  
  
   }

   else
    document.getElementById('div_slider2').classList.remove('bg-success');

 }




function validaHeadline2()
  {

   var element = document.getElementById('data_headline2');

   if(element.checked){

   document.getElementById('div_headline2').className+=" bg-success "
  
    
   }

   else
    document.getElementById('div_headline2').classList.remove('bg-success');

 }


function validNavigation2()
  {

   var element = document.getElementById('data_second_nav2');

   if(element.checked){

   document.getElementById('div_second_nav2').className+=" bg-success "
  
    
   }

   else
    document.getElementById('div_second_nav2').classList.remove('bg-success');

 }



function validNews2()
  {

   var element = document.getElementById('data_news2');

   if(element.checked){

   document.getElementById('div_news2').className+=" bg-success "
  
    
   }

   else
    document.getElementById('div_news2').classList.remove('bg-success');

 }



 function validVideo2()
  {

   var element = document.getElementById('data_video2');

   if(element.checked)
   {

   document.getElementById('div_video2').className+=" bg-success "; 
   }

   else
   {
     document.getElementById('div_video2').classList.remove('bg-success');
   
   }

 }

 function validBreaking2()
  {

   var element = document.getElementById('data_breaking2');

   if(element.checked){

   document.getElementById('div_breaking2').className+=" bg-success "
  
    
   }

   else
    document.getElementById('div_breaking2').classList.remove('bg-success');

 }


 function validSideBar2()
  {

   var element = document.getElementById('data_sideBar2');

   if(element.checked){

   document.getElementById('div_sidebar2').className+=" bg-success "
  
    
   }

   else
    document.getElementById('div_sidebar2').classList.remove('bg-success');

 }


 function validZawia2()
  {

   var element = document.getElementById('data_zawia2');

   if(element.checked){

   document.getElementById('div_zawia2').className+=" bg-success "
  
    
   }

   else
    document.getElementById('div_zawia2').classList.remove('bg-success');

 }

 function valideDailyContent()
  {

   var element = document.getElementById('daily_content_input');

   if(element.checked){

   document.getElementById('dail_content_id').className+=" bg-success "
  
    
   }

   else
    document.getElementById('dail_content_id').classList.remove('bg-success');

 }


  function validateBusinessNews()
  {

   var element = document.getElementById('business_news_input');

   if(element.checked)
   {

   document.getElementById('business_news_id').className+=" bg-success "
  
    
   }

   else
    document.getElementById('business_news_id').classList.remove('bg-success');

 }


function validAds2()
  {

   var element = document.getElementById('data_ads2');

   if(element.checked){

   document.getElementById('div_ads2').className+=" bg-success "
  
    
   }

   else
    document.getElementById('div_ads2').classList.remove('bg-success');

 }


function showAddButton(){

 $page_name = document.getElementById('name_of_page').value;
 $route = document.getElementById('name_of_routes').value;
 $description = document.getElementById('name_of_description').value;
  

    if($page_name != "" && $route != "" && $description != "")
    {
    document.getElementById('add_button').style.display='flex';
  
    }
}









