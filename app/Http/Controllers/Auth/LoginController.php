<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

use App\Models\Usuario;

use Redirect;
use Image;
use Helpers;
use URL;
use Auth;
use View;
use Hash;
use Session;

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

    // protected $redirectTo = '/temas/lista';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //GET form de login
    public function showLoginForm() {
        $email = null;
        $mensaje = null;
        return View::make('auth.login',compact('mensaje','email'));
    }

    //POST de login
    public function login(Request $request) {
        $items = $request->validate([           
            'email' => 'exists:usuarios,email|required|string|email|max:255',            
            'password' => 'required|string|min:6'            
        ]);
                
        $data = $request->all();          

        $usuario = Usuario::where('email','=',$request->email)->first();                    
        $password = hash('sha256', $usuario->password_salt . md5($request->password));
        
        if (Auth::attempt(['email'=> $request->email, 'password_hash' => $password],$request->remember)) {            
                        
            return Redirect::to('/home');            
            
        }else {
            $mensaje = 'Contraseña incorrecta';
            $email = $request->email;
            
            // return Redirect::to('/login');            
            return view('auth.login',compact('mensaje','email'));
        }

        
    }

    //POST de logout
    public function logout() {
        Session::flush();
        Auth::logout();        
        return Redirect::to('/');
    }
}
