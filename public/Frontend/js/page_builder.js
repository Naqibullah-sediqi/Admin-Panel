   

   
  

  function validateFooterProgram()
  {
               var element = document.getElementById('footerProgramId');

              if(element.checked)
               {
                 document.getElementById('FooterProgramData').style.display='block';
               }
               else
                 document.getElementById('FooterProgramData').style.display='none';
  }

  function validateZawiaProgram()
  {
               var element = document.getElementById('zawiaProgramId');

              if(element.checked)
               {
                 document.getElementById('zawiaProgramData').style.display='block';
               }
               else
                 document.getElementById('zawiaProgramData').style.display='none';
  }


   function validateFooter()
  {
               var element = document.getElementById('footer_checkbox');

              if(element.checked)
               {
              document.getElementsByClassName('footer_program')[1].style.display='block';
              document.getElementsByClassName('footer_program')[0].style.display='block';
               }
              else{
              document.getElementsByClassName('footer_program')[0].style.display='none';
              document.getElementsByClassName('footer_program')[1].style.display='none';
            }
  }



 function validColr()
  {

   var element = document.getElementById('co');

   if(element.checked){

    document.getElementById('di').style.backgroundColor="darkgreen";
  
    console.log("yes")
   }

   else
     document.getElementById('di').style.backgroundColor="white";

 }



