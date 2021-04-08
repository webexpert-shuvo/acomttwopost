<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //Many Way to Login

    public function username()
    {

        $log_data =    request()->input('logdata');

        $phone_login = substr($log_data , 0 , 4);

        if (filter_var($log_data, FILTER_VALIDATE_EMAIL)) {
            $type = 'email';
        }elseif($phone_login == '8801'){
            $type = 'cell';

        }else{
            $type = 'uname';
        }

        request()->merge([$type =>$log_data ]);
        return $type;

    }



    //After Logout
    protected function loggedOut(Request $request)
    {
        return redirect()->route('loginpage.show');
    }




}
