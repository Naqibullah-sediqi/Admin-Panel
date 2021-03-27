<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Role;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

         $this->middleware('guest');

          // $user =  User::all()->count();
          // if($user > 0){

          //    $this->middleware('auth');
          // }

          // else {
          //   $this->middleware('guest');
       
          // }
         
       
      

    }

    public function showRegistrationForm(){

             $user =  User::all()->count();
             $roles = Role::all();
        return view('auth/register',compact('user','roles'));
    }

     public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

   

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }


    protected function redirectTo(){

        // return url()->previous();
         // if(auth()->user()->role_id == 1){
         //    return '/';
         // }
         return '/';
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'nic' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

            $users =  User::all()->count();
         

            $user = User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'nic' => $data['nic'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

             if($users == 0){
             $role =  Role::create([
            "role_name" => 'Admin',
            'description' => 'the user with full authority'
            ]);

            $user->roles()->attach($role);

            $role =  Role::create([
            "role_name" => 'User',
            'description' => 'the user with less authority'
            ]);


            
             return  $user;
           }
           else {

             $role = $data['role_data'];
             $user->roles()->attach($role);
             return $user;
                }
      
    
}
}