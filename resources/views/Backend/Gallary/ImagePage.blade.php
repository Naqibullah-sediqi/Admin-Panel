@extends('layouts/Master')


@section('backendFile')

<script  src="{{asset('public/Backend_js/image.js') }}"></script>
<script type="text/javascript" src="{{asset('public/Backend_js/image2.js') }}"></script>
<script type="text/javascript" src="{{asset('public/Backend_js/selectColor.js') }}"></script>

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



       <form method="post" autocomplete="off" action="{{action('ImageController@deleteImage')}}">
         {{csrf_field()}}
         <input type="hidden" name="image_delete_input_id" id="image_id_delete_field">

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
<!-- adding image model -->

<?php 
$timezone = "Asia/Colombo";
date_default_timezone_set($timezone);
$today = date('Y-m-d');

?>
<div id="insert_image" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
            $('#insert_image').modal('show');
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


             <form method="Post" autocomplete="off" action="{{action('ImageController@insertImage')}}" enctype="multipart/form-data" >
               {{csrf_field()}}

               <!-- this is hidden id -->
               <input type="hidden" name="image_id_number" value="" id="image_id_field">
               <div class="row mt-5">



                <div class="col-md-12 mb-5 mt-5  input-group">


                 <input id='fileid_link' hidden type='file'  onchange="changing_data();" name="link_input" />
                 <span class="input-group-btn  ml-0 mr-0 mb-0">
                   <input  class="btn btn-secondary" id='button_select_link' type='button' onclick="openDialog();" value="Browse">
                 </span>
                 <input  type="text" name="" class="form-control is-valid pl-1" id="path_link" placeholder="Select image link " onclick="openDialog();">

                 @if($errors->has('user_info_input') || $errors->has('organization_input') || $errors->has('description_input') || $errors->has('thumb_path_input') || $errors->has('link_input'))

                 <div class="text-danger mt-3 col-md-12 mt-3"> {{$errors->first('link_input')}} (Max : 2MB)</div>
                 @endif




               </div>
               <div class="col-md-12  mt-5   input-group">


                 <input id='fileid-thumb' hidden type='file'   onchange="changing_data_thumb();" name="thumb_path_input" />
                 <span class="input-group-btn  ml-0 mr-0 mb-0">
                   <input  class="btn btn-secondary" id='buttonid_choose_thumb' type='button' onclick="openDialogThumb();" value="Browse">
                 </span>
                 <input  type="text" name="" class="form-control is-valid pl-1" id="path_thumb" placeholder="Thumbnail Image Path "  onclick="openDialogThumb();">

                 <div class="text-info mt-3 col-md-12 mt-3"> <span>The Thumbnail Image dimension Should be (385 x 450)</span></div>



                 @if($errors->has('thumb_path_input'))

                 <div class="text-danger mt-3 col-md-12 mt-3"> {{$errors->first('thumb_path_input')}} (Max :90kb)</div>
                 @endif

               </div>


             </div>

             <div class="row mt-5">

              <div class="col-md-12 mt-3 mb-3">
                <label for="Date">Date</label>

                @if(old('date_input') != "")
                <input type="date" class="form-control is-valid" id="Date_info" name="date_input" value="{{old('date_input')}}">

                @else

                <input type="date" class="form-control is-valid" id="Date_info" name="date_input" value="{{$today}}">

                @endif
                <div class="text-danger mt-3">   {{$errors->first('date_input')}}
                </div>
              </div> 



              <div class="col-md-12 mb-3 mt-5 ">
                <label for="org_info">Organization</label>
                <input type="text" class="form-control is-valid mt-3" id="org_info" placeholder="Organization Name"  name="organization_input" value="{{old('organization_input')}}">
                <div class="text-danger mt-3"> {{$errors->first('organization_input')}}</div>
              </div> 

            </div>
            <div class="row mt-5">

             <div class="col-md-12 mb-3  ">
              <label for="description_info">Title</label>
              <input type="text" class="form-control is-valid mt-3" id="description_info" placeholder="Image description" name="description_input" value="{{old('description_input')}}">
              <div class="text-danger mt-3"> {{$errors->first('description_input')}}</div>
            </div> 

             <div class="col-md-12 mb-3">


                                <label class="form-lable"> Language</label>
                                  
                              
                                <select class="form-control selectColor is-valid " id="page_language_id" name="page_language">


                                    @if(old('page_language') == "")
                                     <option value="" hidden selected disabled >Select Language</option>
                                                                       
                                      @foreach($lang as $lang_data)
                                      <option value="{{$lang_data->id}}">{{$lang_data->name}}</option>
                                      @endforeach



                                    @endif



                                </select>
                                  
                                <div class="text-danger mt-3" > 
                                    {{$errors->first('page_language')}}
                                </div>

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
        <h4 class="modal-title" id="myLargeModalLabel">Update Image</h4>
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






              <form method="Post" autocomplete="off" action="{{action('ImageController@updateImage')}}"
              enctype="multipart/form-data">
              {{csrf_field()}}

              <!-- this is hidden id -->
              <input type="hidden" name="image_id_number_update" value="" id="image_video_field">
              <div class="row mt-5">


                <div class="col-md-12 mb-5 mt-5  input-group">


                 <input id='fileid_link_update' hidden  type='file'  onchange="changing_data_update();" name="link_input_update" />
                 <span class="input-group-btn  ml-0 mr-0 mb-0">
                   <input  type="button" class="btn btn-secondary" id='button_select_link' type='button' onclick="openDialogUpdate();" value="Browse">
                 </span>
                 <input  type="text" name="virtual_link" class="form-control  pl-1 is-valid link_path_update_class" onclick="openDialogUpdate();" id="path_link_update" placeholder="Select Image link " >

                 <input  type="text" hidden name="old_link_path" class="form-control is-valid" id="old_path_link_update" placeholder="Choose image ">


                 @if($errors->has('link_input_update'))
                 <div class="text-danger mt-3 col-md-12 mt-3"> {{$errors->first('link_input_update')}} (Max : 2MB)</div>
                 @endif

               </div>
               <div class="col-md-12  mt-5   input-group">


                 <input id='fileid-thumb_update' hidden  type='file'   onchange="changing_data_thumb_update();" name="thumb_path_input_update" />
                 <span class="input-group-btn  ml-0 mr-0 mb-0">
                   <input  type="button" class="btn btn-secondary " id='buttonid_choose_thumb' type='button' onclick="openDialogThumbUpdate();" value="Browse">
                 </span>
                 <input  type="text" name="virtual_thumb" class="form-control  pl-1 is-valid thumb_path_update_class" id="thumb_update_path" placeholder="Choose image "  onclick="openDialogThumbUpdate();">
                 <input  type="text" hidden name="old_thumb_path" class="form-control is-valid" id="old_thumb_update_path" placeholder="Choose thumb image " >


                 @if($errors->has('thumb_path_input_update'))

                 <div class="text-danger mt-3 col-md-12 mt-3"> {{$errors->first('thumb_path_input_update')}} (Max :90kb)</div>
                 @endif



               </div>


             </div>
             <div class="row mt-5">


              <div class="col-md-12 mb-3 mt-3">
                <label for="Date"> Date </label>

                @if(old('date_input_update') != "")
                <input type="date" class="form-control is-valid" id="Date_info_update" name="date_input_update" value="{{old('date_input_update')}}">

                @else
                <input type="date" class="form-control is-valid" id="Date_info_update" name="date_input_update" >
                @endif
                <div class="text-danger mt-3"> {{$errors->first('date_input_update')}}</div>

              </div> 
              @if($errors->has('organization_input_update'))





              <div class="col-md-12  mb-5 mt-5">
                <label for="org_info">Organization</label>
                <input type="text" class="form-control is-valid"  placeholder="Organization Name"  name="organization_input_update">
                <div class="text-danger mt-3"> {{$errors->first('organization_input_update')}}</div>
              </div> 
              @else

              <div class="col-md-12  mb-5 mt-5">
                <label for="org_info">Organization</label>
                <input type="text" class="form-control is-valid" id="org_info_update" placeholder="Organization Name"  name="organization_input_update">

              </div> 


              @endif
            </div>
            <div class="row ">


             @if($errors->has('description_inpu_update'))

             <div class="col-md-12  mb-5 mt-5">
              <label for="description_info">Description</label>
              <input type="text" class="form-control is-valid"  placeholder="Image description" name="description_inpu_update">
              <div class="text-danger mt-3"> {{$errors->first('description_inpu_update')}}</div>
            </div> 

            @else
            <div class="col-md-12  mb-5 mt-5">
              <label for="description_info">Title</label>
              <input type="text" class="form-control is-valid" id="description_info_update_id" placeholder="Image description" name="description_inpu_update">

            </div> 
            @endif

            <div class="col-md-12 mb-5">

                                   <label class="form-lable"> Language</label>
                                  
                                  @if($errors->has('news_language'))

                                <select class="form-control selectColor is-valid " id="page_language_Update_id" name="image_language">


                                     <option value="" hidden selected disabled >Select Language</option>
                                                                       
                                      @foreach($lang as $lang_data)
                                      <option value="{{$lang_data->id}}">{{$lang_data->name}}</option>
                                      @endforeach

                                </select>
                                  <div class="text-danger mt-3"> {{$errors->first('news_language')}}</div>
                                   @else
                                  
                                   <select class="form-control selectColor is-valid " id="page_language_Update_id" name="image_language">


                                      <option value="" hidden selected disabled >Select Language</option>                                  
                                      @foreach($lang as $lang_data)
                                      <option value="{{$lang_data->id}}">{{$lang_data->name}}</option>
                                      @endforeach

                                </select>

                                 @endif

                              
                          </div>




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
   <button  type="button" class="btn btn-secondary" data-toggle="modal" data-backdrop="static" data-target="#insert_image" data-backdrop="static">
    Add Image
  </button>
</div>

<div class="source-preview-wrapper">
  <div class="preview">
    <div class="preview-elements">

      <table id="sample-data-table" class="table td-style">
        <thead>
          <tr>
           <th class="secondary-text">
            <div class="table-header">
              <span class="column-title">Images</span>
            </div>
          </th>
          <th class="secondary-text">
            <div class="table-header">
              <span class="column-title">Image Name</span>
            </div>
          </th>


          <th class="secondary-text">
            <div class="table-header">
              <span class="column-title">Thumbail</span>
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




       @foreach($image as $images)
       <tr>
         <td style="width: 130px !important;"><img src="{{asset('public/backend_image/thumbnail/'.$images->thumb_generated_name)}}" style="width: 70px;height: 90px;"></td>
         <td>{{$images->ImageName}}</td>
         <td>{{$images->thumbName}}</td>
         <td> <div class="btn-group">
          <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Action
          </button>

          <div class="dropdown-menu">
            <a class="dropdown-item  open" data-toggle="modal" data-backdrop="static" data-target="#update_image"

            data-des = "{{$images->title}}"

            data-date  =         "{{$images->date}}"
            data-organization =  "{{$images->orgaization}}"
            data-img =           "{{$images->ImageName}}"
            data-old_img =       "{{$images->GeneratedName}}"
            data-img_thumb =     "{{$images->thumbName}}"
            data-old_img_thumb = "{{$images->thumb_generated_name}}"
            data-img_id =        "{{$images->image_id}}"
            data-lang  =         "{{$images->language}}"
            data-id = "{{$images->image_id}}"

            > <i class="mdi mdi-account-edit mr-2" id="update_button"></i>Update</a>


            <a class="dropdown-item  open" data-toggle="modal" data-backdrop="static" data-target="#Delete_model"
            data-id = "{{$images->image_id}}"

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