<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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

    public function redirectTo()
    {
      // if (Auth::user()->level == 'admin') {
      //   $this->redirectTo = route('dashboard');
      //   return $this->redirectTo;
      // }
      // Maksudnya sama dengan yg diatas 
      if (Auth::user()->hasRole('admin')) {
        $this->redirectTo = route('dashboard');
        return $this->redirectTo;
      }
      else if (Auth::user()->hasRole('dosen')) {
        $this->redirectTo = route('dashboard');
        return $this->redirectTo;
      }
      else if (Auth::user()->hasRole('gkm')) {
        $this->redirectTo = route('dashboard');  // home
        return $this->redirectTo;
      }
      // Coba Role Homeless
      else if (Auth::user()->hasRole('homeless')) {
        $this->redirectTo = route('home'); 
        // $this->redirectTo = url('/home');
        return $this->redirectTo;
      }




    }

}
