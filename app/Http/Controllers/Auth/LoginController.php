<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;
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
    // protected $redirectTo = RouteServiceProvider::HOME;
        protected function authenticated(Request $request, $user)
    {
        if($user->role == 'admin'){
        return redirect('/admin');
        }
        
            if($user->role == 'teacher'){
                return redirect('/faculty');
            }

            if($user->role == 'student'){
                return redirect('/user');
            }

        // if($user->hasRole('user')){
        //     return redirect('/user');
        // }

        //  if($user->hasRole('teacher')){
        //     return redirect('/faculty');
        // }

    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


}
