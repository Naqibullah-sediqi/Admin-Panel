@extends('layouts/Master')


 @section('backendFile')

   <script  src="{{asset('public/Backend_js/mainSlider.js') }}"></script>
   <script type="text/javascript" src="{{asset('public/Backend_js/selectColor.js') }}"></script>
 
 
 <script type="application/javascript">
   
   


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







 /////////////////////////////// end update
}
 </script>
    
 
 @endsection

   @section('model')
                                            
            <!-- File too large warning model-->


            <div id="large_file_model" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                              <div class="modal-header bg-secondary">
                                <i class="fas fa-info-circle"></i>

                                                            <h4 class="modal-title" id="mySmallModalLabel">File Upload Warning
                                                            </h4>

                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                       </div>
                                
                                <div class="modal-body">
                                   
                                   <div class="text-center my-5">
                                     
                                       <h4> Please Try Again !
                                    </h4>
                                    <p>The file size is too big , Please enter within allowed size</p>

                                   </div>
                                 
 

                                   

                                    <hr class="">
                                                  <div class="text-center">
                                                     <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>   
                                                  </div>
                                                              
                                     

                                   </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- file too large model finished-->


            <!-- delete model start here-->


            <div id="Delete_model" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                              <div class="modal-header bg-secondary">
                                <i class="fas fa-info-circle"></i>

                                                            <h4 class="modal-title" id="mySmallModalLabel">Delete Confirmation
                                                            </h4>

                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                       </div>
                                
                                <div class="modal-body">
                                   
                                   <div class="text-center my-5">
                                     
                                       <h4> Are you Sure ?
                                    </h4>
                                    <p>You will not be able to recover this record!</p>

                                   </div>
                                 
 
                                   <form method="Post" action="{{action('ImageController@removeImageSlider')}}">
                                     {{csrf_field()}}
                                     <input type="text" name="image_delete_input_id" id="image_id_delete_field" value="">

                                    <hr class="">
                                                   <div class="text-center mt-5"> 

                                                                     <button class="btn btn-danger " type="submit"> Yes ,I am </button>


                                                                   <button type="button" class="btn btn-success" data-dismiss="modal">No</button>

                                                                </div>
                                                                 
                                     

                                   </form>
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- delete model end-->


                                                <!-- start model content-->
                                              
                                                <!-- adding started-->                                        
                                                     <div id="insertSliderimage" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                              <div class="modal-dialog modal-md">
                                                                  <div class="modal-content">

                                                                      <div class="modal-header">
                                                                          <h4 class="modal-title" id="myLargeModalLabel">New Image</h4>
                                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                          </button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                        
                                                                          <!-- insert form-->

                                                @if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)

                                               
<script type="application/javascript">
$(function() {
    $('#insertSliderimage').modal('show');
});
</script>
@endif 



                                                @if(!empty(Session::get('file_error')) && Session::get('file_error') == 5)

                                               
<script type="application/javascript">
$(function() {
    $('#large_file_model').modal('show');
});
</script>
@endif 
                                                      <div class="source-preview-wrapper">
                                                          <div class="preview">
                                                              <div class="preview-elements">
                                                                  

                                                                  <div class="text-center text-danger font-weight-bold mt-5" id="message_flash2">  
                                                
                                                                     @if(Session::has('Warning'))
                                                                       {{session::get('Warning')}}
                                                                     @endif
                                                                 </div>


                                                                  <form method="Post" action="{{action('ImageController@InsertSliderImage')}}" enctype="multipart/form-data" >
                                                                     {{csrf_field()}}

                                                                     <!-- this is hidden id -->
                                                                     <input type="hidden" name="image_id_number" value="" id="image_id_field">
                                                                      <div class="row mt-5">
                                                                        
                                                            
                                                                
                                                                <div class="col-md-12 mb-5 mt-5  input-group">
                                                                           




   <input id='fileid_link' type='file' hidden onchange="changing_data();" name="link_input" />
   <span class="input-group-btn  ml-0 mr-0 mb-0">
   <input  class="btn btn-secondary" id='button_select_link' type='button' onclick="openDialog();" value="Browse">
 </span>
 <input  type="text" name="" class="form-control is-valid pl-1" id="path_link" placeholder="Select image link " onclick="openDialog();">
 
 @if($errors->has('user_info_input') || $errors->has('organization_input') || $errors->has('description_input') || $errors->has('thumb_path_input') || $errors->has('link_input'))

 <div class="text-danger mt-3 col-md-12 mt-3"> {{$errors->first('link_input')}} (Max : 2MB)</div>
@endif

            

                                                             
                                                                          </div>
                                                                        
                                                               
                                                                      
                                                                   </div>
                                                                   <div class="row mt-5">
                                                                    
                                                                 <div class="col-md-12 mb-3 mt-5">

                                                                             <label for="user_info">User </label>
                                                          <select class="form-control is-valid selectColor"
                                                          name="user_info_input" id="user_info" >

                                                          @if(old('user_info_input') =="")
                                                          <option value="" hidden selected disabled >Select current user</option>
                                                          @for($i = 0 ; $i < count($users) ; $i++)

                                                          <option value="{{$users[$i]->id}}">{{$users[$i]->name}}</option>

                                                          @endfor
                                                            


                                                          @else

                                                          @for($i = 0 ; $i < count($users) ; $i++)
                                                                @if(old('user_info_input') == ($users[$i]->id))
                                                                <option value="{{$users[$i]->id}}">{{$users[$i]->name}}</option>
                                                                @endif
                                                          @endfor

                                                          @for($i = 0 ; $i < count($users) ; $i++)
                                                            @if(old('user_info_input') != ($users[$i]->id))
                                                             <option value="{{$users[$i]->id}}">{{$users[$i]->name}}</option>
                                                            @endif
                                                          @endfor
                                                        @endif
                                                         </select>


                                                                           <div class="text-danger mt-3"> {{$errors->first('user_info_input')}}</div>
                                                                       </div>
                                                                        


                                                               
                                                              
                                                                  </div>



                    <div class="row mt-5">
                        <div class="col-md-12 mb-5">

                          <label for="user_info">Page To Link </label>

                          <select class="form-control selectColor is-valid" name="nav_link" id="link_info">
                            


                          @if(old('nav_link') =="")
                             
                            <option value="" hidden selected disabled >
                             Select Page For Link 
                           </option>

                            @for($i = 0 ; $i < count($pages) ; $i++)

                              <option value="{{$pages[$i]->route_name}}">
                                {{$pages[$i]->page_name}}
                              </option>

                            @endfor
                                                              
                          @else


                            @for($i = 0 ; $i < count($pages) ; $i++)
                             @if(old('nav_link') == ($pages[$i]->route_name))

                              <option value="{{$pages[$i]->route_name}}">
                                {{$pages[$i]->page_name}}
                              </option>

                              @endif
                            @endfor


                           @for($i = 0 ; $i < count($pages) ; $i++)
                            @if(old('nav_link') != ($pages[$i]->route_name))

                               <option value="{{$pages[$i]->route_name}}">
                                {{$pages[$i]->page_name}}
                              </option>

                            @endif
                           @endfor
                          @endif
                         </select>


                        <div class="text-danger mt-3"> 
                          {{$errors->first('nav_link')}}
                        </div>

                      </div>
                    </div>




                                                                   <div class="row mt-5">
                                                                       
                                                                   <div class="col-md-12 mb-3  ">
                                                                    <label for="description_info">Description</label>
                                                                   <input type="text" class="form-control is-valid mt-3" id="description_info" placeholder="Image description" name="description_input" value="{{old('description_input')}}">
                                                                    <div class="text-danger mt-3"> {{$errors->first('description_input')}}</div>
                                                                </div> 

                                                              
                                                              
                                                                  </div>


                                                                <div class="text-center mt-5"> 

                                                                     <button class="btn btn-success " type="submit"> Add </button>


                                                                   <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                                                                </div>
                                                                 

                                                                  
                                                              </form>

                                                          </div>
                                                      </div>
                                                      
                                                  </div>

   <!------------------------------------    end insert form---------------------------------------->



                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>

                                                          
                                                  <!-- end content-->



                                                  <!--  Update image Model start -->
                                                
                                                     <div id="update_image" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                              <div class="modal-dialog modal-md">
                                                                  <div class="modal-content">

                                                                      <div class="modal-header">
                                                                          <h4 class="modal-title" id="myLargeModalLabel">Update Slider Image</h4>
                                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                          </button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                      

                                                @if(!empty(Session::get('rt')) && Session::get('rt') == 5)

                                               
                                                    <script type="application/javascript">
                                                    $(function() {
                                                      $("#update_button").click();
                                                    });
                                                    </script>

                                                    
                                                    @endif 
                                                      <div class="source-preview-wrapper">
                                                          <div class="preview">
                                                              <div class="preview-elements">


                                                                 

                                                                <!--  <div class="text-danger mt-3"> {{$errors->first('thumb_path_input_update')}}</div> -->

                                             
                                               
                                                                  <form method="Post" autocomplete="off" action="{{action('ImageController@UpdateSlider')}}"
                                                                  enctype="multipart/form-data">
                                                                     {{csrf_field()}}

                                                                     <!-- this is hidden id -->
                                                                     <input  hidden type="text" name="image_id_number_update" value="" id="imageSliderId">
                                                                      <div class="row mt-5">
                                                                        

                                                                        <div class="col-md-12 mb-5 mt-5  input-group">
                                                                           


   <input id='fileid_link_update'  hidden type='file'  onchange="changing_data_update();" name="sliderImageUpdate" />
   <span class="input-group-btn  ml-0 mr-0 mb-0">
   <input  type="button" class="btn btn-secondary" id='button_select_link' type='button' onclick="openDialogUpdate();" value="Browse">
 </span>
 <input  type="text" name="SliderVirtualInput" class="form-control  pl-1 is-valid ImageSliderInput" id="path_link_update" placeholder="Select Image link "  onclick="openDialogUpdate();">

<input  type="text"  hidden name="oldSliderPic" class="form-control is-valid" id="old_path_link_update" placeholder="Choose image " >
                                                             

 @if($errors->has('user_info_input') || $errors->has('organization_input') || $errors->has('description_input') || $errors->has('thumb_path_input') || $errors->has('link_input'))

 <div class="text-danger mt-3 col-md-12 mt-3"> {{$errors->first('link_input')}} (Max : 2MB)</div>
@endif
                                                                          </div>
                                                                          
                                                              
                                                                      
                                                                   </div>
                                                                   <div class="row mt-5">
                                                                      

                                                                    <div class="col-md-12 mb-3 mt-5">
                                                                      @if($errors->has('user_update'))

                                                                              <label for="user_info">User </label>
                                                                              <select class="form-control is-valid" 
                                                                              name="user_update">
                                                                                <option></option>
                                                                               @for($i = 0 ; $i < count($users) ; $i++)

                                                          <option value="{{$users[$i]->id}}">{{$users[$i]->name}}</option>
                                                          @endfor
                                                                           </select>
                                                                           <div class="text-danger mt-3"> {{$errors->first('user_update')}}</div> 

                                                                            @else
                                                                            <label for="user_info">User </label>
                                                                              <select class="form-control is-valid" 
                                                                              name="user_update"
                                                                              id="user_info_upate_id">
                                                                               <option></option>
                                                         @for($i = 0 ; $i < count($users) ; $i++)

                                                          <option value="{{$users[$i]->id}}">{{$users[$i]->name}}</option>
                                                          @endfor
                                                                           </select>
                                                                            
                                                                            @endif
                                                                            
                                                          </div>

                                                        </div>

                                                            
                                                              <div class="row mt-5">
                                 <div class="col-md-12 mb-5">
                                    @if($errors->has('nav_link_update'))

                                      <label for="user_info">Linked Page </label>
                                    <select class="form-control is-valid" name="nav_link_update">
                                         
                                      @for($i = 0 ; $i < count($pages) ; $i++)

                                        <option value="{{$pages[$i]->route_name}}">{{$pages[$i]->page_name}}</option>

                                      @endfor
                                    </select>
                                            
                                    <div class="text-danger mt-3"> {{$errors->first('nav_link_update')}}</div> 

                                    @else
                                    <label for="user_info">Linked Page </label>
                                  <select class="form-control is-valid" name="nav_link_update" id="slider_link_update_id">
                                            
                                     @for($i = 0 ; $i < count($pages) ; $i++)

                                      <option value="{{$pages[$i]->route_name}}">{{$pages[$i]->page_name}}
                                      </option>

                                     @endfor
                                    </select>                              
                                   @endif
                                                                                
                                  </div>
                              </div>
                                                                   <div class="row ">
                                                                       

                                                                     @if($errors->has('des_update'))
 
                                                                    <div class="col-md-12  mb-5 mt-5">
                                                                    <label for="description_info">Description</label>
                                                                   <input type="text" class="form-control is-valid"  placeholder="Image description" name="des_update">
                                                                    <div class="text-danger mt-3"> {{$errors->first('des_update')}}</div>
                                                                </div> 

                                                                @else
                                                                 <div class="col-md-12  mb-5 mt-5">
                                                                    <label for="description_info">Description</label>
                                                                   <input type="text" class="form-control is-valid" id="description_info_update_id" placeholder="Image description" name="des_update">
                                                                  
                                                                </div> 
                                                                    @endif
             
                                                              
                                                              
                                                                  </div>


                                                                <div class="text-center mt-5"> 

                                                                     <button class="btn btn-success " type="submit"> Update </button>


                                                                   <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                                                                </div>
                                                                 

                                                                  
                                                              </form>

                                                          </div>
                                                      </div>
                                                      
                                                  </div>
                                                                            



                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>

                                                  <!-- update image Model end-->


  @endsection

  @section("data")  



                                                  <div class="col-md-12"> 

                                               <div class="example ">
                                                
                                                <span class="text-center text-success font-weight-bold mt-5" id="message_flash">  

                                                
                                                    @if(Session::has('Success'))
                                                      {{session::get('Success')}}
                                                    @endif
                                                </span>




                                                

                                                <div class="text-right mt-5 mr-5 mb-5"> 
                                                 <button  type="button" class="btn btn-secondary" data-toggle="modal" data-backdrop="static" data-target="#insertSliderimage" data-backdrop="static">
                                                              New Slider Image
                                                          </button>
                                                          </div>
                                             
                                               <div class="source-preview-wrapper">
                                                  <div class="preview">
                                                      <div class="preview-elements">

                                                          <table id="sample-data-table" class="table">
                                                              <thead>
                                                                  <tr>
                                                                    <th class="secondary-text">
                                                                          <div class="table-header">
                                                                              <span class="column-title">User</span>
                                                                          </div>
                                                                      </th>
                                                                      <th class="secondary-text">
                                                                          <div class="table-header">
                                                                              <span class="column-title">Image</span>
                                                                          </div>
                                                                      </th>
                                                                      

                                                                      <th class="secondary-text">
                                                                          <div class="table-header">
                                                                              <span class="column-title">Page To Link</span>
                                                                          </div>
                                                                      </th>
                                                                      
                                                                      <th class="secondary-text">
                                                                          <div class="table-header">
                                                                              <span class="column-title">Option</span>
                                                                          </div>
                                                                      </th>
                                                                     
                                                                  </tr>
                                                              </thead>
                                                              <tbody>


                                                                   @foreach($image_slider as $main_slider)
                                                                   <tr>
                                                                   <td>{{$main_slider->user_id}}</td>
                                                                   <td>{{$main_slider->Image_name}}</td>
                                                                   
                                                                   <td>{{$main_slider->page_id}}</td>
                                                                
                                                                   <td> <div class="btn-group">
                                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </button>
                                                   
                                                     <div class="dropdown-menu">
                                  <a class="dropdown-item  open" data-toggle="modal" data-backdrop="static" data-target="#update_image"

                                  data-des = "{{$main_slider->description}}"
                                   
                                    data-id = "{{$main_slider->id}}"
                                  
                                     data-us_id = "{{$main_slider->user_id}}"
                                     data-img_name = "{{$main_slider->Image_name}}"
                                     data-gen_name = "{{$main_slider->GeneratedName}}"
                                     data-route = "{{$main_slider->page_id}}"
                                     

                                  > <i class="mdi mdi-account-edit mr-2" id="update_button"></i>Update</a>


                                  <a class="dropdown-item  open" data-toggle="modal" data-backdrop="static" data-target="#Delete_model"
                                   data-id = "{{$main_slider->id}}"

                                  > <i class="mdi mdi-account-edit mr-2"></i>Delete</a>
                                                        
                                                    </div>
                                                </div>          </td>

                                                                   </tr>
                                                                   @endforeach
                                                                 

                                                              </tbody>
                                                          </table>

    
                                                      </div>
                                                  </div>
                                                </div> 
                                                </div>
                                                      </div>
   
   

  @endsection