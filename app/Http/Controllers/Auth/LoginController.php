<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated()
    {
        
        $redirectstr='/home';
      if (Auth::user()->type==1) {
        return redirect('/user') ;
      }
      elseif (Auth::user()->type==2){
        return redirect('/officer') ;
      } else {
        return redirect('/officer');
      }
    
        echo $redirectstr.'<br>';
        // print_r($actions);
        // return 'xx';
        return redirect($redirectstr);
    }
}
