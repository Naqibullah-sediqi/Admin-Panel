@extends('layouts/CMS_master')





@section('backendFile_css')


<link rel="stylesheet" type="text/css" href="{{asset('public/backend_assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
   
<link rel="stylesheet" type="text/css" href="{{asset('public/backend_assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">

<link href="{{asset('public/backend_assets/node_modules/wizard/steps.css')}}" rel="stylesheet">


<link rel="stylesheet" href="{{asset('public/backend_assets/node_modules/dropify/dist/css/dropify.min.css')}}">

<link href="{{asset('public/backend_assets/node_modules/switchery/dist/switchery.min.css')}}" rel="stylesheet" />

<link rel="stylesheet" href="{{asset('public/frontend_assets/blog-design/frontend-account/date-picker/css/persianDatepicker-lightorang.css')}}"/>


<style>
.select-value:invalid { color: gray !important;font-size: 14px !important; }
.weekly-border-feature{
	border-bottom: 2px solid crimson;
	border-bottom-right-radius: 20px;
	border-right: 2px solid red;
}
    </style>
@endsection


 
 @section('content_cms')
                                            
 <div class="row">

     <div class="col-12">
                       
        <div class="card">
                
            <div class="card-body">

                                
                <div class="text-right">

                                    
                    <a href=""  data-toggle="modal" data-target=".insertModel"  class="btn btn-insert-image text-light font-weight-bold" style="background-color:rgb(1,192,200);"> New Image</a>
                                   
                            
                </div>

                                
                <div class="table-responsive m-t-40">
                                 
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        
                        <thead>
                                           
                            <tr>

                                <th>Image NAME</th>
                                <th>Gallary Image</th>    
                                <th>Thumbnail</th>  
                                <th>Date</th>                       
                                <th>Description</th>
                                <th>Action</th>
                                                    
                            </tr>
                                        
                        </thead>  
                                
                        <tbody>

                        
                            @foreach($gallary_data as $image)
                            
                                <tr>
                                
                                    <td>{{$image->Image_name}}</td>
                                    <td style="width: 130px !important;"><img src="{{asset('public/backend_image/TadaweiGallary/'.$image->Image_path_GeneratedName)}}" style="width: 70px;height: 90px;"></td>
                                    <td style="width: 130px !important;"><img src="{{asset('public/backend_image/TadaweiGallary/'.$image->thumb_path_GeneratedName)}}" style="width: 70px;height: 90px;"></td>
                                    <td>{{$image->date}}</td>
                                    <td>{{$image->description}}</td>  

                                    <td> 

                                        <div class="btn-group">

                                            
                                            <button type="button" class="btn  dropdown-toggle" style="background-color:rgb(1,192,200);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>

                                            <div class="dropdown-menu">
                                              
                                            

                                                <a class="dropdown-item  open update-buttn" data-toggle="modal" data-backdrop="static" data-target=".update-gallary"

                                                data-name = "{{$image->Image_name}}"
                                                data-pathname = "{{$image->Image_path_GeneratedName}}"
                                                data-thumb_path = "{{$image->thumb_path_GeneratedName}}"
                                                data-date =  "{{$image->date}}"
                                                data-description = "{{$image->description}}"
                                    
                                                data-id = "{{$image->id}}"

                                                > <i class="feather-edit mr-2" id="update_button"></i>Update</a>

                                                <a class="dropdown-item  open" data-toggle="modal" data-backdrop="static" data-target=".delete_image_gallery"
                                                data-id = "{{$image->id}}"

                                                > <i class="feather-trash mr-2"></i>Delete</a>

                                            </div>
                                        
                                         </div>         
                                    
                                    </td>
                                    
                                </tr>
                                     
                            @endforeach

                                       
                        </tbody>
                                   
                    </table>
                               
                </div>
                          
            </div>
                       
        </div>
     
    </div>
 
</div>

  <!-- adding model here Model Code from here -->

<div class="modal insertModel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelGallary" aria-hidden="true" style="display: none;">
   
    <div class="modal-dialog modal-xl">

        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title" id="myLargeModalLabelGallary">Add New Gallary Image</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

            </div>

            <div class="modal-body">

            <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-body wizard-content ">

                              
                            
                                <form method="post" action="{{url('add-image-gallery')}}" class="tab-wizard vertical wizard-circle" enctype="multipart/form-data">

                                    {{csrf_field()}}

                                    <!-- Step 1 -->
                                    <h6>Add Image</h6>

                                    <section>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="gallaryId">Image Name :</label>
                                                    <input type="text" name="gallaryImage" class="form-control" id="gallaryId" placeholder="Image Name..."> </div>
                                            </div>

                                            <div class="col-lg-12">
                                                 <!-- <h4 class="card-title">Image Path</h4> -->
                                                <label >Image Path : <span class="text-danger">Max( 2MB )</span></label>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <input type="file" id="input-file-now-custom-1" name="gallary_image_path" class="dropify" data-default-file="{{asset('public/backend_assets/node_modules/dropify/src/images/test-image-1.jpg')}}" />
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                 <!-- <h4 class="card-title">Image Path</h4> -->
                                                <label >Thumbnail Image : <span class="text-danger">Max( 2MB )</span></label>

                                                <div class="card">

                                                    <div class="card-body">

                                                        <input type="file" id="input-file-now-custom-1" name="thumbnail_image" class="dropify" data-default-file="{{asset('public/backend_assets/node_modules/dropify/src/images/test-image-1.jpg')}}" />
                                                        
                                                    </div>

                                                </div>

                                            </div>
                                            
                                        <!-- </div> -->

                                    

                                            
                                    </section>
                                    <!-- Step 2 -->
                                    <h6>Gallary Details</h6>
                                    <section>
                                        <div class="row">

                                          <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="jobTitle1">Date :</label>

                                                    <input type="text" placeholder="Date" name="gallary_date" required id="datepicker" class="form-control">
                                                
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="shortDescription1">Image Description :</label>
                                                    <textarea name="imageDescription"  placeholder="Image Description..." id="imageDescription" rows="6" class="form-control"></textarea>
                                                </div>
                                            </div>

                                           
                                            <div class="col-md-3 offset-3 submit-btn-visibility" style="display:none;">
                                                <div class="form-group">
                                                     <button type="submit" class="btn btn-danger submit-btn text-right" >Submit</button>
                                                </div>
                                            </div>

                                        </div>

                                    </section>
                                   
                                   

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            
            </div>
            
            <!--<div class="modal-footer">
                  <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                </div> -->

           
            

       
        </div>
                                       
    </div>
                        
</div>
 
 <!-- End model code -->


 <!-- Updating Model here -->

 <div class="modal update-gallary" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
   
    <div class="modal-dialog modal-xl">

        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title" id="">Update Gallary Image</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

            </div>

            <div class="modal-body">

            <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-body wizard-content ">

                              
                            
                                <form method="post" action="{{url('gallary-update')}}" class="tab-wizard vertical wizard-circle" enctype="multipart/form-data">

                                {{csrf_field()}}


                                    <!-- Step 1 -->
                                    <h6>Update Image</h6>

                                    <section>

                                        <div class="row">


                                            <div class="col-md-12 d-none" >
                                                <div class="form-group">
                                                    <label for="gallary_image_id">Id :</label>
                                                    <input type="text" name="gallary_image_id_update" class="form-control" id="gallary_image_id"> </div>
                                            </div>

                                            <div class="col-md-12 d-none" >
                                                <div class="form-group">
                                                    <label for="old_gallary_image_id">old gallary image :</label>
                                                    <input type="text" name="old_gallary_image" class="form-control" id="old_gallary_image_id"> </div>
                                            </div>

                                            <div class="col-md-12 d-none" >
                                                <div class="form-group">
                                                    <label for="old_gallary_image_thumb_id">old gallary thumb image :</label>
                                                    <input type="text" name="old_gallary_image_thumb" class="form-control" id="old_gallary_image_thumb_id"> </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="gallary_imageNameUpdate_id">Image Name :</label>
                                                    <input type="text" name="gallary_imageNameUpdate" class="form-control" id="gallary_imageNameUpdate_id" placeholder="Image Name..."> </div>
                                            </div>


                                            <div class="col col-2 offset-10  mt-3">

                                            <button type="button" class="btn font-weight-bold update_image_btn text-light text-right"  style="background-color:rgb(1,192,200);">Update Image </button>
                                            
                                            </div>

                                            <div class="col-lg-6 image_update_material mb-5">
                                          
                                                    <label >Gallary Image </label>

                                                    <div class="card image_picture">
                                                        
                                                    </div>
                                                
                                                  
                                            </div>

                                            <div class="col-lg-6 image_update_material mb-5">
                                          
                                                    <label >Thumbnail Image </label>

                                                    <div class="card image_picture_thumb">
                                                        
                                                    </div>
                                                  
                                            </div>


                                           

                                            <div class="col-lg-12 image_div" style="display:none;" >
                                          
                                                     <label >Image Path : <span class="text-danger">Max( 2MB )</span></label>

                                                    <div class="card">
                                                        <div class="card-body">

                                                            <!-- <input type="file" id="image_path_id" name="slider_image_path" class="dropify" data-default-file="{{asset('public/backend_image/TadaweiSliderImages/3.jpg_1613976370.jpg')}}" /> -->
                                                            <input type="file" id="gallary_path_update_id" name="gallary_path_update" class="dropify" data-default-file="{{asset('public/backend_assets/node_modules/dropify/src/images/test-image-1.jpg')}}" />
                                                        
                                                        </div>
                                                    </div>
                                           </div>

                                           <div class="col-lg-12 thumb_div" style="display:none;" >
                                          
                                                    <label >Thumb Path : <span class="text-danger">Max( 2MB )</span></label>

                                                    <div class="card">
                                                        <div class="card-body">

                                                            <!-- <input type="file" id="image_path_id" name="slider_image_path" class="dropify" data-default-file="{{asset('public/backend_image/TadaweiSliderImages/3.jpg_1613976370.jpg')}}" /> -->
                                                            <input type="file" id="gallary_thumb_update_id" name="gallary_thumb_update" class="dropify" data-default-file="{{asset('public/backend_assets/node_modules/dropify/src/images/test-image-1.jpg')}}" />
                                                        
                                                        </div>

                                                    </div>
                                            </div>

                                        </div>

                                    </section>
                                    <!-- Step 2 -->

                                    <h6>Slider Details</h6>

                                    <section>

                                    <div class="row">

                                        <div class="col-md-12">

                                                <div class="form-group">
                                                    <label for="jobTitle1">Date :</label>

                                                    <input type="text" placeholder="Date of birth" name="gallary_date_update" required id="datepicker" class="form-control udpate_date">
                                                
                                                </div>
                                         </div>

                                        <div class="col-md-12 mt-2">

                                                <div class="form-group">

                                                    <label for="ImageDescId">Image Description :</label>

                                                    <textarea name="imageDescriptionUpdate"  placeholder="Image Description..." id="ImageDescId" rows="6" class="form-control"></textarea>
                                               
                                                </div>
                                           
                                        </div>

                                        <div class="col-md-3 offset-3 submit-btn-visibility" style="display:none;">
                                               
                                                <div class="form-group">
                                                     <button type="submit" class="btn btn-danger update-btn text-right" >Submit</button>
                                                </div>
                                        </div>

                                            
                                    </section>
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
       
        </div>
                                       
    </div>
                        
</div>

 <!-- End Updating Model Here -->


  <!-- deleting model here Model Code from here -->

<div class="modal delete_image_gallery" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
   
   <div class="modal-dialog modal-md">

       <div class="modal-content">

           <div class="modal-header bg-danger text-light">

               <h4 class="modal-title " id="myLargeModalLabel">Delete Image</h4>
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

           </div>

           <div class="modal-body">

           <div class="row">

                   <div class="col-12">

                       <div class="card">

                           <div class="card-body wizard-content ">

                             
                           
                               <form method="post" action="{{url('delete-gallery-image')}}"  enctype="multipart/form-data">

                               {{csrf_field()}}

                                 

                                       <div class="row">
                                           <div class="col-md-6 offset-3 d-none ">
                                               <div class="form-group">
                                                
                                                   <input type="text" name="gallery_delete_name" class="form-control" id="gallery_image_delete_id"> </div>
                                           </div>

                                           <div class="col-lg-8 offset-2 mt-3">
                                                
                                                <h4 class="card-title">Are You Sure To Delete This ?</h4>
                                        
                                            </div>

                                        </div>   


                                        <div class="text-center mt-3">

                                            <button type="submit" class="btn btn-info waves-effect" data-dismiss="modal">No</button>
                                            <button class="btn btn-danger">Yes</button>    
                                            
                                            
                                        </div>

                               </form>
                           </div>
                       </div>
                   </div>
               </div>

           
           </div>
           
           <!--<div class="modal-footer">
                 <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
               </div> -->

          
           

      
       </div>
                                      
   </div>
                       
</div>

<!-- End model code -->


<!-- Insert Message Start -->

<div id="sa-insert-msg"></div>

@if(!empty(Session::get('error_code')) && Session::get('error_code') == 15)
                                        
<script type="application/javascript">
   
    $(function() {
       
      $("#sa-insert-msg").click();
    });
</script>

@endif 
                 
<!-- Insert Message end -->



<!-- update Message Start -->

<div id="sa-update-msg"></div>

@if(!empty(Session::get('error_code')) && Session::get('error_code') == 10)
                                        
<script type="application/javascript">
   
    $(function() {
       
      $("#sa-update-msg").click();
    });
</script>

@endif 
                 
<!-- update Message end -->


<!-- delete Message Start -->

<div id="sa-delete-msg"></div>

@if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)
                                        
<script type="application/javascript">
   
    $(function() {
       
      $("#sa-delete-msg").click();
    });
</script>

@endif 
                 
<!-- Delete Message end -->



@endsection


@section('backendFile_js')


	<script src="{{asset('public/backend_assets/node_modules/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/backend_assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js')}}"></script>

    <script src="{{asset('public/backend_assets/node_modules/wizard/jquery.steps.min.js')}}"></script>

    <!-- jQuery file upload -->
    <script src="{{asset('public/backend_assets/node_modules/dropify/dist/js/dropify.min.js')}}"></script>

    <script src="{{asset('public/backend_assets/node_modules/switchery/dist/switchery.min.js')}}"></script>
    <script src="{{asset('public/backend_assets/Js/tadaweiImage.js')}}"></script>
    <script src="{{asset('public/frontend_assets/blog-design/frontend-account/date-picker/js/jquery.validate.min.js')}}"></script>

    

    <script>
        $(function () {
            $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
            // responsive table
            $('#config-table').DataTable({
                responsive: true
            });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
        });

    </script>

<script>
        //Custom design form example

       
        $(".tab-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: "Submit"
            },
            onFinished: function (event, currentIndex) {
           
            
                var idVal = $("#gallary_image_id").val();

                if(idVal == ""){
                    
                    $(".submit-btn").click();
               
                }
                else{
               
                    $(".update-btn").click();
                }

                swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
                
            }
        });


        var form = $(".validation-wizard").show();


        $(".validation-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                // finish: "Submit"
            },
           
            onStepChanging: function (event, currentIndex, newIndex) {
                
                return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
            },
            onFinishing: function (event, currentIndex) {
                return form.validate().settings.ignore = ":disabled", form.valid()
            },
            onFinished: function (event, currentIndex) {

           
                swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
               
            }
        }), $(".validation-wizard").validate({
            ignore: "input[type=hidden]",
            errorClass: "text-danger",
            successClass: "text-success",
            highlight: function (element, errorClass) {
                $(element).removeClass(errorClass)
            },
            unhighlight: function (element, errorClass) {
                $(element).removeClass(errorClass)
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element)
            },
            rules: {
                email: {
                    email: !0
                }
            }
            
        })
        
    </script>


<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>

<script>

    //// switcher code 
        $(function () {
            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function () {
                new Switchery($(this)[0], $(this).data());
            });    
          
        });
    </script>
    <script>

    //// switcher code 
    $(document).ready(function(){
           

        
        


        $(document).on('click','.update_image_btn',function(e)      
        {   
		
           
            

            $(".image_div").css("display","block");
            $(".thumb_div").css("display","block");
            $(".image_update_material").css("display","none");
            $(".update_image_btn").css("display","none");
           
	    });	


        $(document).on('click','.btn-insert-image',function(e)
        {   
		
            $("#gallary_image_id").val("");
           
	    });	

        $(document).on('click','.step',function(e)
        {   
		
                alert("done");
	    });	


        $(".sub-ti-check").change(function(){

            var SubCheckSelect =  $(this).is(":checked");

            if(SubCheckSelect){

             $(".sub-title-side").css("display","flex");
             
         
            }else{
              $(".sub-title-side").css("display","none");
              
            }
        
        });


        $(".title-check").change(function(){

            var TiCheckSelect =  $(this).is(":checked");

            if(TiCheckSelect){

                 $(".title-side").css("display","flex");
 

            }else{
            
                $(".title-side").css("display","none");
  
            }     
        });

        $(".phone-check").change(function(){

            var PhoneCheckSelect =  $(this).is(":checked");

        if(PhoneCheckSelect){

        $(".phone-side").css("display","flex");


        }else{

        $(".phone-side").css("display","none");

        }
        
    });

 });

    </script>

<script>

// $(function () {
    
//     $("#pdpLightorang").persianDatepicker({ theme: "lightorang", alwaysShow: false, });
   
// });

$(function() {

  $("#datepicker").datepicker();

} );

</script>

   

   
  @endsection