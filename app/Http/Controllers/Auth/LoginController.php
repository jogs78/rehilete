<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Illuminate\Support\Facades\Hash;

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
    public function login(){
        $request =  request();
        $credentials=$this->validate(request(),[
            'email' => 'required|email|string',
            'password' => 'required|string'
        ]);
        $email = $request->get('email');
        $password = $request->get('password');


        if(User::where('email', '=', $email)->first()){
            $usuario=User::where('email', '=', $email)->first();
            
            if (Hash::check($password, $usuario->password)){
                    if ($usuario->rol == "manager"){
                        return Redirect::to('administrador/dashboard');
                    }
                    elseif($usuario->rol == "employee"){
                        return Redirect::to('administrador/empleado');
                    }
                    elseif($usuario->rol == "client"){
                        return Redirect::to('sesion');
                    }
            }
            else {
                return back()->withErrors(['password'=> trans('La contraseña es incorrecta')]);
            }
        
        }
        else{
            return back()->withErrors(['email'=> trans('Este usuario no existe')]);
        }
    }

    public function logout(){
        return Redirect::to('login');
    }

}
