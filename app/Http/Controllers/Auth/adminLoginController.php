<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;

class adminLoginController extends Controller
{
    

	// public function __construct(){
	// 	$this->middleware('guest:admin');
	// }

    public function showLoginForm(){
    	return view('auth.admin_login');
    }
    public function login(Request $request){
    	
    	$this->validate($request,[

    		'email' => 'required|email',
    		'password' =>'required|min:6'
    	]);

    	if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
    		// return redirect()->intended(route('admin.dashboard'));
            return redirect()->intended(route('cms.mainpage'));
    	}
    	return redirect()->back()->withInput($request->only('email','remember'));

    }
}




