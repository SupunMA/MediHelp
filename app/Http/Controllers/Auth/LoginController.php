<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     //redirecting method created
    protected function redirectTo(){
        if(Auth()->user()->role == 1){
            return route('admin.home');
        }elseif(Auth()->user()->role == 0){
            return route('user.home');
        }elseif(Auth()->user()->role == 3){
            return route('checker.home');
        }elseif(Auth()->user()->role == 2){
            return route('doctor.home');
        }
    }


    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'],
        'password' => $input['password'])))
        {

            if(auth()->user()->role == 1){
                return redirect()->route('admin.home');
            }elseif(auth()->user()->role == 0){
                return redirect()->route('user.home');
            }elseif(auth()->user()->role == 2){
                return redirect()->route('doctor.home');
            }elseif(Auth()->user()->role == 3){
                return redirect()->route('checker.home');
            }

        }else{
            return redirect()->route('login')->with('message','Email or Password is Wrong!. Try again');

        }
    }

}