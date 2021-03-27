<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




/// for changing the logout redirection go to authenticatedUser and in logout method
/// for blade directive go to bladeServiceProvider and find hasrole


//Route::get('/','CMS_Controller@cmsLogin')->name('cms.loginpage');




Route::get('/register','RegisterController@showRegistrationForm');

Route::group(['middleware' => ['auth']], function () {

  

//////////////////////////////////////////////// CMS Routes ///////////////////////////////////////////////////


//Route::get('portal-management','CMS_Controller@index')->name('cms.mainpage');

Route::get('/','CMS_Controller@index')->name('cms.mainpage');




/////////////////////////////////////////  Image Slider   //////////////////////////////////////////////////////////

Route::get('slider-images','ImagesController@viewImageSlider')->name('cms.image_slider');


/// add new slider image
Route::post('imageSlider',"ImagesController@insertImage")->name('Image.SliderImage');


/// update slider image
Route::post('imageSlider-update',"ImagesController@updateImageSlider")->name('Image.SliderImageUpdate');

/// delete slider image 
Route::post('delete-image-slider',"ImagesController@deleteImageSlider")->name('Image.SliderImageDelete');




///////////////////////////// Gallary Image ///////////////////////////////////////////////////////////////////////

Route::get('gallery','ImagesController@viewGallery')->name('cms.gallary');

/// add new slider image
Route::post('add-image-gallery',"ImagesController@insertGallaryImage")->name('Image.gallaryImage');

/// update slider image
Route::post('gallary-update',"ImagesController@updateGallaryImage")->name('Image.gallaryImageUpdate');

/// delete slider image 
Route::post('delete-gallery-image',"ImagesController@deleteGallaryImage")->name('Image.SliderImageDelete');


/////////////////////////////////////////  user management ////////////////////////////////////////////////////////////////


Route::get('register','CMS_Controller@cmsRegisterUser')->name('cms.register-user');
Route::get('/all-users',"CMS_Controller@viewAllUsers")->name("cms.all-users");



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



/////////////////////////////////////////// Blog routes ///////////////////////////////////////////////////////////////// 


//// home page 
Route::get('home','BlogController@index')->name('blog.home');


// article page
Route::get('articles','BlogController@viewArtcilePage')->name('blog.article');


/// video page 
Route::get('videos','BlogController@viewVideoPage')->name('blog.video');

/// about us  page 
Route::get('about','BlogController@viewAboutPage')->name('blog.about');


/// contact us  
Route::get('contact-us','BlogController@viewContactPage')->name('blog.contact');

//////////////////////////////////////////// Account Routes   ////////////////////////////////////////////////////////////////

Route::get('account-management','AccountController@index')->name('account.mainpage');



});


Auth::routes();

