<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Session;
use Redirect;
use DB;
use Image_resize;
use App\SliderImageTable;
use App\GalleryImage;


class ImagesController extends Controller
{



    public function viewImageSlider(){

        $image_slider_data = SliderImageTable::all();
        return view("Backend/PageManager/image-slider-cms",compact("image_slider_data"));
      }

    public function insertImage(Request $request){

    
        $image_slider =  new SliderImageTable();

        $validator = Validator::make($request->all(), [ 
         "slider_image_name"=>'required',   
         "imageDescription"=>'required',
         "page_name"=>'required',
       ]);
     
        if ($validator->fails()){
        
          
            return  Redirect::back()->with('error_code', 5)->withErrors($validator)->withInput();

         
    
        }
    
        else {
    
        if($request->File('slider_image_path')->getClientOriginalName() != ""){

           
          $Image_link = $request->file("slider_image_path"); 
    
          $Image_link_name = $Image_link->getClientOriginalName();
    
    
          $link_destination_path = public_path("/backend_image/TadaweiSliderImages");
          $extension = $request->file('slider_image_path')->getClientOriginalExtension();
    
    
          //filename to store
          $SliderGeneratedName = $Image_link_name.'_'.time().'.'.$extension;
          
          $Image_link->move($link_destination_path,$SliderGeneratedName);
    
          $image_slider->Image_path_name = $Image_link_name;
          $image_slider->Image_path_GeneratedName   = $SliderGeneratedName;
        }
    
          $image_slider->Image_name  = $request->slider_image_name;
          $image_slider->page_id  =  $request->page_name;
          $image_slider->description = $request->imageDescription;

         if($request->titleCheck == "on"){
            $image_slider->title  = $request->TitleData;
         }
         
         if($request->subTitleChecked == "on"){
            $image_slider->subTitle  =  $request->subTitleData;
         }

         if($request->phoneChecked == "on"){
            $image_slider->phoneNumber = $request->PhoneData;
         }

         $image_slider->save();
         Session::flash('Success','Image Inserted Successfully');
         return Redirect::back()->with('error_code', 15);
        //  return redirect()->back();

    
     }
    }


    public function updateImageSlider(Request $request){


   

        $validator = Validator::make($request->all(), [
       
         "slider_image_nameUpdate"=>'required',
         "imageDescriptionUpdate"=>'required',
         "page_nameUpdate"=>'required'

       ]);
       
        if ($validator->fails()){
          return  Redirect::back()->with('rt', 5)->withErrors($validator)->withInput();
            
           

       }
       else {

        $image_id = $request->imageIdUpdateValue;
        $image_slier_update =  SliderImageTable::find($image_id);


        // slider_image_pathUpdate

        $old = $request->old_image_path;
        if($request->hasFile('slider_image_pathUpdate')){
            
            $image_value= $request->file("slider_image_pathUpdate");
            $image_name = $image_value->getClientOriginalName();
            $image_destination = public_path("/backend_image/TadaweiSliderImages");
        
            $extension = $request->file('slider_image_pathUpdate')->getClientOriginalExtension();
        
            //filename to store
            $ImageGeneratedName = $image_name.'_'.time().'.'.$extension;
            $image_value->move($image_destination,$ImageGeneratedName);
        
            $image_slier_update->Image_path_GeneratedName = $ImageGeneratedName;
            unlink(public_path("/backend_image/TadaweiSliderImages/".$old));

            $image_slier_update->save();
        
        }

            $image_slier_update->Image_name  = $request->slider_image_nameUpdate;
            $image_slier_update->page_id  =  $request->page_nameUpdate;
            $image_slier_update->description = $request->imageDescriptionUpdate;


            if($request->titleCheck == "on"){
                $val_title = $request->TitleDataUpdate != "";
                if($val_title){
                    $image_slier_update->title = $request->TitleDataUpdate;
                }
            
            }
         
            if($request->subTitleChecked == "on"){
                $val_sub_title = $request->subTitleDataUpdate != "";
                if($val_title){
                    $image_slier_update->subTitle = $request->subTitleDataUpdate;
                }
                
            }

            if($request->phoneChecked == "on"){
                $val_phone = $request->PhoneDataUpdate != "";
                if($val_phone){
                    $image_slier_update->phoneNumber = $request->PhoneDataUpdate;
                }
            
            }

            $image_slier_update->save();
            Session::flash('Success','Image updated Successfully');
            return Redirect::back()->with('error_code', 10);
            // return redirect()->back();
       


       }
    }
    

    

    public function deleteImageSlider(Request $request){


        $image_id = $request->input('name_delete_name');
        $image =  SliderImageTable::find($image_id);
      
       unlink(public_path("/backend_image/TadaweiSliderImages/".$image->Image_path_GeneratedName));
      
        $image->delete();
        

       Session::flash('Success','Image Deleted Successfully');
       return Redirect::back()->with('error_code', 5);
        // return redirect()->back();
       
      }


    public function viewGallery(){

       $gallary_data = GalleryImage::all();
       return view("Backend/PageManager/gallery-cms",compact("gallary_data"));

    }
      
    public function insertGallaryImage(Request $request){

        $image_gallary =  new GalleryImage();

        $validator = Validator::make($request->all(), [ 
         "gallaryImage"=>'required',   
         "gallary_image_path"=>'required',
         "thumbnail_image"=>'required',
         "imageDescription"=>'required',
         "gallary_date"=>'required',
       ]);
     
        if ($validator->fails()){
          
            return  Redirect::back()->with('error_code', 5)->withErrors($validator)->withInput();
        }
    
        else {
    

            if($request->hasFile('gallary_image_path')){

                $gallary_image = $request->file("gallary_image_path"); 
    
                $gallary_image_name = $gallary_image->getClientOriginalName();
          
          
                $gallary_destination_path = public_path("/backend_image/TadaweiGallary");
                $extension = $request->file('gallary_image_path')->getClientOriginalExtension();
          
          
                //filename to store
                $gallary_generated_name = time().$gallary_image_name;
                
                $gallary_image->move($gallary_destination_path,$gallary_generated_name);
          
                $image_gallary->Image_path_GeneratedName   = $gallary_generated_name;
            }

            if($request->hasFile('thumbnail_image')){
                
                $gallary_image_thumb = $request->file("thumbnail_image"); 
    
                $gallary_image_thumb_name = $gallary_image_thumb->getClientOriginalName();
          
          
                $gallary_destination_thumb_destination = public_path("/backend_image/TadaweiGallary");
                $extension = $request->file('thumbnail_image')->getClientOriginalExtension();
          
          
                //filename to store
                $gallary_thumb_generated_name = time().$gallary_image_thumb_name;
                
                $gallary_image_thumb->move($gallary_destination_thumb_destination,$gallary_thumb_generated_name);
          
                $image_gallary->thumb_path_GeneratedName  = $gallary_thumb_generated_name;

            }
    
                $image_gallary->Image_name  = $request->gallaryImage;
                $image_gallary->date  =  $request->gallary_date;
                $image_gallary->description = $request->imageDescription;
                	
                $image_gallary->save();
                Session::flash('Success','Image Inserted Successfully');
                return Redirect::back()->with('error_code', 15);
       

    
     }
    }
      

    public function updateGallaryImage(Request $request){

    

        $validator = Validator::make($request->all(), [
       
            "gallary_imageNameUpdate"=>'required',
            "gallary_date_update"=>'required',
            "imageDescriptionUpdate"=>'required'
   
          ]);
          
           if ($validator->fails())
           {
             return  Redirect::back()->with('rt', 5)->withErrors($validator)->withInput();
               
          }
          else {
   
           $imageGallary_id = $request->gallary_image_id_update;
           $image_gallary_update =  GalleryImage::find($imageGallary_id);
   
   
           // slider_image_pathUpdate
   
           $old_path = $request->old_gallary_image;
           $old_thumb = $request->old_gallary_image_thumb;

           if($request->hasFile('gallary_path_update')){
               
               $image_value_update= $request->file("gallary_path_update");
               $image_path_name_update = $image_value_update->getClientOriginalName();
               $image_destination_update_path = public_path("/backend_image/TadaweiGallary");
           
               $extension = $request->file('gallary_path_update')->getClientOriginalExtension();
           
               //filename to store
               $ImagePathGeneratedName = time().$image_path_name_update;
               $image_value_update->move($image_destination_update_path,$ImagePathGeneratedName);
           
               $image_gallary_update->Image_path_GeneratedName = $ImagePathGeneratedName;
               unlink(public_path("/backend_image/TadaweiGallary/".$old_path));
   
               $image_gallary_update->save();
           
           }

           if($request->hasFile('gallary_thumb_update')){
               
            $image_thumb_value_update= $request->file("gallary_thumb_update");
            $image_thumb_name_update = $image_thumb_value_update->getClientOriginalName();
            $image_destination_update_thumb = public_path("/backend_image/TadaweiGallary");
        
            $extension = $request->file('gallary_thumb_update')->getClientOriginalExtension();
        
            //filename to store
            $ImagePathGeneratedName_thumb = time().$image_thumb_name_update;
            $image_thumb_value_update->move($image_destination_update_thumb,$ImagePathGeneratedName_thumb);
        
            $image_gallary_update->thumb_path_GeneratedName = $ImagePathGeneratedName_thumb;
            unlink(public_path("/backend_image/TadaweiGallary/".$old_thumb));

            $image_gallary_update->save();
        
        }
   
            $image_gallary_update->Image_name  = $request->gallary_imageNameUpdate;
            $image_gallary_update->description = $request->imageDescriptionUpdate;
            $image_gallary_update->date = $request->gallary_date_update;

            $image_gallary_update->save();
            Session::flash('Success','Image updated Successfully');
            return Redirect::back()->with('error_code', 10);
               
          }
    }

    public function deleteGallaryImage(Request $request){

       
        $gallery_delete_id = $request->gallery_delete_name;
        $image =  GalleryImage::find($gallery_delete_id);
      
       unlink(public_path("/backend_image/TadaweiGallary/".$image->Image_path_GeneratedName));
       unlink(public_path("/backend_image/TadaweiGallary/".$image->thumb_path_GeneratedName));
      
        $image->delete();
        

       Session::flash('Success','Image Deleted Successfully');
       return Redirect::back()->with('error_code', 5);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
