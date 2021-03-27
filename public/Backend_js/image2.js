
  
///////////// selecting full width pic
function openDialog() {
  document.getElementById('fileid_link').click();
}

function changing_data() {
 var file_data = document.getElementById('fileid_link').value;
 var t = document.getElementById('path_link').value = file_data;

}
///////////// end selecting full width picture


function openDialogThumb() {
  document.getElementById('fileid-thumb').click();
}



function changing_data_thumb() {
 var file_data = document.getElementById('fileid-thumb').value;
 var t = document.getElementById('path_thumb').value = file_data;


}


 ////////////////////// update /////////////////

function openDialogUpdate() {
  
 
  document.getElementById('fileid_link_update').click();
  // var id = document.getElementById('path_link_update').display.style='none';
  // console.log(id);

}




function changing_data_update() {
 var file_data = document.getElementById('fileid_link_update').value;
 var t = document.getElementById('path_link_update').value = file_data;

}
///////////// end selecting full width picture



function openDialogThumbUpdate() {
  document.getElementById('fileid-thumb_update').click();
}



 function changing_data_thumb_update() {
 var file_data = document.getElementById('fileid-thumb_update').value;
 var t = document.getElementById('thumb_update_path').value = file_data;

}

