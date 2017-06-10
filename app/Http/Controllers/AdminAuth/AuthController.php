<?php

namespace App\Http\Controllers\AdminAuth;

use App\Admin;
use Validator;
use App\Http\Controllers\Controller;
use App\Http\Middleware;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use Illuminate\Support\Facades\Input;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';
    protected $guard = 'admin';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware("admin");
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }


  
   public function showLoginForm()
    {
        if (Auth::guard('admin')->check())
        {
            return redirect('/emplyee');
        }
        
        return view('emplyee.index');
    }


    
    public function showRegistrationForm()
    {
        return view('emplyee.auth.register');
    }




  
    public function resetPassword()
    {
        return view('emplyee.auth.passwords.email');
    }
    
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/emplyee');
    }

    public function login(){
    $auth = auth()->guard('admin');
    $auth=$auth->attempt(array(

          'email' => Input::get('email'),
          'password' => Input::get('password')
            ));

    if($auth){

         return redirect('/emplyee/home');

    }else{

       echo 'Error';
    }
    
    }
// public function adminLogin(){
//         $input = Input::all();
//         if(count($input) > 0){
//             $auth = auth()->guard('admin');

//             $credentials = [
//                 'email' =>  $input['email'],
//                 'password' =>  $input['password'],
//             ];

//             if ($auth->attempt($credentials)) {
//                  return redirect('/admin');                     
//             } else {
//                 echo 'Error';
//             }
//         } else {
//             return view('admin.login');
//         }
//     }

}
